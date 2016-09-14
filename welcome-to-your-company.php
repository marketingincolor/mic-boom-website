<!DOCTYPE html>
<html lang="en"><?php include 'create-queries.php'; ?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="product" property="step5:value">
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
            <div class="small-8 medium-10 small-centered columns">
                <img src="./images/mic-bc-grfx-main-hdr.png" />
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
                <div class="overlay team three alpha <?php echo ($team_class == 'yes' ? '' : 'off'); ?>">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay team three beta <?php echo ($team_class == 'no' ? '' : 'off'); ?>">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay crm four alpha <?php echo ($crm_class == 'yes' ? '' : 'off'); ?>">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay crm four beta <?php echo ($crm_class == 'no' ? '' : 'off'); ?>">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay online five alpha <?php echo ($online_class == 'yes' ? '' : 'off'); ?>">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay online five beta <?php echo ($online_class == 'no' ? '' : 'off'); ?>">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay frequency six alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay frequency six beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
            </div>
        </div>
    </div>
    <div class="interact">
        <div class="row">
            <div class="content small-10 small-centered columns">
                <h3>Congratulations!</h3>
                <h4>Your Boom City business is now up and running.</h4>
                <h4>Check your email now to check it out!</h4>
                <p>You'll also learn how marketing automation gets your buisness booming - in Boom City and in real life!</p>
            </div>
        </div>
    </div>

</body>
</html>
