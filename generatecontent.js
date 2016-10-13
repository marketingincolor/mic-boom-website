/**
 * Content Generation Arrays for Marketing Automation Game
 * Contains ALL reqiured SharpSpring codes and functions (resp)
 * by EJT @ MIC
 *
**/

var callThisOnReturn = function(resp) {
    if(resp && resp.contact) {
        var contact = resp.contact;
        console.warn(contact);
        //var name = contact['First Name'];
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
        var email_automation_blurb = 'email_automation_blurb';
        var crm_blurb = 'crm_blurb';
        var dynamic_web_content_blurb = 'dynamic_web_content_blurb';
        var dynamic_email_blurb = 'dynamic_email_blurb';
        var call_tracking_blurb = 'call_tracking_blurb';

        //---------------------------------------------------------------//
        //Email Automation Blurbs
        if( (ss_frequency == 'Frequently') && (ss_team == 'Yes') ) {
            email_automation_blurb = '<p>With email automation, ' + result_name + ' at ' + result_b_sng + ' can help ' + result_his + ' sales team communicate with their growing database of customers when they are most likely to make a purchase.</p><p>For example, according to ' + result_b_pos + ' data, their customers buy a ' + result_product + ' about once a month. So automated emails are sent out to customers three weeks after each purchase, reminding them to buy again soon. This automation makes it very easy for each salesperson to provide a purchase reminder at the right time.</p>';
        }
        if( (ss_frequency == 'Frequently') && (ss_team == 'No') ) {
            email_automation_blurb = '<p>With email automation, ' + result_name + ' at ' + result_b_sng + ' can communicate with ' + result_his + ' growing database of customers when they are most likely to make a purchase.</p><p>For example, according to ' + result_b_pos + ' data, ' + result_name + '\'s customers buy a ' + result_product + ' about once a month. So automated emails are sent out to customers three weeks after each purchase, reminding them to buy again soon. This automation makes it very easy for ' + result_name + ' to provide a purchase reminder at the right time.</p>';
        }
        if( (ss_frequency == 'Infrequently') && (ss_team == 'Yes') ) {
            email_automation_blurb = '<p>With email automation, ' + result_name + ' at ' + result_b_sng + ' can help ' + result_his + ' sales team communicate with their growing database of customers with messaging that will best produce a purchase.</p><p>For example, according to ' + result_b_pos + ' data, ' + result_name + '\'s customers buy a ' + result_product + ' about once a year. Since this is an infrequent purchase, the database is divided into two lists - those who have made a purchase and those who have not. Emails are automated to deliver messaging based on their purchase history - those who have purchased are sent emails pushing a ' + result_accessory + ', while those who have not purchased continue to receive messaging pushing a ' + result_product + '. Each salesperson can effortlessly provide the right messaging to each customer - even if they\'re communicating with thousands of customers. </p>';
        }
        if( (ss_frequency == 'Infrequently') && (ss_team == 'No') ) {
            email_automation_blurb = '<p>With email automation, ' + result_name + ' at ' + result_b_sng + ' can communicate with ' + result_his + ' growing database of customers with messaging that will best produce a purchase.</p><p>For example, according to ' + result_b_pos + ' data, '+ result_name + '\'s customers buy a ' + result_product + ' about once a year. Since this is an infrequent purchase, the database is divided into two lists - those who have made a purchase and those who have not. Emails are automated to deliver messaging based on their purchase history - those who have purchased are sent emails pushing a ' + result_accessory + ' while those who have not purchased continue to receive messaging pushing a ' + result_product + '. ' + result_name + ' can effortlessly provide the right messaging to each customer - even if ' + result_he + ' is communicating with thousands of customers.</p>';
        }

        //---------------------------------------------------------------//
        //CRM Blurbs
        if( (ss_team == 'Yes') && (ss_crm == 'Yes') ) {
            crm_blurb = '<p>' + result_name + ' at ' + result_b_sng + ' has a robust Customer Relationship Management system in place. The information in this system is seamlessly integrated into a whole suite of marketing automation services, enabling ' + result_name + ' to deliver highly customized and relevant campaigns to customers. The system also helps ' + result_his + ' sales teams to focus their efforts on the hottest prospects. From tracking engagement to assessing fit, the system does all the work for them, ensuring highly effective targeting and better results – effortlessly.</p>';
        }
        if( (ss_team == 'No') && (ss_crm == 'Yes') ) {
            crm_blurb = '<p>' + result_name + ' at ' + result_b_sng + ' has a robust Customer Relationship Management system in place. The information in this system is seamlessly integrated into a whole suite of marketing automation services, enabling ' + result_name + ' to deliver highly customized and relevant campaigns to customers. With this system, ' + result_name + ' can assign scores to customers and identify the hottest prospects. From tracking engagement to assessing fit, the system does all the work and enables ' + result_him + ' to achieve highly effective targeting and better results – effortlessly.</p>';
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
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that’s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when prospects who haven’t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><p>Relevant messaging is also delivered for e-commerce. For example, prospects who haven’t bought a ' + result_product + ' (' + result_b_pos +  ' main product) would see the sales pitch for that. Those who have already bought the ' + result_product + ', would see the sales pitch for a ' + result_accessory + '.</p><p>They would also see the contact information for their specific salesperson, further personalizing the sales process.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when prospects who haven’t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><p>They would also see the name and local phone number for their specific salesperson and ' + result_b_pos + ' local address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><p>This begins by seamlessly integrating ' + result_b_pos + ' existing Customer Relationship Management (CRM) system into a whole suite of marketing automation services. Each website visitor is automatically delivered tailored messaging. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven\'t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><p>Relevant messaging is also delivered for e-commerce. For example, customers who haven\'t bought a ' +  result_product + ' (' + result_b_pos + ' main product) would see the sales pitch for that. Those who have already bought the ' +  result_product + ', would see the sales pitch for a ' + result_accessory + '.</p><p>They would also see the contact information for their specific salesperson, further personalizing the sales process.</p>'
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = '<p>Prospects who visit ' + result_site + ' see content that’s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><p>This begins by each prospect being automatically added into the Customer Relationship Management (CRM) system. ' + result_name + ' at ' + result_b_sng + ' can then track those prospects and deliver highly customized and relevant communications – all effortlessly by marketing automation. For example, when prospects who haven\'t signed up for an upcoming webinar visit the website, they see an invitation to sign up. Those who have signed up see a thank you for signing up and a reminder of the webinar date and time.</p><p>Relevant messaging is also delivered for e-commerce. For example, prospects who haven\'t bought a ' +  result_product + ' (' + result_b_pos + ' main product) would see the sales pitch for that. Those who have already bought the ' +  result_product + ', would see the sales pitch for a ' + result_accessory + '.</p><p>They would also see the contact information for their specific salesperson, further personalizing the sales process.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_web_content_blurb = result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_site + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><p>This begins by each customer being automatically added into the Customer Relationship Management (CRM) system.' + result_name + ' at ' + result_b_sng + ' can then track those customers and deliver highly customized and relevant communications – all effortlessly through marketing automation. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven’t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><p>They would also see the name and local phone number for their specific salesperson and ' + result_b_pos + ' local address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_web_content_blurb = '<p>Customers who visit ' + result_name + ' see content that\'s relevant to their unique engagement and actions, thus improving ' + result_b_pos + ' chances of converting website visits into sales.</p><p>This begins by each customer being automatically added into the Customer Relationship Management (CRM) system. ' + result_name + ' at ' + result_b_sng + ' can then track those customers and deliver highly customized and relevant communications – all effortlessly through marketing automation. For example, when members of ' + result_b_pos + ' VIP program visit the website, they are greeted with: "Welcome back VIP. Click here to see our latest VIP specials." When visitors log on who haven\'t signed up to be a VIP, they are greeted with: "Sign up to become a ' + result_b_sng + ' VIP and enjoy exclusive offers."</p><p>They would also see ' + result_b_pos + ' local phone and address, further personalizing the online experience and delivering the information they need to purchase.</p>';
        }

        //---------------------------------------------------------------//
        //Dynamic Email Blurbs
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'Yes') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'Yes') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') && (ss_online == 'No') ) {
            dynamic_email_blurb = '<p></p>'
             + result_name + ' ' + result_b_sng + ' ' + result_b_pos + ' ' + result_site + ' ' +  result_product + ' ' + result_accessory + ' ' + result_his + ' ' + result_him + ' ' + result_he + '.';
        }

        //---------------------------------------------------------------//
        //Call Tracking Blurbs
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'Yes') ) {
            call_tracking_blurb = '<p>' + result_name + ' at ' + result_b_sng + ' does all call tracking on one simple platform that fully integrates with ' + result_his + ' existing Customer Relationship Management system and marketing initiatives. ' + result_his + ' sales team has the information they need to close sales – all in real-time. They can view which campaigns brought prospects to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'Yes') && (ss_crm == 'No') ) {
            call_tracking_blurb = '<p>' + result_name + ' at ' + result_b_sng + ' does all call tracking on one simple platform. The call tracking is built into a marketing automation system that also includes a Customer Relationship Management system. ' + result_his + ' sales team has the information they need to close sales – all in real-time. They can view which campaigns brought prospects to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'Yes') ) {
            call_tracking_blurb = '<p>' + result_name + ' at ' + result_b_sng + ' does all call tracking on one simple platform that fully integrates with ' + result_his + ' existing Customer Relationship Management system and marketing initiatives. ' + result_he + ' has the information ' + result_he + ' needs to close sales – all in real-time. ' + result_he + ' can view which campaigns brought prospects to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2B') && (ss_team == 'No') && (ss_crm == 'No') ) {
            call_tracking_blurb = '<p>' + result_name + ' at ' + result_b_sng + ' does all call tracking on one simple platform. The call tracking is built into a marketing automation system that also includes a Customer Relationship Management system. ' + result_he + ' has the information ' + result_he + ' needs to close sales – all in real-time. ' + result_he + ' can view which campaigns brought prospects to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'Yes') ) {
            call_tracking_blurb = '<p>' + result_name + ' at ' + result_b_sng + ' does all call tracking on one simple platform that fully integrates with ' + result_his + ' existing Customer Relationship Management system and marketing initiatives. ' + result_his + ' sales team has the information they need to close sales – all in real-time. They can view which campaigns brought customers to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'Yes') && (ss_crm == 'No') ) {
            call_tracking_blurb = '<p>' + result_name + ' at ' + result_b_sng + ' does all call tracking on one simple platform. The call tracking is built into a marketing automation system that also includes a Customer Relationship Management system. ' + result_his + ' sales team has the information they need to close sales – all in real-time. They can view which campaigns brought customers to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'Yes') ) {
            call_tracking_blurb = '<p>' + result_name + ' at ' + result_b_sng + ' does all call tracking on one simple platform that fully integrates with ' + result_his + ' existing Customer Relationship Management system and marketing initiatives. ' + result_he + ' has the information ' + result_he + ' needs to close sales – all in real-time. ' + result_he + ' can view which campaigns brought customers to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }
        if((ss_type == 'B2C') && (ss_team == 'No') && (ss_crm == 'No') ) {
            call_tracking_blurb = '<p>' + result_name + ' at ' + result_b_sng + ' does all call tracking on one simple platform. The call tracking is built into a marketing automation system that also includes a Customer Relationship Management system. ' + result_he + ' has the information ' + result_he + ' needs to close sales – all in real-time. ' + result_he + ' can view which campaigns brought customers to the website and each page they visited. Both phone and form leads can all be easily tracked in one platform. ' + result_name + ' is also able to run accurate and complete ROI reports for all of ' + result_his + ' marketing initiatives. It\'s a powerful tool that streamlines and optimizes the sales process.</p>';
        }

        // Define containers for dynamic content
        var elem0 = document.getElementById('dynamicContentID0');
        elem0.innerHTML = '<div>' + result_b_sng +'</div>';
        //var elemX = document.getElementById('dynamicContentIDX');
        //elemX.innerHTML = 'Sales Team: ' + ss_team + '&nbsp;|&nbsp;' + 'CRM: ' + ss_crm + '&nbsp;|&nbsp;' + 'Frequency: ' + ss_frequency + '&nbsp;|&nbsp;' + 'Online Purchase: ' + ss_online + '&nbsp;|&nbsp;' + 'Type: ' + ss_type + '<br>';

        // Email Automation Container
        var elem1 = document.getElementById('dynamicContentID1');
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
        if(result_he == 'He') {
            document.getElementById('owner_alpha').className += " on";
            document.getElementById('owner_beta').className += " off";
        } else {
            document.getElementById('owner_alpha').className += " off";
            document.getElementById('owner_beta').className += " on";
        }
    } else {
        window.location.href='http://dev.marketingincolor.com/micmatool/index.html';
    }
};
