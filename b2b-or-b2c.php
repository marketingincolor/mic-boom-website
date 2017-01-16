<!DOCTYPE html>
<?php error_reporting(0); ?>
<html lang="en"><?php include 'create-queries.php'; ?>
<head>
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Marketing Automation Game - Dynamic Content</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.css" />
    <?php include 'page-includes.php'; ?>
    <script type="text/javascript">

        var path = document.URL;
        linkpath = path.substring(0,path.lastIndexOf("/"));
        $(document).ready(function(){
            $( '#step2-a' ).click(function() {
                window.location.href = linkpath + '/does-your-company-have-a-sales-team?type=b2b';
            });

            $( '#step2-b' ).click(function() {
                window.location.href = linkpath + '/do-you-have-a-sales-team?type=b2c';
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
    <div class="header" style="border: 2px solid blue;">
        <div class="row">
            <div class="small-10 medium-4 small-centered columns">
                <img src="./images/mic-bc-grfx-main-hdr.png" />
            </div>
        </div>
    </div>

    <div class="interact" style="border: 2px solid red;">
        <div class="row">
            <div class="content small-10 small-centered columns">
                <p class="query">Are your marketing initiatives targeted primarily to other businesses or to consumers?</p>
                <button id="step2-a">B2B</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button id="step2-b">B2C</button>
            </div>
        </div>
    </div>
    
    <div id="force-bottom">
        <div id="begin" style="border: 2px solid green;">
        <img src="./images/clear.png" style="position:relative; background-size: 100% 100%;"/></div>
        <div class="foot-cta" style="border:2px solid orange;"><a href="http://marketingincolor.com" target="_blank"><img src="./images/mic-bc-grfx-main-btyb.png" style="margin:0 auto; display:block;"/></a>
        </div>
    </div>
    <div class="bottom-color">TESTING HERE</div>
    </body>
</html>
