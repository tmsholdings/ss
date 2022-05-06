<!-- BEGIN: main -->
<!-- BEGIN: loop -->
    <!-- BEGIN: image -->
    <div class="text-center m-bottom">
        <img src="{DEPARTMENT.image}" srcset="{DEPARTMENT.srcset}" class="img-thumbnail" alt="{DEPARTMENT.full_name}" />
    </div>
    <!-- END: image -->
    <p class="text-center m-bottom">
        <strong class="text-uppercase text-danger">{DEPARTMENT.full_name}</strong>
    </p>
    <!-- BEGIN: supporter -->
    <p class="text-center m-bottom">
        <strong>{SUPPORTER.full_name}</strong>
    </p>
    <ul class="contactList m-bottom">
        <!-- BEGIN: phone -->
        <li><em class="fa fa-phone"></em>&nbsp;<!-- BEGIN: item -->
            <!-- BEGIN: comma -->&nbsp; <!-- END: comma -->
            <!-- BEGIN: href -->
            <a href="tel:{PHONE.href}">
                <!-- END: href -->{PHONE.number}<!-- BEGIN: href2 -->
        </a>
        <!-- END: href2 -->
            <!-- END: item --></li>
        <!-- END: phone -->
        <!-- BEGIN: email -->
        <li><em class="fa fa-envelope"></em>&nbsp;<!-- BEGIN: item -->
            <!-- BEGIN: comma -->&nbsp; <!-- END: comma -->
            <a href="{DEPARTMENT.emailhref}">{EMAIL}</a>
        <!-- END: item --></li>
        <!-- END: email -->
        <!-- BEGIN: skype -->
        <li><em class="fa fa-skype"></em>&nbsp;<!-- BEGIN: item -->
            <!-- BEGIN: comma -->&nbsp; <!-- END: comma -->
            <a href="skype:{SKYPE.value}?call" title="{SKYPE.name}">{SKYPE.value}</a>
        <!-- END: item --></li>
        <!-- END: skype -->
        <!-- BEGIN: viber -->
        <li><em class="icon-viber"></em>&nbsp;<!-- BEGIN: item -->
            <!-- BEGIN: comma -->&nbsp; <!-- END: comma -->
            <a href="viber://pa?chatURI={VIBER.value}" title="{VIBER.name}">{VIBER.value}</a>
        <!-- END: item --></li>
        <!-- END: viber -->
        <!-- BEGIN: icq -->
        <li><em class="icon-icq"></em>&nbsp;<!-- BEGIN: item -->
            <!-- BEGIN: comma -->&nbsp; <!-- END: comma -->
            <a href="icq:message?uin={ICQ.value}" title="{ICQ.name}">{ICQ.value}</a>
        <!-- END: item --></li>
        <!-- END: icq -->
        <!-- BEGIN: whatsapp -->
        <li><em class="fa fa-whatsapp"></em>&nbsp;<!-- BEGIN: item -->
            <!-- BEGIN: comma -->&nbsp; <!-- END: comma -->
            <a href="https://wa.me/{WHATSAPP.value}" title="{WHATSAPP.name}">{WHATSAPP.value}</a>
        <!-- END: item --></li>
        <!-- END: whatsapp -->
        <!-- BEGIN: zalo -->
        <li><em class="icon-zalo"></em>&nbsp;<!-- BEGIN: item -->
            <!-- BEGIN: comma -->&nbsp; <!-- END: comma -->
            <a href="https://zalo.me/{ZALO.value}" title="{ZALO.name}">{ZALO.value}</a>
        <!-- END: item --></li>
        <!-- END: zalo -->
        <!-- BEGIN: other -->
        <li>{OTHER.name}:&nbsp; {OTHER.value}</li>
        <!-- END: other -->
    </ul>
    <!-- END: supporter -->
    <hr />
<!-- END: loop -->
<!-- END: main -->