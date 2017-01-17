<!DOCTYPE html>
<?php error_reporting(0);

if ($_GET["type"] == "b2c" && $_GET["team"] == "no") {
    $boom_city_biz = "page-b2c-no-sales";
}
else {
    $boom_city_biz = "page-b2c-sales";
}

?>
<html lang="en"><?php include 'create-queries.php'; ?>
<head>
	<meta http-equiv="Pragma" content="no-cache">
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="service" property="step5:value">
    <title>Marketing Automation Game - Dynamic Content</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.css" />
    <?php include 'page-includes.php'; ?>

    <script type="text/javascript">
    var _ss = _ss || [];
    _ss.push(['_setDomain', 'https://koi-UUHGVW.marketingautomation.services/net']);
    _ss.push(['_setAccount', 'KOI-YU6QP0']);
    _ss.push(['_trackPageView']);
    (function() {
        var ss = document.createElement('script');
        ss.type = 'text/javascript'; ss.async = true;

        ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-UUHGVW.marketingautomation.services/client/ss.js?ver=1.1.1';
        var scr = document.getElementsByTagName('script')[0];
        scr.parentNode.insertBefore(ss, scr);
    })();
    </script>

</head>
<body class="boomcity">
    <div class="wrapper">
        <div class="header">
            <div class="row">
                <div class="small-10 medium-4 small-centered columns">
                    <img src="./images/mic-bc-grfx-main-hdr.png" />
                </div>
            </div>
        </div>

        <div class="interact">
        <img src="images/party-icon.png" alt="Party Hat Icon" class="party-hat">
            <div class="row">
                <div class="content small-10 medium-8 large-6 small-centered columns">
                <!-- <img src="images/party-icon.png" alt="Party Hat Icon" class="party-hat"> -->
                    <h3>Congratulations!</h3>
                    <h4 class="congrats-headline">Your Boom City business is almost ready to open its doors. Give the Boom City crew a few minutes to hang the sign on the storefront, then check your email to check it out!</h4>
                    <p class="learn-p">You’ll also learn how marketing automation gets your business booming – in Boom City and in real life!</p>
                </div>
            </div>
        </div>

        <div id="images">
            <div id="<?php echo $boom_city_biz ?>" class="layers-border">
                <img src="./images/clear.png" style="position:relative; background-size: 100% 100%;"/></div>
            <div class="footer"></div>
        </div>
    </div>
<?php include 'page-includes.php'; ?>
</body>
</html>
