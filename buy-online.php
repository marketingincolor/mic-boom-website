<!DOCTYPE html>
<?php error_reporting(0); 
// B2B YES SALES YES CRM
// B2B NO SALES NO CRM
// B2B YES SALES NO CRM
// B2B NO SALES YES CRM
// B2C YES SALES YES CRM
// B2C NO SALES NO CRM
// B2C YES SALES NO CRM
// B2C NO SALES YES CRM



// B2C && NO TEAM && YES CRM
if ($_GET["type"] == "b2c" && $_GET["team"] == "no" && $_GET["crm"] == "yes") {
    $boom_city_biz = "page-b2c-no-sales-yes-crm";
}

// B2B && NO TEAM && YES CRM
elseif ($_GET["type"] == "b2b" && $_GET["team"] == "no" && $_GET["crm"] == "yes") {
    $boom_city_biz = "page-b2b-no-sales-yes-crm";
}

// B2C && YES TEAM && NO CRM
elseif ( $_GET["type"] == "b2c" && $_GET["team"] == "yes" && $_GET["crm"] == "no") {
    $boom_city_biz = "page-b2c-sales-no-crm";
}

// B2B && YES TEAM && YES CRM
elseif ($_GET["type"] == "b2b" && $_GET["team"] == "yes" && $_GET["crm"] == "yes") {
    $boom_city_biz = "page-b2b-sales-yes-crm";
}

// B2B && NO TEAM && NO CRM
elseif ($_GET["type"] == "b2b" && $_GET["team"] == "no" && $_GET["crm"] == "no") {
    $boom_city_biz = "page-b2b-no-sales-no-crm";
}

// B2B && YES TEAM && YES CRM
elseif ($_GET["type"] == "b2b" && $_GET["team"] == "yes" && $_GET["crm"] == "yes") {
    $boom_city_biz = "page-b2b-sales-yes-crm";
}

// B2C && YES TEAM && YES CRM
elseif ($_GET["type"] == "b2c" && $_GET["team"] == "yes" && $_GET["crm"] == "yes") {
    $boom_city_biz = "page-b2c-sales-yes-crm";
}

// B2B && YES TEAM && NO CRM
elseif ($_GET["type"] == "b2b" && $_GET["team"] == "yes" && $_GET["crm"] == "no") {
    $boom_city_biz = "page-b2b-sales-no-crm";
}

//B2C && NO TEAM && NO CRM
elseif ($_GET["type"] == "b2c" && $_GET["team"] == "no" && $_GET["crm"] == "no") {
    $boom_city_biz = "page-b2c-no-sales-no-crm";
}




?>
<html lang="en"><?php include 'create-queries.php'; ?>
<head>
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="no" property="step3:value">
    <title>Marketing Automation Game - Dynamic Content</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.css" />
    <?php include 'page-includes.php'; ?>
    <script type="text/javascript">
        var path = document.URL;
        linkpath = path.substring(0,path.lastIndexOf("/"));
        $(document).ready(function(){
            $( '#step5-a' ).click(function() {
                window.location.href = linkpath + '/customer-purchase-frequency<?php echo $type . $team . $crm; ?>&online=yes';
            });

            $( '#step5-b' ).click(function() {
                window.location.href = linkpath + '/how-often-are-services-purchased<?php echo $type . $team . $crm; ?>&online=no';
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
<body class="boomcity">
    <div class="wrapper">
        <div class="header">
            <div class="row">
                <div class="small-10 medium-4 small-centered columns">
                    <img src="./images/mic-bc-grfx-main-hdr.png" />
                </div>
            </div>
        </div>

        <div class="interact">
            <div class="row">
                <div class="content small-10 small-centered columns">
                    <p class="query">Are your products or services available for purchase online?</p>
                    <button id="step5-a">Yes</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button id="step5-b">No</button>
                </div>
            </div>
        </div>

        <div id="images">
            <div id="<?php echo $boom_city_biz ?>" class="layers-border row"><img src="./images/clear.png" id="clear"></div>
        </div>

        <div class="foot">
            <div class="row collapse">
                <div class="content small-12 small-centered columns">
                    <div class="foot-cta"><a href="http://marketingincolor.com" target="_blank"><img src="./images/mic-bc-grfx-main-btyb.png" /></a></div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
