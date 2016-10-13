<!DOCTYPE html>
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
        var callThisOnReturn = function(resp) {
            if(resp && resp.contact) {
                var contact = resp.contact;
                console.warn(contact);
            }
        };
    </script>

    <script type="text/javascript">
    var _ss = _ss || [];
    _ss.push(['_setDomain', 'https://koi-UUHGVW.marketingautomation.services/net']);
    _ss.push(['_setAccount', 'KOI-YU6QP0']);
    _ss.push(['_setResponseCallback', callThisOnReturn]);
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
    <div class="header">
        <div class="row">
            <div class="small-6 medium-4 small-centered columns">
                <img src="./images/mic-bc-grfx-main-hdr.png" />
            </div>
        </div>
    </div>

    <div class="interact">
        <div class="row">
            <div class="content small-12 small-centered columns">
                <h3>Congratulations!</h3>
                <h4>Your Boom City business is now up and running.</h4>
                <h4>Check your email now to check it out!</h4>
                <p>You'll also learn how marketing automation gets your buisness booming - in Boom City and in real life!</p>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="row medium-collapse">
            <div class="small-12 small-centered columns">
                <div class="overlay bgnd"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay start off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay type two alpha <?php echo ($type_class == 'b2b' ? '' : 'off'); ?>">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay type two beta <?php echo ($type_class == 'b2c' ? '' : 'off'); ?>">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay frequency six alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay frequency seven alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay foot">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></br>
                    <div class="foot-cta"><a href="http://marketingincolor.com" target="_blank"><img src="./images/mic-bc-grfx-main-btyb.png" /></a></div>
                </div>
            </div>
        </div>
    </div>

<?php include 'page-includes.php'; ?>
</body>
</html>
