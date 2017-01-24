<!DOCTYPE html>
<?php error_reporting(0); 
//B2C && NO TEAM 
if ($_GET["type"] == "b2c" && $_GET["team"] == "no") {
    $boom_city_biz = "page-b2c-no-sales";
}

// B2C && TEAM
elseif ($_GET["type"] == "b2c" && $_GET["team"] == "yes") {
    $boom_city_biz = "page-b2c-sales";
}

// B2B && NO TEAM
elseif ( $_GET["type"] == "b2b" && $_GET["team"] == "no") {
    $boom_city_biz = "page-b2b-no-sales";
}

// B2B && TEAM
elseif ($_GET["type"] == "b2b" && $_GET["team"] == "yes") {
    $boom_city_biz = "page-b2b-sales";
}
?>
<html lang="en"><?php include 'create-queries.php'; ?>
<head>
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="yes" property="step2:value">
    <title>Marketing Automation Game - Dynamic Content</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.css" />
    <?php include 'page-includes.php'; ?>
    <script type="text/javascript">
        var path = document.URL;
        linkpath = path.substring(0,path.lastIndexOf("/"));
        $(document).ready(function(){
            $( '#step4-a' ).click(function() {
                window.location.href = linkpath + '/online-purchasing<?php echo $type . $team; ?>&crm=yes';
            });

            $( '#step4-b' ).click(function() {
                window.location.href = linkpath + '/buy-online<?php echo $type . $team; ?>&crm=no';
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

        <!-- WRAPS EVERYTHING EXCEPT FOOTER -->
        <div class="everything">

            <!-- HEADER -->
            <?php require 'templates/header.php'; ?>

            <!-- INTERACT -->
            <div class="interact">
                <div class="row">
                    <div class="content small-10 small-centered columns">
                        <p class="query">Do you have a Customer Relationship Management (CRM) system?</p>
                        <button id="step4-a">Yes</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button id="step4-b">No</button>
                    </div>
                </div>
            </div>
            
            <!-- IMAGES -->
            <div id="images">
                <div id="<?php echo $boom_city_biz; ?>" class="layers-border row"><img src="./images/clear.png" id="clear"/></div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php require 'templates/footer.php';?>

    </div>

</body>
</html>
