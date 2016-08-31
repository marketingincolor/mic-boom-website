<!DOCTYPE html>
<html lang="en"><?php include 'create-queries.php'; ?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="regularly" property="step6:value">
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
                //console.warn(contact);
                var name = contact['First Name'];
                var elem = document.getElementById('dynamicContentID');
                elem.innerHTML = 'Your Results, ' + name + '!';
                var elem2 = document.getElementById('dynamicContentID2');
                elem2.innerHTML = 'ID: ' + contact['SharpSpring ID'] + '<br>' + 'Lead Status: ' + contact['Lead Status'] + '<br>' + 'Format: ' + contact['B2B or B2C'] + '<br>' + 'CRM: ' + contact['CRM?'] + '<br>' + 'Frequency: ' + contact['Frequency of Purchase'] + '<br>' + 'Type: ' + contact['Product or Service?'] + '<br>' + 'Sales Team: ' + contact['Sales Team?'] + '<br>' + 'Webstore: ' + contact['Webstore?'];
            } else {
                window.location.href='http://dev.marketingincolor.com/micmatool/index.html';
            }
        };
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
<div class="row">
    <div class="large-12 columns">
        <h1 style="text-align:center;">Marketing Automation Demo</h1>
        <div class="overlay start">

        </div>
    </div>
</div>
<div class="row">
    <div class="content large-12 columns">
        <h1 id="dynamicContentID">Results</h1>
        <h6 id="dynamicContentID2">&nbsp;</h6>

    </div>
</div>
</body>
</html>
