<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Marketing Automation Game - Dynamic Content</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/vendor/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/vendor/jquery.cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/vendor/modernizr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation/foundation.js"></script>

    <script type="text/javascript">
        var callThisOnReturn = function(resp) {
            if(resp && resp.contact) {
                var contact = resp.contact;
                //exposed values incude SharpSpring ID, First Name, Last Name, Email, Website, Lead Status
                var name = contact['First Name'];
                var elem = document.getElementById('dynamicContentID');
                elem.innerHTML = 'Taking the 1st step, ' + name + '!';
            } else {
                window.location.href='http://marketingincolor.com/boomcity/';
            }
        };

        $(document).ready(function(){

            console.debug($.cookie("__ss_referrer"));

            $( '#step2-a' ).click(function() {
                window.location.href='./step2-a';
            });

            $( '#step2-b' ).click(function() {
                window.location.href='./step2-b';
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
<body>
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
                <div class="overlay start"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay two alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay two beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay three alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay three beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay four alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay four beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay five alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay five beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay six alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay six beta off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
            </div>
        </div>
    </div>







<div class="overlayzzz interact">
    <div class="row">
        <div class="content small-10 small-centered columns">
            <p class="query">Are your marketing initiatives targeted primarily to other businesses or to consumers?</p>
            <button id="step2-a">B2B</button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button id="step2-b">B2C</button>
        </div>
    </div>
</div>

</body>
</html>
