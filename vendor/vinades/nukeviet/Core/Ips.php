<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2022 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

namespace NukeViet\Core;

/**
 * NukeViet\Core\Ips
 *
 * @package NukeViet\Core
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @version 4.5.00
 * @access public
 */
class Ips
{
    public $client_ip;

    public $forward_ip;

    public $remote_addr;

    public $remote_ip;

    public $is_proxy = 0;

    private $ip6_support = false;

    /**
     * __construct()
     *
     * @param array $sys
     */
    public function __construct($sys = [])
    {
        $this->client_ip = trim($this->nv_get_clientip());
        $this->forward_ip = trim($this->nv_get_forwardip());
        $this->remote_addr = trim($this->nv_get_remote_addr());
        $this->remote_ip = trim($this->nv_getip());

        $this->ip6_support = (bool) $sys['ip6_support'];
    }

    /**
     * nv_getenv()
     *
     * @param string $key
     * @return string
     */
    private function nv_getenv($key)
    {
        if (isset($_SERVER[$key])) {
            if (strpos($_SERVER[$key], ',')) {
                $_arr = explode(',', $_SERVER[$key]);

                return trim($_arr[0]);
            }

            return $_SERVER[$key];
        }
        if (isset($_ENV[$key])) {
            return $_ENV[$key];
        }
        if (@getenv($key)) {
            return @getenv($key);
        }
        if (function_exists('apache_getenv') and apache_getenv($key, true)) {
            return apache_getenv($key, true);
        }

        return '';
    }

    /**
     * getIp()
     *
     * @param string $variable_name
     * @return false|string
     */
    private function getIp($variable_name)
    {
        $ip = $this->nv_getenv($variable_name);
        if ($ip and $this->nv_validip($ip)) {
            return $ip;
        }

        return false;
    }

    /**
     * nv_validip()
     *
     * @param string $ip
     * @return bool
     */
    public function nv_validip($ip)
    {
        return filter_var($ip, FILTER_VALIDATE_IP);
    }

    /**
     * isIp4()
     *
     * @param string $ip
     * @return bool
     */
    public function isIp4($ip)
    {
        return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
    }

    /**
     * isIp6()
     *
     * @param string $ip
     * @return bool
     */
    public function isIp6($ip)
    {
        return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6);
    }

    /**
     * server_ip()
     *
     * @return string
     */
    public function server_ip()
    {
        if (($ip = $this->getIp('SERVER_ADDR')) !== false) {
            return $ip;
        }
        if ($_SERVER['SERVER_NAME'] == 'localhost') {
            return '127.0.0.1';
        }
        if (function_exists('gethostbyname')) {
            return gethostbyname($_SERVER['SERVER_NAME']);
        }

        return 'none';
    }

    /**
     * nv_get_clientip()
     *
     * @return string
     */
    private function nv_get_clientip()
    {
        if (($ip = $this->getIp('HTTP_CLIENT_IP')) !== false) {
            return $ip;
        }
        if (($ip = $this->getIp('HTTP_VIA')) !== false) {
            return $ip;
        }
        if (($ip = $this->getIp('HTTP_X_COMING_FROM')) !== false) {
            return $ip;
        }
        if (($ip = $this->getIp('HTTP_COMING_FROM')) !== false) {
            return $ip;
        }

        return 'none';
    }

    /**
     * nv_get_forwardip()
     *
     * @return string
     */
    private function nv_get_forwardip()
    {
        if (($ip = $this->getIp('HTTP_X_FORWARDED_FOR')) !== false) {
            return $ip;
        }
        if (($ip = $this->getIp('HTTP_X_FORWARDED')) !== false) {
            return $ip;
        }
        if (($ip = $this->getIp('HTTP_FORWARDED_FOR')) !== false) {
            return $ip;
        }
        if (($ip = $this->getIp('HTTP_FORWARDED')) !== false) {
            return $ip;
        }

        return 'none';
    }

    /**
     * nv_get_remote_addr()
     * Địa chỉ IP người dùng đang truy cập do máy chủ cung cấp
     *
     * @return string
     */
    private function nv_get_remote_addr()
    {
        if (($ip = $this->getIp('REMOTE_ADDR')) !== false) {
            return $ip;
        }

        return 'none';
    }

    /**
     * nv_getip()
     *
     * @return string
     */
    private function nv_getip()
    {
        if (($ip = $this->getIp('HTTP_CF_CONNECTING_IP')) !== false) {
            return $ip;
        }
        if ($this->client_ip != 'none') {
            return $this->client_ip;
        }
        if ($this->forward_ip != 'none') {
            return $this->forward_ip;
        }
        if ($this->remote_addr != 'none') {
            return $this->remote_addr;
        }

        if ($_SERVER['SERVER_NAME'] == 'localhost') {
            return '127.0.0.1';
        }

        return 'none';
    }

    /**
     * nv_check_proxy()
     *
     * @return string
     */
    public function nv_check_proxy()
    {
        $proxy = 'No';
        if ($this->client_ip != 'none' or $this->forward_ip != 'none') {
            $proxy = 'Lite';
        }
        $host = @gethostbyaddr($this->remote_ip);
        if (stristr($host, 'proxy')) {
            $proxy = 'Mild';
        }
        if ($this->remote_ip == $host) {
            $proxy = 'Strong';
        }

        return $proxy;
    }

    /**
     * checkIp6()
     * Kiểm tra xem địa chỉ IP $requestIp có nằm trong dải $ip hoặc bằng với $ip không
     *
     * @param string $requestIp
     * @param string $ip
     * @return bool|int
     */
    public function checkIp6($requestIp, $ip)
    {
        if (!$this->ip6_support) {
            // Không hỗ trợ xử lý IPv6 trả về -1
            return -1;
        }

        if (strpos($ip, '/') !== false) {
            list($address, $netmask) = explode('/', $ip, 2);

            if ($netmask === '0') {
                return (bool) unpack('n*', inet_pton($address));
            }

            if ($netmask < 1 or $netmask > 128) {
                return false;
            }
        } else {
            $address = $ip;
            $netmask = 128;
        }

        $bytesAddr = unpack('n*', inet_pton($address));
        $bytesTest = unpack('n*', inet_pton($requestIp));

        if (!$bytesAddr or !$bytesTest) {
            return false;
        }

        for ($i = 1, $ceil = ceil($netmask / 16); $i <= $ceil; ++$i) {
            $left = $netmask - 16 * ($i - 1);
            $left = ($left <= 16) ? $left : 16;
            $mask = ~(0xffff >> $left) & 0xffff;
            if (($bytesAddr[$i] & $mask) != ($bytesTest[$i] & $mask)) {
                return false;
            }
        }

        return true;
    }

    /**
     * is_localhost()
     *
     * @param string $ip
     * @return bool
     */
    public function is_localhost($ip = '')
    {
        if (empty($ip)) {
            $ip = $this->remote_ip;
        }

        return substr($ip, 0, 4) == '127.' or $ip == '::1';
    }
}
