<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="B2B" property="step1:value">
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
                elem.innerHTML = 'Taking the 2nd step, ' + name + '!';
            } else {
                window.location.href='http://dev.marketingincolor.com/micmatool/index.html';
            }
        };

        $(document).ready(function(){
            $( '#step3-a' ).click(function() {
                window.location.href='./step3-a';
            });

            $( '#step3-b' ).click(function() {
                window.location.href='./step3-b';
            });
        });
    </script>

    <script type="text/javascript">
        var _ss = _ss || [];
        _ss.push(['_setDomain', 'https://koi-MPZ0EPRI.sharpspring.com/net']);
        _ss.push(['_setAccount', 'KOI-137R3CMWE']);
        _ss.push(['_setResponseCallback', callThisOnReturn]);
        _ss.push(['_trackPageView']);
        (function() {
            var ss = document.createElement('script');
            ss.type = 'text/javascript'; ss.async = true;

            ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-MPZ0EPRI.sharpspring.com/client/ss.js?ver=1.1.1';
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
                <div class="overlay start off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay two alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
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


<div class="row">
    <div class="content large-12 columns">
        <h2>Do you have a Sales Team?</h2>

        <button id="step3-a">Yes</button>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <button id="step3-b">No</button>
    </div>
</div>
</body>
</html>
