<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

namespace NukeViet\Api;

/**
 * NukeViet\Api\IApi
 *
 * @package NukeViet\Api
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @version 4.5.00
 * @access public
 */
interface IApi
{
    /**
     * getAdminLev()
     * Lấy được quyền hạn sử dụng của admin
     * Admin tối cao, điều hành chung hay quản lý module được sử dụng
     *
     * @return mixed
     */
    public static function getAdminLev();

    /**
     * getCat()
     * Danh mục, cũng là khóa ngôn ngữ của API
     * Nếu không có danh mục thì trả về chuỗi rỗng
     *
     * @return mixed
     */
    public static function getCat();

    /**
     * setResultHander()
     * Thiết lập trình xử lý kết quả
     *
     * @return mixed
     */
    public function setResultHander(ApiResult $result);

    /**
     * execute()
     * Thực thi API
     *
     * @return mixed
     */
    public function execute();
}
