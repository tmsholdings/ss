/**
 * TMS Content Management System
 * @version 4.x
 * @author Tập Đoàn TMS Holdings <contact@tms.vn>
 * @copyright (C) 2009-2021 Tập Đoàn TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://tms.vn
 */

var nv_loading = '<div class="text-center"><em class="fa fa-spin fa-spinner fa-2x m-bottom wt-icon-loading"></em></div>';

function start_tooltip() {
    $('[data-toggle="tooltip"]').tooltip();
}

$(document).ready(function() {
    $("body").delegate("#sysUpdRefresh", "click", function() {
        $("#sysUpd").html(nv_loading).load("index.php?" + nv_name_variable + "=webtools&" + nv_fc_variable + "=checkupdate&i=sysUpdRef&num=" + nv_randomPassword(10), function() {
            start_tooltip();
        });
    });
    $("body").delegate("#extUpdRefresh", "click", function() {
        $("#extUpd").html(nv_loading).load("index.php?" + nv_name_variable + "=webtools&" + nv_fc_variable + "=checkupdate&i=extUpdRef&num=" + nv_randomPassword(10), function() {
            start_tooltip();
        });
    });
    $("body").delegate(".ninfo", "click", function() {
        $(".ninfo").each(function() {
            $(this).show()
        });
        $(".wttooltip").each(function() {
            $(this).hide()
        });
        $(this).hide().next(".wttooltip").show();
        return false
    });
    $("body").delegate(".wttooltip", "click", function() {
        $(this).hide().prev(".ninfo").show();
    });
});
