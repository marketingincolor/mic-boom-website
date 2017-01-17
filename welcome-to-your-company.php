<!DOCTYPE html>
<?php error_reporting(0); 


if ( isset($_GET["type"]) && $_GET["type"] == "b2b") {
    $congratulations = "congratulations-b2b";
}
else {
    $congratulations = "congratulations-b2c";
}



?>
<html lang="en"><?php include 'create-queries.php'; ?>
<head>
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="product" property="step5:value">
    <title>Marketing Automation Game - Dynamic Content</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
            <img src="images/party-icon.png" class="party-hat alt="Party Hat Icon">
            <div class="row">
                <div class="content small-10 medium-8 large-6 small-centered columns">
                        <h3>Congratulations!</h3>
                        <h4 class="congrats-headline">Your Boom City business is almost ready to open its doors. Give the Boom City crew a few minutes to hang the sign on the storefront, then check your email to check it out!</h4>
                        <p class="welcome-p">You’ll also learn how marketing automation gets your business booming – in Boom City and in real life!</p>
                </div>
            </div>
        </div>

        <div id="force-bottom">
            <div id="<?php echo $congratulations ?>" class="layers-border">
                <img src="./images/clear.png" style="position:relative; background-size: 100% 100%;"/></div>
        </div>

<!--         <footer>
            <div class="foot-cta-home" style="background-color:#b2b4bb !important;"><a href="http://marketingincolor.com" target="_blank"><img src="./images/mic_logo.png" /></a></div>
        </footer> -->
    </div>

<?php include 'page-includes.php'; ?>
</body>
</html>
