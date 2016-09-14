<!DOCTYPE html>
<html lang="en"><?php //include 'create-queries.php'; ?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="regularly" property="step6:value">
    <title>Marketing Automation Game - Dynamic Content</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.css" />
    <?php include 'page-includes.php'; ?>
    <script type="text/javascript">
        var callThisOnReturn = function(resp) {
            if(resp && resp.contact) {
                var contact = resp.contact;
                //exposed values incude SharpSpring ID, First Name, Last Name, Email, Website, Lead Status
                console.warn(contact);
                var name = contact['First Name'];
                var ss_id = contact['SharpSpring ID'];
                var ss_status = contact['Lead Status'];
                var ss_type = contact['What type of business best describes your business?'];
                var ss_team = contact['Do you have a sales team?'];
                var ss_crm = contact['Do you use a CRM?'];
                var ss_online = contact['Online Purchase?'];
                var ss_frequency = contact['How often do your customers purchase your product or service?'];

                var elem = document.getElementById('dynamicContentID');
                elem.innerHTML = 'Testing results for : ' + name ;
                var elem2 = document.getElementById('dynamicContentID2');
                elem2.innerHTML = 'ID: ' + ss_id + '&nbsp;|&nbsp;' + 'Sales Team: ' + ss_team + '&nbsp;|&nbsp;' + 'CRM: ' + ss_crm + '&nbsp;|&nbsp;' + 'Frequency: ' + ss_frequency + '&nbsp;|&nbsp;' + 'Online Purchase: ' + ss_online + '&nbsp;|&nbsp;' + 'Type: ' + ss_type + '<br>';

                if(ss_type == 'B2B') {
                    document.getElementById('type_alpha').className += " on";
                    document.getElementById('type_beta').className += " off";
                } else {
                    document.getElementById('type_alpha').className += " off";
                    document.getElementById('type_beta').className += " on";
                }
                if(ss_team == 'Yes') {
                    document.getElementById('team_alpha').className += " on";
                    document.getElementById('team_beta').className += " off";
                } else {
                    document.getElementById('team_alpha').className += " off";
                    document.getElementById('team_beta').className += " on";
                }
                if(ss_crm == 'Yes') {
                    document.getElementById('crm_alpha').className += " on";
                    document.getElementById('crm_beta').className += " off";
                } else {
                    document.getElementById('crm_alpha').className += " off";
                    document.getElementById('crm_beta').className += " on";
                }
                if(ss_online == 'Yes') {
                    document.getElementById('online_alpha').className += " on";
                    document.getElementById('online_beta').className += " off";
                } else {
                    document.getElementById('online_alpha').className += " off";
                    document.getElementById('online_beta').className += " on";
                }
                if(ss_frequency == 'Frequently') {
                    document.getElementById('frequency_alpha').className += " on";
                    document.getElementById('frequency_beta').className += " off";
                } else {
                    document.getElementById('frequency_alpha').className += " off";
                    document.getElementById('frequency_beta').className += " on";
                }


            } else {
                window.location.href='http://dev.marketingincolor.com/micmatool/index.html';
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
                <div class="overlay bgnd-after"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay start off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>

                <div id="type_alpha" class="overlay type two alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="type_beta" class="overlay type two beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="team_alpha" class="overlay team three alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="team_beta" class="overlay team three beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="crm_alpha" class="overlay crm four alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="crm_beta" class="overlay crm four beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="online_alpha" class="overlay online five alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="online_beta" class="overlay online five beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="frequency_alpha" class="overlay frequency six alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="frequency_beta" class="overlay frequency six beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
            </div>
        </div>
    </div>

    <div class="interact">
        <div class="row">
            <div class="content large-12 columns">
                <h5 id="dynamicContentID">Results</h5>
                <h6 id="dynamicContentID2">&nbsp;</h6>

            </div>
        </div>
    </div>

</body>
</html>
