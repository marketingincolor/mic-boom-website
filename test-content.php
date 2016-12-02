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
            <!--<div class="content small-12 columns">
                <h5 id="dynamicContentIDX">Results</h5>
            </div>-->
            <div class="content small-4 columns"><a href="#" data-reveal-id="ea-modal">Email Automation</a></div>
            <div class="content small-4 columns">&nbsp;</div>
            <div class="content small-4 columns"><a href="#" data-reveal-id="crm-modal">CRM</a></div>

            <div class="content small-4 columns">&nbsp;</div>
            <div class="content small-4 columns"><a href="#" data-reveal-id="dwc-modal">Dynamic Web Content</a></div>
            <div class="content small-4 columns">&nbsp;</div>

            <div class="content small-4 columns"><a href="#" data-reveal-id="de-modal">Dynamic Email</a></div>
            <div class="content small-4 columns">&nbsp;</div>
            <div class="content small-4 columns"><a href="#" data-reveal-id="ct-modal">Call Tracking</a></div>
        </div>
    </div>

    <div class="results-main">
        <div class="row medium-collapse">
            <div class="small-12 small-centered columns">
                <div class="overlay bgnd-after"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay start off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>

                <div id="type_alpha" class="overlay type two alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="type_beta" class="overlay type two epsilon"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="company_name" class="overlay busname">
                    <img src="./images/mic-bc-grfx-main-clear-name.png" />
                    <div id="dynamicContentID0">&nbsp;</div>
                </div>
                <div id="team_alpha" class="overlay team three alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="team_beta" class="overlay team three beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="crm_alpha" class="overlay crm four alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="crm_beta" class="overlay crm four beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="online_alpha" class="overlay online five alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="online_beta" class="overlay online five beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="frequency_alpha" class="overlay frequency six alpha off"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="owner_alpha" class="overlay owner eight alpha"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div id="owner_beta" class="overlay owner eight beta"><img src="./images/mic-bc-grfx-main-clear.png" /></div>
                <div class="overlay foot">
                    <img src="./images/mic-bc-grfx-main-clear.png" /></br>
                    <div class="foot-cta"><a href="http://marketingincolor.com" target="_blank"><img src="./images/mic-bc-grfx-main-btyb.png" /></a></div>
                </div>
            </div>
        </div>
    </div>

    <div id="ea-modal" xid="dynamicContentID1" class="reveal-modal" data-reveal aria-hidden="true" role="dialog">
        <h2 id="modalTitle">Email Automation</h2>
        <div id="dynamicContentID1">&nbsp;</div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
    <div id="crm-modal" xid="dynamicContentID2" class="reveal-modal" data-reveal aria-hidden="true" role="dialog">
        <h2 id="modalTitle">CRM</h2>
        <div id="dynamicContentID2">&nbsp;</div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
    <div id="dwc-modal" xid="dynamicContentID3" class="reveal-modal" data-reveal aria-hidden="true" role="dialog">
        <h2 id="modalTitle">Dynamic Web Content</h2>
        <div id="dynamicContentID3">&nbsp;</div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
    <div id="de-modal" xid="dynamicContentID4" class="reveal-modal" data-reveal aria-hidden="true" role="dialog">
        <h2 id="modalTitle">Dynamic Email</h2>
        <div id="dynamicContentID4">&nbsp;</div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
    <div id="ct-modal" xid="dynamicContentID5" class="reveal-modal" data-reveal aria-hidden="true" role="dialog">
        <h2 id="modalTitle">Call Tracking</h2>
        <div id="dynamicContentID5">&nbsp;</div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

<?php include 'page-includes.php'; ?>
<script type="text/javascript">
    function titleCase(string) { return string.charAt(0).toUpperCase() + string.slice(1); } 
    function getParameterByName(name, url) {
        if (!url) {
          url = window.location.href;
        }
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

        var ss_type      = getParameterByName('ss_type'); //B2B or B2C
        var ss_team      = getParameterByName('ss_team'); //Yes or No
        var ss_crm       = getParameterByName('ss_crm'); //Yes or No
        var ss_online    = getParameterByName('ss_online'); //Yes or No;
        var ss_frequency = getParameterByName('ss_frequency'); //Frequently or Infrequently;

        console.log('Type: ' + ss_type + '\nTeam: ' + ss_team);

        var result_name = 'Tina' ;
        var result_b_sng = 'Tina\'s Tattoos';
        var result_b_pos = 'Tina\'s Tattoos\'';
        var result_site = 'TinasTatoos.com';
        var result_product = 'Tattoo';
        var result_accessory = 'Piercing';
        var result_his = 'her';
        var result_him = 'her';
        var result_he = 'she';
        var email_automation_blurb = 'email_automation_blurb';
        var crm_blurb = 'crm_blurb';
        var dynamic_web_content_blurb = 'dynamic_web_content_blurb';
        var dynamic_email_blurb = 'dynamic_email_blurb';
        var call_tracking_blurb = 'call_tracking_blurb';

          //---------------------------------------------------------------//
        //Email Automation Blurbs
        if( (ss_frequency == 'Frequently') && (ss_team == 'Yes') ) {
            email_automation_blurb = '<p>With email automation, ' + result_name + ' at ' + result_b_sng + ' can help ' + result_his + ' sales team communicate with their growing database of customers when they are most likely to make a purchase.</p><br/><p>For example, according to ' + result_b_pos + ' data, their customers buy a ' + result_product + ' about once a month. So automated emails are sent out to customers three weeks after each purchase, reminding them to buy again soon. This automation makes it very easy for each salesperson to provide a purchase reminder at the right time.</p>';
        }
        if( (ss_frequency == 'Frequently') && (ss_team == 'No') ) {
            email_automation_blurb = '<p>With email automation, ' + result_name + ' at ' + result_b_sng + ' can communicate with ' + result_his + ' growing database of customers when they are most likely to make a purchase.</p><br/><p>For example, according to ' + result_b_pos + ' data, ' + result_name + '\'s customers buy a ' + result_product + ' about once a month. So automated emails are sent out to customers three weeks after each purchase, reminding them to buy again soon. This automation makes it very easy for ' + result_name + ' to provide a purchase reminder at the right time.</p>';
        }
        if( (ss_frequency == 'Infrequently') && (ss_team == 'Yes') ) {
            email_automation_blurb = '<p>With email automation, ' + result_name + ' at ' + result_b_sng + ' can help ' + result_his + ' sales team communicate with their growing database of customers with messaging that will best produce a purchase.</p><br/><p>For example, according to ' + result_b_pos + ' data, ' + result_name + '\'s customers buy a ' + result_product + ' about once a year. Since this is an infrequent purchase, the database is divided into two lists - those who have made a purchase and those who have not. Emails are automated to deliver messaging based on their purchase history - those who have purchased are sent emails pushing a ' + result_accessory + ', while those who have not purchased continue to receive messaging pushing a ' + result_product + '. Each salesperson can effortlessly provide the right messaging to each customer - even if they\'re communicating with thousands of customers. </p>';
        }
        if( (ss_frequency == 'Infrequently') && (ss_team == 'No') ) {
            email_automation_blurb = '<p>With email automation, ' + result_name + ' at ' + result_b_sng + ' can communicate with ' + result_his + ' growing database of customers with messaging that will best produce a purchase.</p><br/><p>For example, according to ' + result_b_pos + ' data, '+ result_name + '\'s customers buy a ' + result_product + ' about once a year. Since this is an infrequent purchase, the database is divided into two lists - those who have made a purchase and those who have not. Emails are automated to deliver messaging based on their purchase history - those who have purchased are sent emails pushing a ' + result_accessory + ' while those who have not purchased continue to receive messaging pushing a ' + result_product + '. ' + result_name + ' can effortlessly provide the right messaging to each customer - even if ' + result_he + ' is communicating with thousands of customers.</p>';
        }

        //---------------------------------------------------------------//
        //CRM Blurbs
        if( (ss_team == 'Yes') && (ss_crm == 'Yes') ) {
            crm_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' has a robust Customer Relationship Management system in place. The information in this system is seamlessly integrated into a whole suite of marketing automation services, enabling ' + result_name + ' to deliver highly customized and relevant campaigns to customers. The system also helps ' + result_his + ' sales teams to focus their efforts on the hottest prospects. From tracking engagement to assessing fit, the system does all the work for them, ensuring highly effective targeting and better results – effortlessly.</p>';
        }
        if( (ss_team == 'No') && (ss_crm == 'Yes') ) {
            crm_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' has a robust Customer Relationship Management system in place. The information in this system is seamlessly integrated into a whole suite of marketing automation services, enabling ' + result_name + ' to deliver highly customized and relevant campaigns to customers. With this system, ' + result_name + ' can assign scores to customers and identify the hottest prospects. From tracking engagement to assessing fit, the system does all the work and enables ' + result_him + ' to achieve highly effective targeting and better results – effortlessly.</p>';
        }
        if( (ss_team == 'Yes') && (ss_crm == 'No') ) {
            crm_blurb = '<p>With marketing automation, ' + result_name + ' at ' + result_b_sng + ' is able to use a powerful Customer Relationship Management system that offers an unprecedented view of ' + result_his + ' sales pipeline. ' + result_name + ' tracks opportunities from beginning to end and tailors the entire sales process to best manage ' + result_his + ' specific needs. The system also helps ' + result_his + ' sales teams to focus their efforts on the hottest prospects. From tracking engagement to assessing fit, the system does all the work for them, ensuring highly effective targeting and better results – effortlessly.</p>';
        }
        if( (ss_team == 'No') && (ss_crm == 'No') ) {
            crm_blurb = '<p>With marketing automation, ' + result_name + ' at ' + result_b_sng + ' is able to use a powerful Customer Relationship Management system that offers an unprecedented view of ' + result_his + ' sales pipeline. ' + result_name + ' tracks opportunities from beginning to end and tailors the entire sales process to best manage ' + result_his + ' specific needs. The system also enables ' + result_him + ' to assign scores to customers and identify the hottest prospects. From tracking engagement to assessing fit, the system does all the work and enables ' + result_him + ' to achieve highly effective targeting and better results – effortlessly.</p>';
        }

        //---------------------------------------------------------------//
        //Dynamic Web Content Blurbs
        if( (ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that’s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when prospects who haven’t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><br/><p>Relevant messaging is also delivered for e-commerce. For example, prospects who haven’t bought a ' + result_product + ' (' + result_b_pos +  ' main product) would see the sales pitch for that. Those who have already bought the ' + result_product + ', would see the sales pitch for a ' + result_accessory + '.</p><p>They would also see the contact information for their specific salesperson, further personalizing the sales process.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when prospects who haven’t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><br/><p>They would also see the name and local phone number for their specific salesperson and ' + result_b_pos + ' local address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven\'t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><br/><p>Relevant messaging is also delivered for e-commerce. For example, customers who haven\'t bought a ' +  result_product + ' (' + result_b_pos + ' main product) would see the sales pitch for that. Those who have already bought the ' +  result_product + ', would see the sales pitch for a ' + result_accessory + '.</p><br/><p>They would also see the contact information for their specific salesperson, further personalizing the sales process.</p>'
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that’s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by each prospect being automatically added into the Customer Relationship Management (CRM) system. ' + result_name + ' at ' + result_b_sng + ' can then track those prospects and deliver highly customized and relevant communications – all effortlessly by marketing automation. For example, when prospects who haven\'t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><br/><p>Relevant messaging is also delivered for e-commerce. For example, prospects who haven\'t bought a ' +  result_product + ' (' + result_b_pos + ' main product) would see the sales pitch for that. Those who have already bought the ' +  result_product + ', would see the sales pitch for a ' + result_accessory + '.</p><br/><p>They would also see the contact information for their specific salesperson, further personalizing the sales process.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when prospects who haven\'t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><br/><p>Relevant messaging is also delivered for e-commerce. For example, prospects who haven\'t bought a ' + result_product + ' (' + result_b_pos + ' main product), would see the sales pitch for that. Those who have already bought the ' + result_product + ', would see the sales pitch for a ' + result_accessory + '.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven\'t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><br/><p>They would also see the name and local phone number for their specific salesperson and ' + result_b_pos + ' local address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by each prospect being automatically added into the Customer Relationship Management (CRM) system. ' + result_name + ' at ' + result_b_sng + ' can then track those prospects and deliver highly customized and relevant communications – all effortlessly through marketing automation. For example, when prospects who haven\'t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><br/><p>They would also see the name and local phone number for their specific salesperson and ' + result_b_pos + ' local address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that’s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when prospects who haven\'t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><br/><p>They would also see ' + result_b_pos + ' local phone and address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven\'t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><br/><p>Relevant messaging is also delivered for e-commerce. For example, customers who haven\'t bought a ' + result_product + ' (' + result_b_pos + ' main product) would see the sales pitch for that. Those who have already bought the ' + result_product + ', would see the sales pitch for a ' + result_accessory + '.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by each prospect being automatically added into the Customer Relationship Management (CRM) system. ' + result_name + ' at ' + result_b_sng + ' can then track those prospects and deliver highly customized and relevant communications – all effortlessly through marketing automation. For example, when prospects who haven\'t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><br/><p>Relevant messaging is also delivered for e-commerce. For example, prospects who haven\'t bought a ' + result_product + ' (' + result_b_pos + ' main product), would see the sales pitch for that. Those who have already bought the ' + result_product + ', would see the sales pitch for a ' + result_accessory + '.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by each customer being automatically added into the Customer Relationship Management (CRM) system. ' + result_name + ' at ' + result_b_sng + ' can then track those customers and deliver highly customized and relevant communications – all effortlessly through marketing automation. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven\'t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><br/><p>Relevant messaging is also delivered for e-commerce. For example, customers who haven\'t bought a ' + result_product + ' (' + result_b_pos + ' main product) would see the sales pitch for that. Those who have already bought the ' + result_product + ', would see the sales pitch for a ' + result_accessory + '.</p><br/><p>They would also see the contact information for their specific salesperson, further personalizing the sales process.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by each customer being automatically added into the Customer Relationship Management (CRM) system. ' + result_name + ' at ' + result_b_sng + ' can then track those customers and deliver highly customized and relevant communications – all effortlessly through marketing automation. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven\'t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><br/><p>Relevant messaging is also delivered for e-commerce. For example, customers who haven\'t bought a ' + result_product + ' (' + result_b_pos + ' main product) would see the sales pitch for that. Those who have already bought the ' + result_product + ', would see the sales pitch for a ' + result_accessory + '.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that’s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by each prospect being automatically added into the Customer Relationship Management (CRM) system.' + result_name + ' at ' + result_b_sng + ' can then track those prospects and deliver highly customized and relevant communications – all effortlessly through marketing automation. For example, when prospects who haven\'t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><br/><p>They would also see ' + result_b_pos + ' local phone and address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven\'t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><br/><p>They would also see ' + result_b_pos + ' local phone and address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by each customer being automatically added into the Customer Relationship Management (CRM) system.' + result_name + ' at ' + result_b_sng + ' can then track those customers and deliver highly customized and relevant communications – all effortlessly through marketing automation. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven’t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><br/><p>They would also see the name and local phone number for their specific salesperson and ' + result_b_pos + ' local address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><br/><p>This begins by each customer being automatically added into the Customer Relationship Management (CRM) system. ' + result_name + ' at ' + result_b_sng + ' can then track those customers and deliver highly customized and relevant communications – all effortlessly through marketing automation. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven\'t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><br/><p>They would also see ' + result_b_pos + ' local phone and address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }

        //---------------------------------------------------------------//
        //Dynamic Email Blurbs
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. ' + titleCase(result_his) + ' existing Customer Relationship Management system is seamlessly integrated into a whole suite of marketing automation services, enabling prospect engagement with the right message at the right time.</p><br/><p>For example, ' + result_b_sng + ' sends out automated emails to hundreds of prospects after a trade show, each with personalized messaging that addresses them by name, thanks them for stopping by the booth, and is signed from that prospect\'s specific salesperson (including that salesperson\'s phone and email link). This helps each salesperson maintain a personal relationship with their customers, while still efficiently reaching out to a growing database. Further emails can be sent out according to each prospect\'s actions that continue the relationship and eventually lead to a purchase. And of course, every email includes a link to ' + result_site + ' where purchases can be made.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. ' + titleCase(result_his) + ' existing Customer Relationship Management system is seamlessly integrated into a whole suite of marketing automation services, enabling prospect engagement with the right message at the right time.</p><br/><p>For example, ' + result_b_sng + ' sends out automated emails to hundreds of prospects after a trade show, each with personalized messaging that addresses them by name, thanks them for stopping by the booth, and is signed from that prospect\'s specific salesperson (including that salesperson\'s phone and email link as well as the local business address and map link). This helps each salesperson maintain a personal relationship with their customers, while still efficiently reaching out to a growing database. Further emails can be sent out according to each prospect\'s actions that continue the relationship and eventually lead to a purchase.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. A powerful Customer Relationship Management system enables ' + result_his + ' to track opportunities from beginning to end and tailor the entire sales process to best manage ' + result_his + ' specific needs.</p><br/><p>For example, ' + result_b_sng + ' sends out automated emails to hundreds of prospects after a trade show, each with personalized messaging that addresses them by name, thanks them for stopping by the booth, and is signed from that prospect\'s specific salesperson (including that salesperson\'s phone and email link). This helps each salesperson maintain a personal relationship with their customers, while still efficiently reaching out to a growing database. Further emails can be sent out according to each prospect\'s actions that continue the relationship and eventually lead to a purchase. And of course, every email includes a link to ' + result_site + ' where purchases can be made.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. A powerful Customer Relationship Management system enables ' + result_him + ' to track opportunities from beginning to end and tailor the entire sales process to best manage ' + result_his + ' specific needs.</p><br/><p>For example, ' + result_b_sng + ' sends out automated emails to hundreds of prospects after a trade show, each with personalized messaging that addresses them by name, thanks them for stopping by the booth, and is signed from that prospect\'s specific salesperson (including that salesperson\'s phone and email link as well as the local business address and map link). This helps each salesperson maintain a personal relationship with their customers, while still efficiently reaching out to a growing database. Further emails can be sent out according to each prospect\'s actions that continue the relationship and eventually lead to a purchase.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. ' + result_his + ' existing Customer Relationship Management system is seamlessly integrated into a whole suite of marketing automation services, enabling prospect engagement with the right message at the right time.</p><br/><p>For example, ' + result_name + ' sends out automated emails to hundreds of prospects after a trade show, each with personalized messaging that addresses them by name, thanks them for stopping by the booth, and invites them to download a white paper. These prospects are then divided into two lists for a future mailing: those who downloaded the white paper and those who didn\'t. The messaging and incentives are continually fine-tuned to convert prospects into sales. And of course, every email includes a link to ' + result_site + ' where purchases can be made.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. ' + result_his + ' existing Customer Relationship Management system is seamlessly integrated into a whole suite of marketing automation services, enabling prospect engagement with the right message at the right time.</p><br/><p>For example, ' + result_name + ' sends out automated emails to hundreds of prospects after a trade show, each with personalized messaging that addresses them by name, thanks them for stopping by the booth, and invites them to download a white paper. These prospects are then divided into two lists for a future mailing: those who downloaded the white paper and those who didn\'t. The messaging and incentives are continually fine-tuned to convert prospects into sales.  </p><br/><p>The emails are further customized by giving each prospect the correct contact information for their specific area, which could include ' + result_b_pos + ' local phone number, address and a map link.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more – even without a sales team. A powerful Customer Relationship Management system enables ' + result_him + ' to track opportunities from beginning to end and tailor the entire sales process to best manage ' + result_his + ' specific needs.</p><br/><p>For example, ' + result_name + ' sends out automated emails to hundreds of prospects after a trade show, each with personalized messaging that addresses them by name, thanks them for stopping by the booth, and invites them to download a white paper. These prospects are then divided into two lists for a future mailing: those who downloaded the white paper and those who didn\'t. The messaging and incentives are continually fine-tuned to convert prospects into sales. And of course, every email includes a link to ' + result_site + ' where purchases can be made.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more – even without a sales team. A powerful Customer Relationship Management system enables ' + result_him + ' to track opportunities from beginning to end and tailor the entire sales process to best manage ' + result_his + ' specific needs.</p><br/><p>For example, ' + result_name + ' sends out automated emails to hundreds of prospects after a trade show, each with personalized messaging that addresses them by name, thanks them for stopping by the booth, and invites them to download a white paper. These prospects are then automatically divided into two lists for a future mailing: those who downloaded the white paper and those who didn\'t. The messaging and incentives are continually fine-tuned to convert prospects into sales.</p><br/><p>The emails are further customized by giving each prospect the correct contact information for their specific area, which could include ' + result_b_pos + ' local phone number, address and a map link.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. ' + result_his + ' existing Customer Relationship Management system is seamlessly integrated into a whole suite of marketing automation services, enabling prospect engagement with the right message at the right time to optimize sales.</p><br/><p>For example, ' + result_he + ' sends out automated emails with incentives that are relevant to each customer – those who haven\'t purchased a ' + result_product + ' are offered 20% off. Those who have already purchased a ' + result_product + ' are offered 20% off a ' + result_accessory + '. Each email is personalized by being addressed to the individual customer\'s name and is signed from their specific salesperson, including the salesperson\'s phone number and email link. And of course, every email includes a link to ' + result_site + ' where purchases can be made.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. ' + result_his + ' existing Customer Relationship Management system is seamlessly integrated into a whole suite of marketing automation services, enabling prospect engagement with the right message at the right time to optimize sales.</p><br/><p>For example, ' + result_he + ' sends out automated emails with incentives that are relevant to each customer – those who haven\'t purchased a ' + result_product + ' are offered 20% off. Those who have already purchased a ' + result_product + ' are offered 20% off a ' + result_accessory + '. Each email is personalized by being addressed to the individual customer\'s name and is signed from their specific salesperson, including the salesperson\'s phone number and email link.</p><br/><p>Additionally, a local store address and map link is included, making it easy for customers to take advantage of the sale in their area.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. A powerful Customer Relationship Management system enables ' + result_him + ' to track opportunities from beginning to end and tailor the entire sales process to best manage ' + result_his + ' specific needs.</p><br/><p>For example, ' + result_he + ' sends out automated emails with incentives that are relevant to each customer – those who haven\'t purchased a ' + result_product + ' are offered 20% off. Those who have already purchased a ' + result_product + ' are offered 20% off a ' + result_accessory + '. Each email is personalized by being addressed to the individual customer\'s name and is signed from their specific salesperson, including the salesperson\'s phone number and email link. And of course, every email includes a link to ' + result_site + ' where purchases can be made.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. A powerful Customer Relationship Management system enables ' + result_him + ' to track opportunities from beginning to end and tailor the entire sales process to best manage ' + result_his + ' specific needs.</p><br/><p>For example, ' + result_he + ' sends out automated emails with incentives that are relevant to each customer – those who haven\'t purchased a ' + result_product + ' are offered 20% off. Those who have already purchased a ' + result_product + ' are offered 20% off a ' + result_accessory + '. Each email is personalized by being addressed to the individual customer\'s name and is signed from their specific salesperson, including the salesperson\'s phone number and email link.</p><br/><p>Additionally, a local store address and map link is included, making it easy for customers to take advantage of the sale in their area.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more. ' + result_his + ' existing Customer Relationship Management system is seamlessly integrated into a whole suite of marketing automation services, enabling prospect engagement with the right message at the right time to optimize sales.</p><br/><p>For example, ' + result_he + ' sends out automated emails with incentives that are relevant to each customer – those who haven\'t purchased a ' + result_product + ' are offered 20% off. Those who have already purchased a PRODUCT are offered 20% off a ' + result_accessory + '. Each email is personalized by being addressed to the individual customer\'s name and is signed by ' + result_name + ', including ' + result_his + ' phone number and email link. And of course, every email includes a link to ' + result_site + ' where purchases can be made.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more - even without a sales team. ' + result_his + ' existing Customer Relationship Management system is seamlessly integrated into a whole suite of marketing automation services, enabling prospect engagement with the right message at the right time to optimize sales.</p><br/><p>For example, ' + result_he + ' sends out automated emails with incentives that are relevant to each customer – those who haven\'t purchased a ' + result_product + ' are offered 20% off. Those who have already purchased a ' + result_product + ' are offered 20% off a ' + result_accessory + '. Each email is personalized by being addressed to the individual customer\'s name and is signed from ' + result_name + ', including ' + result_his + ' phone number and email link.</p><br/><p>Additionally, a local store address and map link is included, making it easy for customers to take advantage of the sale in their area.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more – even without a sales team. A powerful Customer Relationship Management system enables ' + result_him + ' to track opportunities from beginning to end and tailor the entire sales process to best manage ' + result_his + ' specific needs.</p><br/><p>For example, ' + result_he + ' sends out automated emails with incentives that are relevant to each customer – those who haven\'t purchased a ' + result_product + ' are offered 20% off. Those who have already purchased a ' + result_product + ' are offered 20% off a ' + result_accessory + '. Each email is personalized by being addressed to the individual customer\'s name and is signed from ' + result_name + ', including ' + result_his + ' phone number and email link. And of course, every email includes a link to ' + result_site + ' where purchases can be made.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' sends out automated dynamic emails to build personalized relationships with a growing database, effectively incentivize, and more – even without a sales team. A powerful Customer Relationship Management system enables ' + result_him + ' to track opportunities from beginning to end and tailor the entire sales process to best manage ' + result_his + ' specific needs.</p><br/><p>For example, ' + result_he + ' sends out automated emails with incentives that are relevant to each customer – those who haven\'t purchased a ' + result_product + ' are offered 20% off. Those who have already purchased a ' + result_product + ' are offered 20% off a ' + result_accessory + '. Each email is personalized by being addressed to the individual customer\'s name and is signed from ' + result_name + ', including ' + result_his + ' phone number and email link.</p><br/><p>Additionally, a local store address and map link is included, making it easy for customers to take advantage of the sale in their area.</p>';
        }

        //---------------------------------------------------------------//
        //Call Tracking Blurbs
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'Yes') ) {
            call_tracking_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' does all call tracking on one simple platform that fully integrates with ' + result_his + ' existing Customer Relationship Management system and marketing initiatives. ' + titleCase(result_his) + ' sales team has the information they need to close sales – all in real-time. They can view which campaigns brought prospects to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'No') ) {
            call_tracking_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' does all call tracking on one simple platform. The call tracking is built into a marketing automation system that also includes a Customer Relationship Management system. ' + titleCase(result_his) + ' sales team has the information they need to close sales – all in real-time. They can view which campaigns brought prospects to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'Yes') ) {
            call_tracking_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' does all call tracking on one simple platform that fully integrates with ' + result_his + ' existing Customer Relationship Management system and marketing initiatives. ' + titleCase(result_he) + ' has the information ' + result_he + ' needs to close sales – all in real-time. ' + titleCase(result_he) + ' can view which campaigns brought prospects to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'No') ) {
            call_tracking_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' does all call tracking on one simple platform. The call tracking is built into a marketing automation system that also includes a Customer Relationship Management system. ' + titleCase(result_he) + ' has the information ' + result_he + ' needs to close sales – all in real-time. ' + titleCase(result_he) + ' can view which campaigns brought prospects to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + titleCase(result_name) + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'Yes') ) {
            call_tracking_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' does all call tracking on one simple platform that fully integrates with ' + result_his + ' existing Customer Relationship Management system and marketing initiatives. ' + titleCase(result_his) + ' sales team has the information they need to close sales – all in real-time. They can view which campaigns brought customers to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + titleCase(result_name) + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') ) {
            call_tracking_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' does all call tracking on one simple platform. The call tracking is built into a marketing automation system that also includes a Customer Relationship Management system. ' + titleCase(result_his) + ' sales team has the information they need to close sales – all in real-time. They can view which campaigns brought customers to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + titleCase(result_name) + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'Yes') ) {
            call_tracking_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' does all call tracking on one simple platform that fully integrates with ' + result_his + ' existing Customer Relationship Management system and marketing initiatives. ' + titleCase(result_he) + ' has the information ' + result_he + ' needs to close sales – all in real-time. ' + titleCase(result_he) + ' can view which campaigns brought customers to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + titleCase(result_name) + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') ) {
            call_tracking_blurb = '<p>' + titleCase(result_name) + ' at ' + result_b_sng + ' does all call tracking on one simple platform. The call tracking is built into a marketing automation system that also includes a Customer Relationship Management system. ' + titleCase(result_he) + ' has the information ' + result_he + ' needs to close sales – all in real-time. ' + titleCase(result_he) + ' can view which campaigns brought customers to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + titleCase(result_name) + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        // Define containers for dynamic content
        //var elem0 = document.getElementById('dynamicContentID0');
        //elem0.innerHTML = '<div>' + result_b_sng +'</div>';
        //var elemX = document.getElementById('dynamicContentIDX');
        //elemX.innerHTML = 'Sales Team: ' + ss_team + '&nbsp;|&nbsp;' + 'CRM: ' + ss_crm + '&nbsp;|&nbsp;' + 'Frequency: ' + ss_frequency + '&nbsp;|&nbsp;' + 'Online Purchase: ' + ss_online + '&nbsp;|&nbsp;' + 'Type: ' + ss_type + '<br>';

        // Email Automation Container
        var elem1 = document.getElementById('dynamicContentID1');
        console.log(email_automation_blurb);
        elem1.innerHTML = email_automation_blurb;
        
        // CRM Container
        var elem2 = document.getElementById('dynamicContentID2');
        elem2.innerHTML = crm_blurb;
        // Dynamic Web Content Container
        var elem3 = document.getElementById('dynamicContentID3');
        elem3.innerHTML = dynamic_web_content_blurb;
        // Dynamic Email Blurb
        var elem4 = document.getElementById('dynamicContentID4');
        elem4.innerHTML = dynamic_email_blurb;
        // Call Tracking Blurb
        var elem5 = document.getElementById('dynamicContentID5');
        elem5.innerHTML = call_tracking_blurb;

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
        if(result_he == 'he') {
            document.getElementById('owner_alpha').className += " on";
            document.getElementById('owner_beta').className += " off";
        } else {
            document.getElementById('owner_alpha').className += " off";
            document.getElementById('owner_beta').className += " on";
        };

</script>
</body>
</html>
