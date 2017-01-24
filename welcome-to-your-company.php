<!DOCTYPE html>
<?php error_reporting(0); 

if ( isset($_GET["type"]) && $_GET["type"] == "b2b") {
    $congratulations = "congratulations-b2b";
}
else {
    $congratulations = "congratulations-b2c";
}

?>
<html lang="en"><?php include 'create-queries.php'; ?>
<head>
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta content="product" property="step5:value">
    <title>Marketing Automation Game - Dynamic Content</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.css" />
    <?php include 'page-includes.php'; ?>


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
    <div class="wrapper">

        <!-- EVERYTHING EXCEPT FOOTER -->
        <div class="everything">

            <!-- HEADER -->
            <?php require 'templates/header.php'; ?>

            <!-- INTERACT -->
            <?php require 'templates/congrats-interact.php'; ?>
            
            <!-- IMAGES -->
            <div id="images">
                <div id="<?php echo $congratulations ?>" class="row layers-border">
                    <img src="./images/clear.png" style="position:relative; background-size: 100% 100%;"/></div>
            </div>

        </div>
        
        <!-- FOOTER -->
        <?php require 'templates/footer.php'; ?>
    </div>

<?php include 'page-includes.php'; ?>
</body>
</html>
