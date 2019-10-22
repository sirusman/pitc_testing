<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Smart Grid Testing Suite</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/visualize.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/datatables.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/buttons.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/checkboxes.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/inputtags.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/main.css" />
  </head>
  <body>
    <div id="gradient">
      <div id="stars">
        <div id="container">
          <header>
            <!-- Logo -->
            <h1 id="logo">Smart Grid Testing Suite</h1>
          
            <!-- User info -->
            <div id="userinfo">
              <img src="<?php echo base_url(); ?>files/img/avatar.png" alt="" />
              <div class="intro">
                Testing Suite Dashboard<br />
                <a href="#">Manage Profile</a>
              </div>
            </div>
          </header>
          <!-- The application "window" -->
          <div id="applications">
          
            <!-- The content -->
            <section id="content">
			<br/><br/><br/>
				<a href="<?php echo site_url(); ?>/testing_suite/initialize_mdc_test" class="button" style="width:80%;font-size:19px;text-align:center;letter-spacing:2px">MDC Interoperability Test</a>
			<br/><br/><br/>
				<a href="<?php echo site_url(); ?>/testing_suite/initialize_mdc_test" class="button" style="width:80%;font-size:19px;text-align:center;letter-spacing:2px">MDM Integration Test</a>
			<br/><br/><br/>
				<a href="<?php echo site_url(); ?>/testing_suite/initialize_mdc_test" class="button" style="width:80%;font-size:19px;text-align:center;letter-spacing:2px">MDC Stress Test</a>
					

            </section>
          </div>
        </div>
		<h4>Note: Choose Test Type</h4>
		</div>    
    <footer id="copyright">Design &amp; Developed by PITC</footer>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="<?php echo base_url(); ?>files/js/excanvas.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.livesearch.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.visualize.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.datatables.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.placeholder.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.selectskin.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.checkboxes.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.wymeditor.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.inputtags.js"></script>
    <script src="<?php echo base_url(); ?>files/js/notifications.js"></script>
    <script src="<?php echo base_url(); ?>files/js/application.js"></script>
  </body>
</html>