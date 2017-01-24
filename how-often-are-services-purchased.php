<!DOCTYPE html>
<?php 

error_reporting(0); 

/* ==========================================================================
IF B2B && ONLINE
========================================================================== */
if ( $_GET["type"] == "b2b" && $_GET["online"] == "yes") {

    //B2B && YES TEAM && YES CRM && YES ONLINE
    if ( $_GET["type"] == "b2b" && $_GET["team"] =="yes" && $_GET["crm"] =="yes" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2b-sales-yes-crm-yes-online";

    }
    //B2B && YES TEAM && NO CRM && YES ONLINE
    elseif ( $_GET["type"] == "b2b" && $_GET["team"] =="yes" && $_GET["crm"] =="no" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2b-sales-no-crm-yes-online";
    }
    //B2B && NO TEAM && NO CRM && YES ONLINE
    elseif ( $_GET["type"] == "b2b" && $_GET["team"] =="no" && $_GET["crm"] =="no" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2b-no-sales-no-crm-yes-online";

    }
    //B2B && NO TEAM && YES CRM && YES ONLINE
    elseif ( $_GET["type"] == "b2b" && $_GET["team"] =="no" && $_GET["crm"] =="yes" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2b-no-sales-yes-crm-yes-online";
    }
}

/* ==========================================================================
ELSEIF B2B && NOT ONLINE
========================================================================== */
elseif ( $_GET["type"] == "b2b" && $_GET["online"] == "no" ) {

    // B2B && NO TEAM && NO CRM && NO ONLINE
    if ( $_GET["type"] == "b2b" && $_GET["team"] =="no" && $_GET["crm"] =="no" && $_GET["online"] == "no" ) {
        $boom_city_biz ="page-b2b-no-sales-no-crm-no-online";
    }
    // B2B && YES TEAM && NO CRM && NO ONLINE
    elseif ( $_GET["type"] == "b2b" && $_GET["team"] =="yes" && $_GET["crm"] =="no" && $_GET["online"] == "no" ) {
        $boom_city_biz ="page-b2b-sales-no-crm-no-online";
    }
    // B2B && YES TEAM && YES CRM && NO ONLINE
    elseif ( $_GET["type"] == "b2b" && $_GET["team"] =="yes" && $_GET["crm"] =="yes" && $_GET["online"] == "no" ) {
        $boom_city_biz ="page-b2b-sales-yes-crm-no-online";
    }
    // B2B && NO TEAM && NO CRM && YES ONLINE
    elseif ( $_GET["type"] == "b2b" && $_GET["team"] =="no" && $_GET["crm"] =="no" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2b-no-sales-no-crm-yes-online";
    }
    // B2B && NO TEAM && YES CRM && NO ONLINE
    elseif ( $_GET["type"] == "b2b" && $_GET["team"] =="no" && $_GET["crm"] =="yes" && $_GET["online"] == "no" ) {
        $boom_city_biz ="page-b2b-no-sales-yes-crm-no-online";
    }

}


/* ==========================================================================
IF B2C && ONLINE
========================================================================== */
if ( $_GET["type"] == "b2c" && $_GET["online"] == "yes") {

    //B2C && YES TEAM && YES CRM && YES ONLINE
    if ( $_GET["type"] == "b2c" && $_GET["team"] =="yes" && $_GET["crm"] =="yes" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2c-sales-yes-crm-yes-online";

    }
    //B2C && YES TEAM && NO CRM && YES ONLINE
    elseif ( $_GET["type"] == "b2c" && $_GET["team"] =="yes" && $_GET["crm"] =="no" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2c-sales-no-crm-yes-online";
    }
    //B2C && NO TEAM && NO CRM && YES ONLINE
    elseif ( $_GET["type"] == "b2c" && $_GET["team"] =="no" && $_GET["crm"] =="no" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2c-no-sales-no-crm-yes-online";

    }
    //B2C && NO TEAM && YES CRM && YES ONLINE
    elseif ( $_GET["type"] == "b2c" && $_GET["team"] =="no" && $_GET["crm"] =="yes" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2c-no-sales-yes-crm-yes-online";
    }
}

/* ==========================================================================
ELSEIF B2C && NOT ONLINE
========================================================================== */
elseif ( $_GET["type"] == "b2c" && $_GET["online"] == "no" ) {

    //B2C && NO TEAM && NO CRM && NO ONLINE
    if ( $_GET["type"] == "b2c" && $_GET["team"] =="no" && $_GET["crm"] =="no" && $_GET["online"] == "no" ) {
        $boom_city_biz ="page-b2c-no-sales-no-crm-no-online";
    }

    //B2C && YES TEAM && NO CRM && NO ONLINE
    elseif ( $_GET["type"] == "b2c" && $_GET["team"] =="yes" && $_GET["crm"] =="no" && $_GET["online"] == "no" ) {
        $boom_city_biz ="page-b2c-sales-no-crm-no-online";
    }
    //type=b2c&team=yes&crm=yes&online=no
    elseif ( $_GET["type"] == "b2c" && $_GET["team"] =="yes" && $_GET["crm"] =="yes" && $_GET["online"] == "no" ) {
        $boom_city_biz ="page-b2c-sales-yes-crm-no-online";
    }

    //type=b2c&team=no&crm=no&online=yes
    elseif ( $_GET["type"] == "b2c" && $_GET["team"] =="no" && $_GET["crm"] =="no" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2c-no-sales-no-crm-yes-online";
    }

    //type=b2c&team=no&crm=yes&online=no
    elseif ( $_GET["type"] == "b2c" && $_GET["team"] =="no" && $_GET["crm"] =="no" && $_GET["online"] == "yes" ) {
        $boom_city_biz ="page-b2c-no-sales-no-crm-yes-online";
    }

    // B2C && NO TEAM && YES CRM && NO ONLINE
    elseif ( $_GET["type"] == "b2c" && $_GET["team"] =="no" && $_GET["crm"] =="yes" && $_GET["online"] == "no" ) {
        $boom_city_biz ="page-b2c-no-sales-yes-crm-no-online";
    }
}
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
<body class="boomcity body-page">

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- EVERYTHING EXCEPT FOOTER -->
        <div class="everything">

            <!-- HEADER -->
            <?php require 'templates/header.php'; ?>

            <!-- INTERACT -->
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

            <!-- IMAGES -->
            <div id="images">
                <div id="<?php echo $boom_city_biz; ?>" class="layers-border row">
                    <img src="./images/clear.png" id="clear"/></div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php require 'templates/footer.php'; ?>

    </div>
</body>
</html>
