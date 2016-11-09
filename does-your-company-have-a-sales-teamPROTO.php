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
            <div class="small-10 medium-4 small-centered columns">
                <img src="./images/mic-bc-grfx-main-hdr.png" />
            </div>
        </div>
    </div>

    <div class="interact">
        <div class="row">
            <div class="content small-10 small-centered columns">
            <p class="query">Do you have a Sales Team?</p>
            <button id="step3-a">Yes</button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button id="step3-b">No</button>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="row medium-collapse">
            <div class="small-12 small-centered columns">
                <div class="proto-div-two"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
            </div>
        </div>
    </div>

    <div class="foot">
        <div class="row collapse">
            <div class="content small-12 small-centered columns">
                <div class="foot-cta"><img src="./images/mic-bc-grfx-main-btyb.png" /></div>

            </div>
        </div>
    </div>

</body>
</html>
