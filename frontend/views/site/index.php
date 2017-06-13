<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
 <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-72484031-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script>
        function GoogleEvent(category, action) {
            if (!category || !action)
                return false;

            ga('send', 'event', category, action);
        }
    </script>
<header>
    <div class="pattern"></div>
    <div class="container">
                <div class="logo-container">
            <a class="logo" href="oz" title="EPLmanager Logo"><img src="images/logo2x.png"></a>
        </div>

        <h1 class="shadow-text">EPL Manager. Fantasy-futbol</h1>

        <!--<div class="h2-container">
            <h2 class="based-on shadow-text"></h2>
        </div>-->

        <h3 class="shadow-text">Angliya Premyer-ligasi. 2016/2017 yilgi mavsum</h3>

        <div class="buttons">
            <a class="play-now" href="oz/pick-team" style="margin-right:0" onclick="GoogleEvent('Register', 'play-now-click');return true;">
                <div><span class="hint">Saytda yangimisiz?</span>Ro‘yxatdan o‘tish!</div>
            </a>
        </div>
        <div class="markets" style="margin-top: 20px;">
                        <a class="appstore" href="https://itunes.apple.com/app/epl-manager/id1121957137"><img src="images/appstore2x.png"></a>
            <a class="playmarket" href="https://play.google.com/store/apps/details?id=com.eplmanager.fantasy&amp;referrer=utm_source%3Dbutton_top%26utm_medium%3Dlanding%26utm_campaign%3Dlanding" target="_top"><img src="images/playmarket2x.png"></a>
        </div>
    </div>
    <a class="scroll-down" href="javascript:;" onclick="$(window).scrollTo('#adv-landing', 350);"></a>
    <div id="agl"></div>
    <div id="agr"></div>
</header>
<section id="adv-landing" style="height:auto;background-color:#0b2734">
    <div class="text-center"><ins><a href="https://bh.eplmanager.com/www/delivery/ck.php?oaparams=2__bannerid=86__zoneid=4__cb=08c87d40a7__oadest=https%3A%2F%2Feplmanager.com%2Fpick-team" target="_blank"><img src="images/46e9d766e8e99a84fad7f35e6b3ccca0.jpg" alt="" title="" width="960" height="161" border="0"></a><div id="beacon_08c87d40a7" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="images/lg.gif" alt="" style="width: 0px; height: 0px;" width="0" height="0"></div></ins></div></section>



<section id="how-to-play">


    <div class="inner">
        <p class="header">Qanday o'ynaladi</p>

        <article class="block">
            <div class="img-block">
                <img src="images/sprite-pick-team.png" class="normal">
                <img src="images/sprite-pick-team2x.png" class="retina">
            </div>
            <p class="title">Mening jamoam</p>

            <p>£100 byudjetni ishlatib Angliya premyer-ligasi 
klublaridan 15 nafar futbolchidan iborat jamoa tuzing. Har bir turdan 
oldin asosiy tarkib futbolchilarini va sardorni tanlang. Kerakmas 
o'yinchilarni sotib, o'rniga boshqa futbolchilarni oling. Batafsil 
ma'lumot - <a href="oz/game-rules">o'yin qoidalarida</a>.</p>
        </article>
        <div class="separator">
            <div class="triangle"></div>
        </div>
        <article class="block">
            <div class="img-block">
                <img src="images/sprite-score-points.png" class="normal">
                <img src="images/sprite-score-points2x.png" class="retina">
            </div>
            <p class="title">Ochko ishlab oling</p>

            <p>Jamoaingizdagi futbolchilar haqiqiy Angliya 
Premyer-ligasida amalga oshirgan foydali harakatlari (gollar, golli 
paslar, quruq o'yinlar va boshqalar) uchun ochko keltiradi</p>
        </article>
        <div class="separator">
            <div class="triangle"></div>
        </div>
        <article class="block">
            <div class="img-block">
                <img src="images/win-prizes.png" class="normal">
                <img src="images/win-prizes2x.png" class="retina">
            </div>
            <p class="title">Sovg'alar yutib oling</p>

            <p>Sovrinli ligalarda ishtirok eting va qimmatbaho 
sovg'alarni yutib oling! Shaxsiy ligalar tuzing va do'stlar yoki 
ishxonadagilar bilan bellashing!</p>
        </article>
    </div>
</section>

<section id="always-on-device">
    <div class="inner">
        <p class="header">Yoqtirgan qurilmada doimo yoningizda</p>

        <div class="inner-block">
            <div class="info">
                <p>Siz saytdan istalgan qurilma - noutbuk, planshet <br> yoki mobil telefon orqali foydalanishingiz mumkin.</p>
                <a href="oz/pick-team" class="play-now" onclick="GoogleEvent('Register', 'play-now-click');return true;">Ro‘yxatdan o‘tish</a>

                <div class="separator">yoki</div>

                <div class="markets">
                    <a class="appstore" href="https://itunes.apple.com/app/epl-manager/id1121957137"><img src="images/appstore2x.png"></a>
                    <a class="playmarket" href="https://play.google.com/store/apps/details?id=com.eplmanager.fantasy&amp;referrer=utm_source%3Dbutton_bottom%26utm_medium%3Dlanding%26utm_campaign%3Dlanding" target="_top"><img src="images/playmarket2x.png"></a>
                </div>
            </div>
            <!--<div class="img-block"></div>-->
        </div>
    </div>
</section>
<footer>
    <div class="inner">
        <div class="content">
                        <ul class="social-links"><li><a href="https://www.facebook.com/eplmanageruzbekistan" target="_blank"><img src="images/social-facebook.png"></a></li>
<li><a href="https://twitter.com/EPLManagerCom" target="_blank"><img src="images/social-twitter.png"></a></li>
<li><a href="oz/contact-us"><img src="images/social-mail.png"></a></li></ul>            <div class="copyrights-container">
                <div class="copyrights">©
                    2015-2017 EPLMANAGER.COM<span>&nbsp;</span>Barcha huquqlar himoyalangan |
                    <a href="oz/sitemap" style="color:#5e5e5e">Sayt xaritasi</a>
                </div>
            </div>
            <ul class="menu"><li><a href="oz/contact-us">Qayta aloqa</a></li>
<li><a href="oz/terms-of-use">Foydalanuvchi shartnomasi</a></li>
<li><a href="oz/privacy-policy">Mahfiylik siyosati</a></li></ul>        </div>

        <div class="disclamer">EPLMANAGER.COM sayti va undagi kontent, 
mobil ilova, Football Association Premier League Limited bilan 
affillashtirilmagan va ushbu tashkilotga to'g'ridan-to'g'ri aloqasi 
yo'q.</div>


    </div>
</footer><script src="landing-bd0249e05a19c62ef871c5c87fc6130e.js"></script>
<script src="select2.js"></script>
<script src="yii.js"></script>
<script src="yii_002.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
    function formatCountry(state) {
        if (!state.id) { return state.text; }
        var state = $(
            '<span>' + state.text + '</span>'
            //'<span><span class="flag flag-' + state.element.value.toLowerCase() + '"></span> ' + state.text + '</span>'
        );
        return state;
    };

    function formatSelection(state) {
        if (!state.id) { return state.text; }
        var code = state.text.match(/\+(\d+)/);
        var state = $(
            '<span class="flag flags-normal-' + state.element.value.toLowerCase() + '"></span>'
        );
        $('.number-prefix').html(code[0]);

        $('#registerform-phone').focus();

        return state;
    };

    $('#loginform-country').select2({
        templateResult: formatCountry,
        templateSelection: formatSelection,
        minimumResultsForSearch: 10,
        width: 'resolve',
        matcher: function (params, data) {
            // If there are no search terms, return all of the data
            if ($.trim(params.term) === '') {
                return data;
            }

            // `params.term` should be the term that is used for searching
            // `data.text` is the text that is displayed for the data object
            if (data.text.toLowerCase().startsWith(params.term.toLowerCase())) {
                var modifiedData = $.extend({}, data, true);

                // You can return modified objects from here
                // This includes matching the `children` how you want in nested data sets
                return modifiedData;
            }

            // Return `null` if the term should not be displayed
            return null;
        }
    });

    $.ui.dialog.prototype._allowInteraction = function(e) {
        return !!$(e.target).closest('.ui-dialog, .ui-datepicker, .select2-drop, .select2-dropdown').length;
    };
    $("#signin-dialog").dialog(
        {
            bgiframe: true,
            autoOpen: false,
            modal: true,
            resizable: false,
            width: 360,
            title: 'Kirish'
        }
    );
    
    $(window).on( 'scroll', function(e){
        if( $(window).scrollTop() > $('div.top-bar').height()-5 ) {
            $('div.top-bar').addClass('highlight');
        } else {
            $('div.top-bar').removeClass('highlight');
        }
    });
    
    $(window).scroll();

    /*$(document).on('click', '.ui-widget-overlay', function() {
        $("#signin-dialog").dialog("close");
    });*/

    Cookies.set('tz', jstz.determine().name());

    var hash = window.location.hash.substring(1);
        if( hash && hash == 'signin' ) {
            $('#signin-dialog').dialog('open');
        }
    
    $('div.language-switcher a.current').click(function(){
        $('div.language-switcher-ul').show();
    });

    $('div.language-switcher a.current').hover(function(){
        $('div.language-switcher-ul').show();
    });

    $('div.language-switcher-ul').mouseleave(function(){
        $(this).hide();
    });

    $('header,section').on('touchend', function(e){ 
        $('div.language-switcher-ul').hide();        
    });
        $('#loginform-username').keyup(function(){
            $(this).val( $(this).val().replace(/[^0-9.]/g, "") );
        });

        $('#login-form').on('afterValidate', function (event, messages, errorAttributes) {
            if( messages['loginform-usernotexist'] && messages['loginform-usernotexist'].length && confirm("Sizda jamoa yo'qqa o'xshaydi. Uni hozir tuzishni istaysizmi?") ) {
                window.location = "/oz/pick-team";
            }
        });
jQuery('#login-form').yiiActiveForm([{"id":"loginform-country","name":"country","container":".field-loginform-country","input":"#loginform-country","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Maydon bo'sh bo'lishi mumkin emas"});}},{"id":"loginform-username","name":"username","container":".field-loginform-username","input":"#loginform-username","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Maydon bo'sh bo'lishi mumkin emas"});value = yii.validation.trim($form, attribute, []);yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Mobil telefon raqami must be an integer.","skipOnEmpty":1});yii.validation.string(value, messages, {"message":"Mobil telefon raqami must be a string.","min":7,"tooShort":"Raqam uzunligi to'g'ri kelmayapti","skipOnEmpty":1});}},{"id":"loginform-password","name":"password","container":".field-loginform-password","input":"#loginform-password","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Maydon bo'sh bo'lishi mumkin emas"});}}], []);
});</script>

<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-draggable" style="display: none;" tabindex="-1" role="dialog" aria-describedby="signin-dialog" aria-labelledby="ui-id-1"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">Kirish</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="signin-dialog" class="ui-dialog-content ui-widget-content">
    <div class="dialog-content">
        <form id="login-form" action="/oz/authorize" method="post">
<input name="_csrf" value="SWxPTXF5OWcQKngUKRVAFz08GRobGEwPBBwVLEUyYCIvOBwiIUt9EA==" type="hidden">        <div class="number-input">
            <div class="form-group field-loginform-country required">

<select id="loginform-country" class="form-control select2-hidden-accessible" name="LoginForm[country]" aria-required="true" tabindex="-1" aria-hidden="true">
<option value="2">Afghanistan  (+93)</option>

<option value="247">Zimbabwe  (+263)</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 220px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-loginform-country-container"><span class="select2-selection__rendered" id="select2-loginform-country-container" title="Uzbekistan  (+998)"><span class="flag flags-normal-235"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

<div class="help-block"></div>
</div>            <div class="form-group field-loginform-username required">
<input id="loginform-username" class="form-control" name="LoginForm[username]" aria-required="true" type="text">
<div class="help-block"></div>
</div>            <span class="number-prefix">+998</span>
        </div>
        <div class="form-group field-loginform-password required">

<input id="loginform-password" class="form-control" name="LoginForm[password]" placeholder="Parol" aria-required="true" type="password">

<div class="help-block"></div>
</div>        <div class="forgot-password">
            <a href="oz/forgot-password">Parolni unutdingizmi?</a>        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="login-button">Kirish</button>        </div>
        </form>    </div>
</div></div>
</div>
