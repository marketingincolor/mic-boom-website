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
    <!--<script src="generatecontent.js" type="text/javascript"></script>-->
    <script type="text/javascript">
        var callThisOnReturn = function(resp) {
            if(resp && resp.contact) {
                var contact = resp.contact;
                console.warn(contact);
                var name = contact['First Name'];
                var ss_id = contact['SharpSpring ID'];
                var ss_status = contact['Lead Status'];
                var ss_type = contact['What type of business best describes your business?'];
                var ss_team = contact['Do you have a sales team?'];
                var ss_crm = contact['Do you use a CRM?'];
                var ss_online = contact['Online Purchase?'];
                var ss_frequency = contact['How often do your customers purchase your product or service?'];
                var result_name = contact['bcd_name'];
                var result_b_sng = contact['bcd_business_single'];
                var result_b_pos = contact['bcd_business_name_possessive'];
                var result_site = contact['bcd_website'];
                var result_product = contact['bcd_product'];
                var result_accessory = contact['bcd_accessory'];
                var result_his = contact['bcd_pronoun_his'];
                var result_him = contact['bcd_pronoun_him'];
                var result_he = contact['bcd_pronoun_he'];


                var elem = document.getElementById('dynamicContentID');
                elem.innerHTML = 'Testing results for : ' + name ;

                var elem2 = document.getElementById('dynamicContentID2');
                elem2.innerHTML = 'Sales Team: ' + ss_team + '&nbsp;|&nbsp;' + 'CRM: ' + ss_crm + '&nbsp;|&nbsp;' + 'Frequency: ' + ss_frequency + '&nbsp;|&nbsp;' + 'Online Purchase: ' + ss_online + '&nbsp;|&nbsp;' + 'Type: ' + ss_type + '<br>';

                var elem3 = document.getElementById('dynamicContentID3');
                elem3.innerHTML = result_name + '&nbsp;' + result_b_sng + '&nbsp;' + result_b_pos + '&nbsp;' + result_site + '&nbsp;' + result_product + '&nbsp;' + result_accessory + '&nbsp;' + result_his + '&nbsp;' + result_him + '&nbsp;' + result_he + '<br>';

                var elem4 = document.getElementById('dynamicContentID4');
                var company_data = [
                    ['Tina', 'Tina\'s Tatoos', 'Tina\'s Tatoos\'', 'TinasTatoos.com', 'Tatoo', 'Piercing', 'her', 'her', 'she'],
                    ['George', 'Giraffe Emporium', 'Giraffe Emporium\'s', 'GiraffeEmporium.com', 'Giraffe', 'Giraffe Collar', 'his', 'him', 'he'],
                    ['Tom', 'Tenacious Toupees', 'Tenacious Toupees', 'TenaciousToupees.com', 'Toupee', 'Hat', 'his', 'his', 'he'],
                    ['Hank', 'Hanky-Panky Love Seats', 'Hanky-Panky Love Seats\'', 'HankyPankyLoveSeats.com', 'Love Seat', 'Footsy Stool', 'his', 'his', 'he'],
                    ['Tina', 'Tina\'s Tatoos', 'Tina\'s Tatoos\'', 'TinasTatoos.com', 'Tatoo', 'Piercing', 'her', 'her', 'she'],
                    ['Tina', 'Tina\'s Tatoos', 'Tina\'s Tatoos\'', 'TinasTatoos.com', 'Tatoo', 'Piercing', 'her', 'her', 'she'],
                    ['Tina', 'Tina\'s Tatoos', 'Tina\'s Tatoos\'', 'TinasTatoos.com', 'Tatoo', 'Piercing', 'her', 'her', 'she'],
                    ['Tina', 'Tina\'s Tatoos', 'Tina\'s Tatoos\'', 'TinasTatoos.com', 'Tatoo', 'Piercing', 'her', 'her', 'she']
                ];
                if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'No') && (ss_frequency == 'Frequently') ) {
                    result_name = company_data[0][0];
                    result_b_sng = company_data[0][1];
                    result_b_pos = company_data[0][2];
                    result_site = company_data[0][3];
                    result_product = company_data[0][4];
                    result_accessory = company_data[0][5];
                    result_his = company_data[0][6];
                    result_him = company_data[0][7];
                    result_he = company_data[0][8];
                }
                if((ss_type == 'B2C') && (ss_team != 'No') && (ss_crm == 'No') && (ss_online == 'No') && (ss_frequency != 'Frequently') )
                {
                    result_name = company_data[1][0];
                    result_b_sng = company_data[1][1];
                    result_b_pos = company_data[1][2];
                    result_site = company_data[1][3];
                    result_product = company_data[1][4];
                    result_accessory = company_data[1][5];
                    result_his = company_data[1][6];
                    result_him = company_data[1][7];
                    result_he = company_data[1][8];
                }
                elem4.innerHTML = '&nbsp;' + result_name + '&nbsp;|&nbsp;' + result_b_sng + '&nbsp;|&nbsp;' + result_b_pos + '&nbsp;|&nbsp;' + result_site + '&nbsp;|&nbsp;' + result_product + '<br>';

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
                /*if(ss_frequency == 'Frequently') {
                    document.getElementById('frequency_alpha').className += " on";
                    document.getElementById('frequency_beta').className += " off";
                } else {
                    document.getElementById('frequency_alpha').className += " off";
                    document.getElementById('frequency_beta').className += " on";
                }*/
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
	        <div class="small-6 medium-4 small-centered columns">
                <img src="./images/mic-bc-grfx-main-hdr.png" />
            </div>
        </div>
    </div>

    <div class="interact">
        <div class="row">
            <div class="content large-12 columns">
                <h5 id="dynamicContentID">Results</h5>
                <h6 id="dynamicContentID2">&nbsp;</h6>
                <div id="dynamicContentID3">&nbsp;</div>
                <div id="dynamicContentID4">&nbsp;</div>
            </div>
        </div>
    </div>

    <div class="results-main">
        <div class="row medium-collapse">
            <div class="small-12 small-centered columns">
                <div class="overlay bgnd-after"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay start off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>

                <div id="type_alpha" class="overlay type two alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="type_beta" class="overlay type two epsilon"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="team_alpha" class="overlay team three alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="team_beta" class="overlay team three beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="crm_alpha" class="overlay crm four alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="crm_beta" class="overlay crm four beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="online_alpha" class="overlay online five alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="online_beta" class="overlay online five beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="frequency_alpha" class="overlay frequency six alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="owner_alpha" class="overlay owner seven alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="owner_beta" class="overlay owner seven beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay foot">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></br>
                    <div class="foot-cta"><a href="http://marketingincolor.com" target="_blank"><img src="./images/mic-bc-grfx-main-btyb.png" /></a></div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
