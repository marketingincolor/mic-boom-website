<!DOCTYPE html>
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

        var callThisOnReturn = function(resp) {
            if(resp && resp.contact) {
                var contact = resp.contact;
                console.warn(contact);
            }
        };

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
            <div class="small-10 medium-6 small-centered columns">
                <img src="./images/mic-bc-grfx-main-hdr.png" />
            </div>
        </div>
    </div>

    <div class="interact">
        <div class="row">
            <div class="content small-10 small-centered columns">
                <p class="query">Are your marketing initiatives targeted primarily to other businesses or to consumers?</p>
                <button id="step2-a">B2B</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button id="step2-b">B2C</button>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="row medium-collapse">
            <div class="small-12 small-centered columns">
                <div class="overlay bgnd"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay start beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay start alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay type two alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay type two beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
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
