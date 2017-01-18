<!DOCTYPE html>
<?php error_reporting(0); 


?>
<html lang="en"><?php include 'create-queries.php'; ?>
<head>
	<meta http-equiv="Pragma" content="no-cache">
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="no" property="step4:value">
    <title>Marketing Automation Game - Dynamic Content</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.css" />
    <?php include 'page-includes.php'; ?>
    <script type="text/javascript">
        var path = document.URL;
        linkpath = path.substring(0,path.lastIndexOf("/"));
        $(document).ready(function(){
            $( '#step6-a' ).click(function() {
                window.location.href = linkpath + '/welcome-to-your-company<?php echo $type . $team . $crm . $online; ?>&frequency=frequent';
            });

            $( '#step6-b' ).click(function() {
                window.location.href = linkpath + '/learn-how-to-boom-your-biz<?php echo $type . $team . $crm . $online; ?>&frequency=infrequent';
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
    <div class="wrapper">
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
                    <p class="query">How often do your customers purchase your product or service?</p>
                    <button id="step6-a">Frequently</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button id="step6-b">Infrequently</button>
                </div>
            </div>
        </div>
        <div id="images">
            <div id="page-online-purchasing" class="layers-border row">
                <img src="./images/clear.png" id="clear"/></div>
        </div>

        <div class="foot">
            <div class="row collapse">
                <div class="content small-12 small-centered columns">
                    <div class="foot-cta"><a href="http://marketingincolor.com" target="_blank"><img src="./images/mic-bc-grfx-main-btyb.png" /></a></div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
