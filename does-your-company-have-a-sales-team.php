<!DOCTYPE html>
<html lang="en"><?php include 'create-queries.php'; ?>
<head>
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="B2C" property="step1:value">
    <title>Marketing Automation Game - Dynamic Content</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.css" />
    <?php include 'page-includes.php'; ?>
    <script type="text/javascript">
        var path = document.URL;
        linkpath = path.substring(0,path.lastIndexOf("/"));
        $(document).ready(function(){
            $( '#step3-a' ).click(function() {
                window.location.href = linkpath + '/do-you-have-crm<?php echo $type; ?>&team=yes';
            });

            $( '#step3-b' ).click(function() {
                window.location.href = linkpath + '/do-you-use-a-crm<?php echo $type; ?>&team=no';
            });
        });
    </script>

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
    <div class="header">
        <div class="row">
	        <div class="small-10 medium-4 small-centered columns">
                <img src="./images/mic-bc-grfx-main-hdr.png" />
            </div>
        </div>
    </div>

    <div class="interact">
        <div class="row">
            <div class="content small-10 small-centered columns">
                <p class="query">Does your company have a sales team?</p>
                <button id="step3-a">Yes</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button id="step3-b">No</button>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="row medium-collapse">
            <div class="small-12 small-centered columns">
                <div class="overlay bgnd"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay start alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay type two alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay type two beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay type two gamma"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay type two delta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay team three alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay team three beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay crm four alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay crm four beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay online five alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay online five beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay frequency six alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay frequency six beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay foot">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></br>
                    <div class="foot-cta"><a href="http://marketingincolor.com" target="_blank"><img src="./images/mic-bc-grfx-main-btyb.png" /></a></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
