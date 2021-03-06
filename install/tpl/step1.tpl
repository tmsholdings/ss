<!-- BEGIN: step -->
<script type="text/javascript">
    function nv_checklang() {
        url = $("#lang").val();
        if (url == 'none') {
            alert('{LANG.select_language}');
            return false;
        } else if (url == 'other') {
            top.location.href = 'http://translate.tms.vn/en/translate/download/';
        } else {
            top.location.href = url;
        }
    }
</script>

<p>{LANG.select_lang_des}</p>
<form action="#" id="checklang">
    <p>
        <select class="select" id="lang" onchange="return nv_checklang()">
            <option value="none">{LANG.choose_lang}</option>
            <!-- BEGIN: languagelist -->
            <option value="{BASE_SITEURL}install/index.php?{LANG_VARIABLE}={LANGTYPE}&amp;step=1&amp;t={NV_CURRENTTIME}"{SELECTED}>{LANGNAME}</option>
            <!-- END: languagelist -->
            <option value="other">Other Language</option>
        </select>
    </p>
    <ul class="control_t fr">
        <li><span class="next_step" id="next_step"><a href="{BASE_SITEURL}install/index.php?{LANG_VARIABLE}={CURRENTLANG}&amp;step=2&amp;t={NV_CURRENTTIME}">{LANG.next_step}</a></span></li>
    </ul>
</form>
<!-- BEGIN: check_supports_rewrite -->
<script type="text/javascript">
    $("#next_step").hide();
    var supports_rewrite = '';
    $.ajax({
        url : '{BASE_SITEURL}check.rewrite',
        type : 'GET',
        success : function(theResponse) {
            if (theResponse == "rewrite_mode_apache" || theResponse == "rewrite_mode_iis" || theResponse == "nginx") {
                supports_rewrite = theResponse;
            }
            nv_setCookie("supports_rewrite", supports_rewrite, 86400);
            $("#next_step").show();
        },
        error : function(theResponse) {
            $("#next_step").show();
        }
    });
</script>
<!-- END: check_supports_rewrite -->
<div class="clearfix"></div>

<!-- END: step -->
