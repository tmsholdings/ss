<!-- BEGIN: main -->
<span class="visible-xs-inline-block"><a title="{LANG.contactUs}" class="pointer button" data-toggle="tip" data-target="#contactList" data-click="y"><em class="icon-old-phone icon-lg"></em><span class="hidden">{LANG.contactUs}</span></a></span>
<div id="contactList" class="content">
<strong class="visible-xs-inline-block margin-bottom">{LANG.contactUs}</strong>
<ul class="contactList">
    <!-- BEGIN: phone --><li><em class="fa fa-phone"></em>&nbsp;<!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><!-- BEGIN: href --><a href="tel:{PHONE.href}"><!-- END: href -->{PHONE.number}<!-- BEGIN: href2 --></a><!-- END: href2 --><!-- END: item --></li><!-- END: phone -->
    <!-- BEGIN: email --><li><em class="fa fa-envelope"></em>&nbsp;<!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><a href="{DEPARTMENT.emailhref}">{EMAIL}</a><!-- END: item --></li><!-- END: email -->
    <!-- BEGIN: skype --><li><em class="fa fa-skype"></em>&nbsp;<!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><a href="skype:{SKYPE.value}?call" title="{SKYPE.name}">{SKYPE.value}</a><!-- END: item --></li><!-- END: skype -->
    <!-- BEGIN: viber --><li><em class="icon-viber"></em>&nbsp;<!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><a href="viber://pa?chatURI={VIBER.value}" title="{VIBER.name}">{VIBER.value}</a><!-- END: item --></li><!-- END: viber -->
    <!-- BEGIN: icq --><li><em class="icon-icq"></em>&nbsp;<!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><a href="icq:message?uin={ICQ.value}" title="{ICQ.name}">{ICQ.value}</a><!-- END: item --></li><!-- END: icq -->
    <!-- BEGIN: whatsapp --><li><em class="fa fa-whatsapp"></em>&nbsp;<!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><a href="https://wa.me/{WHATSAPP.value}" title="{WHATSAPP.name}">{WHATSAPP.value}</a><!-- END: item --></li><!-- END: whatsapp -->
    <!-- BEGIN: zalo --><li><em class="icon-zalo"></em>&nbsp;<!-- BEGIN: item --><!-- BEGIN: comma -->&nbsp; <!-- END: comma --><a href="https://zalo.me/{ZALO.value}" title="{ZALO.name}">{ZALO.value}</a><!-- END: item --></li><!-- END: zalo -->
    <!-- BEGIN: other --><li>{OTHER.name}:&nbsp; {OTHER.value}</li><!-- END: other -->
</ul>
</div>
<!-- END: main -->