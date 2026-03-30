<?use Bitrix\Main\Page\Asset; ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# ya: https://webmaster.yandex.ru/vocabularies/">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?/*
	Last-Modified для статей устанавливается в Base_v3::getResult() (\bitrix\modules\portal\lib\component\base_v3.php)
	<meta http-equiv="Last-Modified" content="Sun, 11 Sep 2001 17:31:28 GMT">
	*/?>

    <meta name="a7754c27ee7220da2d317d414d02f5d1" content="">    
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title itemprop="headline"><? $APPLICATION->ShowTitle() ?></title>
    <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/wsem-ru-logo-32x32.png" sizes="32x32" />
    <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/wsem-ru-logo-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/wsem-ru-logo-180x180.png" />

    <?CJSCore::Init("ls");?>
    <? $APPLICATION->ShowHead(); ?>
    <?/*
    <link rel='stylesheet' href='https:/fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800%7CPoppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%7CRoboto%3A100%2C300%2C400%2C500%2C700%2C900'>
    */ ?>
    <?


    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/plugins.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/bootstrap5.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/default.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/color.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style2.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/bootstrap-fileupload.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/me/intense-icons.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/me/pricing.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/me/button.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/me/blurb.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/me/person.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/me/section.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/kabinet.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/user-kabinet.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/editor-kabinet.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/fonts/ya-fonts/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/monetization.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/test-style.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/adaptation.css");	
    ?>


    <?
    if (
	!CSite::InDir('/editor/') && 
	!CSite::InDir('/user/') && 
	!CSite::InDir('/auth/') &&
	!CSite::InDir('/o-portale/') &&
	!CSite::InDir('/podderzhat-proyekt/') &&
	!CSite::InDir('/reklama/') &&
	!CSite::InDir('/publikatsiya-na-sayte/') &&
	!CSite::InDir('/merch/') &&
	!CSite::InDir('/pobeda/')
	) {
        $prouser = false;
        if(\PHelp::isUser()){
            $u =\Bitrix\Portal\helpers\Func::getUser();
            if (is_object($u) && $u->isProMark()) $prouser = true;
        }
        if (!$prouser) {
            $val = COption::GetOptionString("portal", "banner_option");
            $val = str_replace("<script", "<script data-skip-moving='true'", $val);
            echo $val;
        }
    }
    ?>

    <!-- Yandex Native Ads -->
    <script data-skip-moving="true">
        window.yaContextCb = window.yaContextCb || []
    </script>
    <script data-skip-moving="true" src="https://yandex.ru/ads/system/context.js" async></script>


    <? if (
        CSite::InDir('/publications/')
    ) : ?>

        <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/mycopytext.js"></script>
    <? endif; ?>

    <? if ($APPLICATION->GetCurDir() == "/publikatsiya-na-sayte/") : ?>
        <script type="text/javascript">
            ! function() {
                var t = document.createElement("script");
                t.type = "text/javascript", t.async = !0, t.src = 'https://vk.com/js/api/openapi.js?169', t.onload = function() {
                    VK.Retargeting.Init("VK-RTRG-1302205-dgGTk"), VK.Retargeting.Hit()
                }, document.head.appendChild(t)
            }();
        </script>
        <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1302205-dgGTk" style="position:fixed; left:-999px;" alt="" /></noscript>
    <? endif; ?>


    <meta property="og:type" content="website" />


    <? $APPLICATION->AddHeadString('<meta property="og:url" content="https://wsem.ru' . $APPLICATION->GetCurPage(false) . '"/>', true) ?>

    <?
    if (
	!CSite::InDir('/auth/') &&
    !CSite::InDir('/user/')
	):?>
<script data-skip-moving="true" src="https://yastatic.net/s3/passport-sdk/autofill/v1/sdk-suggest-with-polyfills-latest.js"></script>
<?endif;?>

  <link rel="canonical" href="<?= "https://" . $_SERVER['SERVER_NAME'] . $APPLICATION->GetCurPage(); ?>">

<script async src="https://af.click.ru/af.js?id=20860"></script>

</head>



<body>
    <?
    if (
	!CSite::InDir('/editor/') && 
	!CSite::InDir('/user/') && 
	!CSite::InDir('/auth/') &&
	!CSite::InDir('/o-portale/') &&
	!CSite::InDir('/podderzhat-proyekt/') &&
	!CSite::InDir('/reklama/') &&
	!CSite::InDir('/publikatsiya-na-sayte/') &&
	!CSite::InDir('/merch/') &&
	!CSite::InDir('/pobeda/')
	){
        $val = COption::GetOptionString("portal", "banner_body_code");
        $val = str_replace("<script", "<script data-skip-moving='true'", $val);
        echo $val;
    }
    ?>

    
<script data-skip-moving="true" async src="https://ad.mail.ru/static/ads-async.js"></script>
<ins class="mrg-tag" ></ins>
<script data-skip-moving="true">
(MRGtag = window.MRGtag || []).push({})
</script>

    <div id="panel"><? //$APPLICATION->ShowPanel();
                    ?></div>
    <!-- Preloading -->
    <?/*
    <div id="preloader">
        <div class="spinner">
            <div class="uil-ripple-css" style="transform:scale(0.29);">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    */ ?>
    <div class="bg-white d-none d-lg-block">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_SHOW" => "sect",
                "AREA_FILE_SUFFIX" => "blackheader",
                "AREA_FILE_RECURSIVE" => "Y",
                "EDIT_TEMPLATE" => ""
            )
        ); ?>

        <? if (session_id()  == '9oG90B3h0KplWeX36lEskmfjn0XEJi4j') : ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "header-2",
                    "AREA_FILE_RECURSIVE" => "Y",
                    "EDIT_TEMPLATE" => ""
                )
            ); ?>

        <? else : ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "header",
                    "AREA_FILE_RECURSIVE" => "Y",
                    "EDIT_TEMPLATE" => ""
                )
            ); ?>

        <? endif; ?>
    </div>


<?
/*---------------------------------------------------------------------
	ОТОБРАЖАЕТСЯ ТОЛЬКО НА МОБИЛЬНИКЕ!!!!
------------------------------------------------------------------------*/
?>
    <?if(!in_array(
    $APPLICATION->GetCurDir(),
    [
            "/editor/change2/",
        "/editor/change3/",
        "/editor/change4/",
        "/editor/change5/",
        "/editor/change6/",
        "/user/change/",
        "/user/change2/",
        "/user/change3/",
    ]
)):?>

    <div class="bg-white">
        <!--Mobile Navigation Toggler-->
        <div class="off-canvas-menu-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5 my-auto">

                        <a href="/" class="custom-logo-link" rel="home" aria-current="page"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/wsem-ru-logo-1000.png" class="custom-logo" alt="" /></a>

                    </div>
                    <div class="col-5" style="text-align: right;">
						<a href="/search/" style="margin-right: 25px;"><i class="fas fa-search"></i></a>
					
					
                        <? global $USER;
                        if ($USER->IsAuthorized()) : ?>
                            <? if (\PHelp::isUser()) : ?>
                                <?
                                $u = \Bitrix\Portal\helpers\Func::getUser();
                                if (is_object($u)) {
                                    $ava = $u->getAvatar();
                                    $uNAme = $u->printName();
                                }
                                ?>
                                <a style="color: #000;" href="/user/"><img class="rounded-circle" src="<?= $ava ?>" style="width: 40px; margin-right: 10px;" alt="<?= $uNAme ?>" title="<?= $uNAme ?>"></a>
                            <? endif; ?>
                            <? if (\PHelp::isEditor() || \PHelp::isSuperEditor()) : ?>
                                <?
                                $u = \Bitrix\Portal\helpers\Func::getUser();
                                if (is_object($u)) {
                                    $ava = $u->getAvatar();
                                    $uNAme = $u->printName();
                                }
                                ?>
                                <a style="color: #000;" href="/editor/"><img class="rounded-circle" src="<?= $ava ?>" style="width: 40px; margin-right: 10px;" alt="<?= $uNAme ?>" title="<?= $uNAme ?>"></a>

                            <? endif; ?>
                        <? else : ?>
                            <a href="/auth/">Вход</a>
                        <? endif; ?>
                    </div>
                    <div class="col-2">
                        <div class="mobile-nav-toggler"><span class="far fa-fw fa-bars"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu  -->
        <div class="off-canvas-menu">
            <div class="menu-backdrop"></div>
            <i class="close-btn fa fa-close"></i>
            <nav class="mobile-nav">
                <div class="text-center pt-3 pb-3">

                    <a href="/" class="custom-logo-link" rel="home" aria-current="page"><img width="512" height="173" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/loader.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/assets/images/wsem-ru-logo-1000.png" class="custom-logo" alt="wsem.ru" /></a>

                </div>
                <div class="header-social-mobile">
                    <!--span>Следите за Всем:</span-->
                    <br>
		<a target="_blank" class="telegram-mob" href="https://t.me/wsemru"></a>  
		<a target="_blank" class="vk-mob" href="https://vk.com/wsem_ru"></a>		
		<a target="_blank" class="odnoklassniki-mob" href="https://ok.ru/wsemrus"></a>
		<a target="_blank" class="dzen-mob" href="https://dzen.ru/wsemru"></a>
                </div>
                <ul class="navigation">
                    <!--Keep This Empty / Menu will come through Javascript-->
				
                </ul>
            </nav>
        </div>
        <a href="/pobeda/" class="pobeda-menu mobile_svo">Победить в СВО</a>
    </div>
<?endif;?>

    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/include/advertising-banner.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    ); ?>


    <? global $USER;
    if ($USER->IsAuthorized()) : ?>
        <?
            $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_SHOW" => "sect",
                "AREA_FILE_SUFFIX" => "bodystart",
                "AREA_FILE_RECURSIVE" => "Y",
                "EDIT_TEMPLATE" => ""
            )
        );
    ?>
    <? endif; ?>