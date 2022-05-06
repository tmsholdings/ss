<!-- BEGIN: main -->

<div id="admintoolbar">
    <ul>
        <li><a href="{NV_ADMINDIR}"><em class="fa fa-cogs"></em><span>{GLANG.admin_page}</span></a></li>
        <!-- BEGIN: is_modadmin --><li><a href="{URL_MODULE}"><em class="fa fa-wrench"></em><span>{GLANG.admin_module_sector} {MODULENAME}</span></a></li><!-- END: is_modadmin -->
        <!-- BEGIN: is_spadmin --><li><a href="{URL_DBLOCK}"><em class="fa fa-object-group"></em><span>{LANG_DBLOCK}</span></a></li><!-- END: is_spadmin -->
        <li><a href="{URL_AUTHOR}"><em class="fa fa-user-secret"></em><span>{GLANG.admin_view}</span></a></li>
        <li><a href="#" data-toggle="nv_admin_logout"><em class="fa fa-power-off"></em><span>{GLANG.logout}</span></a></li>
    </ul>
</div>
<!-- END: main -->