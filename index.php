<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Marketing Automation Game - Dynamic Content</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.css" />
    <link rel="stylesheet" href="foundation.min.css">

</head>
<body class="boomcity start body-home">

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- EVERYTHING EXCEPT FOOTER -->
		<div class="everything">
		    <div class="header-home">
		        <div class="spotlight spot1"></div>
		        <div class="spotlight spot2"></div>
		        <div class="spotlight spot3"></div>
		        <div class="spotlight spot4"></div>
		        <div class="row">
		            <div class="small-10 medium-6 large-4 small-centered columns">
		                <img src="./images/mic-bc-grfx-main-hdr.png" />
		            </div>
		        </div>
		        <!-- <img src="./images/Skyline.png" alt="" class="show-for-medium-up"/> -->
		        <div style="background: url(./images/skyline-single.png);background-repeat:repeat-x; height:300px;" class="show-for-medium-up"/></div>

		        <div class="row collapse hide-for-medium-up">
		            <div class="small-12 columns">
		                <img src="./images/mic-bc-grfx-main-skyline-start.png"/>
		            </div>
		        </div>
		    </div>
			
			<!-- INTERACT HOME CONTENT -->
		    <div class="interact-home">
		        <div class="row">
		            <div class="content small-10 medium-9 small-centered columns">
		                <h3 class="home-headline">See how marketing automation can make your business boom.</h3>
		                    <p class="index-p">Simply answer a few questions about your real-life business to build a similar, but fictitious Boom City business. In the process, you'll learn about all of the marketing automation tools that can make your real business boom – effortlessly! Ready to create your Boom City business?</p><br/>
		                <a href="#" class="play-button" data-reveal-id="formModal">LET'S GO!</a>
		            </div>
		        </div>
		        <div id="formModal" class="reveal-modal large" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
		            <div class="row">
		                <div class="content small-12 small-centered columns">
		                    <!-- SharpSpring Form for BoomCity Form  -->
		                    <script type="text/javascript">
		                        var ss_form = {'account': 'MzQ1sAAA', 'formID': 'M0mzSE4zSjLQTTFMMtU1STE207U0M0nSNTM0NTCzSDEwTzI2AwA'};
		                        ss_form.width = '100%';
		                        ss_form.height = '1000';
		                        ss_form.domain = 'app-UUHGVW.marketingautomation.services';
		                        ss_form.hidden = {'_usePlaceholders': true}; // Modify this for sending hidden variables, or overriding values
		                    </script>
		                    <script type="text/javascript" src="https://koi-UUHGVW.marketingautomation.services/client/form.js?ver=1.1.1"></script>
		                </div>
		            </div>
		            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
		        </div>
			</div> <!-- /interact-home -->
		</div> <!-- /everything -->
		
		<!-- FOOTER -->
		<?php require 'templates/footer-home.php'; ?>
	</div> <!-- /wrapper -->


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

<?php include 'page-includes.php'; ?>
</body>
</html>
