/**
 * Content Generation Arrays for Marketing Automation Game
 * Contains ALL reqiured SharpSpring codes and functions (resp)
 * by EJT @ MIC
 *
**/

var callThisOnReturn = function(resp) {
    if(resp && resp.contact) {
        var contact = resp.contact;
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
        elem2.innerHTML = 'Sales Team: ' + ss_team + '&nbsp;|&nbsp;' + 'CRM: ' + ss_crm + '&nbsp;|&nbsp;' + 'Frequency: ' + ss_frequency + '&nbsp;|&nbsp;' + 'Online Purchase: ' + ss_online + '&nbsp;|&nbsp;' + 'Type: ' + ss_type + '<br>';

        var elem3 = document.getElementById('dynamicContentID3');
        if(ss_team == 'Yes') { cloud_one = 'Sales Team' }
        elem3.innerHTML = '&nbsp;' + cloud_one + '<br>';

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
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'No') && (ss_frequency == 'Infrequently') ) {
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
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'No') && (ss_frequency == 'Inrequently') )
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
