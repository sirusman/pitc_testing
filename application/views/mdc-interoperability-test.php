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
            <a href="<?php echo site_url(); ?>/testing_suite/dashboard/"><h1 id="logo">Smart Grid Testing Suite</h1></a>
          
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
          <div id="application">
          
            <!--
			<section id="content">
			<h1 style="">TEST ID : 111</h1>
			</section>
			-->
            <!-- Secondary navigation -->
            <nav id="secondary">
              <ul>
                <li class="current"><a href="#">MDC INFO</a></li>
              </ul>
            </nav>
          
            <!-- The content -->
            <section id="content">
<h2>Company & MDC Information</h2>

<form  action="<?php echo site_url(); ?>/testing_suite/start_mdc_test" method="post">
  <div class="column left">
    <section>
      <label for="label">
        Company Name*
      </label>

      <div>
	   <select name="company">
			<option value="0"> ------------------------------------ </option>
			<option value="1">KBK Electronics (Pvt.) Ltd.</option>
			<option value="2">Creative Electronics (Pvt.) Ltd.</option>
			<option value="3">Accurate (Pvt.) Ltd.</option>
			<option value="4">Microtech Industries (Pvt.) Ltd.</option>
			<option value="5">Vertex Electronics (Pvt.) Ltd.</option>
			<option value="6">Syed Bhais (Pvt.) Ltd.</option>
			<option value="7">IMS (Pvt.) Ltd.</option>
			<option value="8">Pak Elektron Limited
			</option>
       
	   </select>
      </div>
    </section>

	<section>
      <label for="rep">
        Company Representative*
      </label>

      <div>
        <input type="text" id="rep" name="rep" placeholder="Enter Representative Name" class="required" required/>
      </div>
    </section>
	
	<section>
      <label for="rep_des">
        Rep. Designation*
      </label>

      <div>
        <input type="text" id="rep_des" name="rep_des" placeholder="Enter Representative Designation" class="required" required/>
      </div>
    </section>
	
    <section>
      <label for="version">
        MDC Version*
      </label>

      <div>
        <input type="text" id="version" name="version" placeholder="Enter MDC Version" class="required" required/>
      </div>
    </section>

	<section>
      <label for="mode">
        Communication Modes*
      </label>

      <div>
		<div class="column left">
		  <input type="checkbox" name="is_gprs" id="c1" value = "1"/>
          <label for="c1">GPRS/3G/4G</label>
          <input type="checkbox" name="is_rf" id="c2" value = "1" />
          <label for="c2">RF</label>
          <input type="checkbox" name="is_plc" id="c3" value = "1"/>
          <label for="c3">PLC</label>
		</div>
		<div class="column right">
		  <input type="checkbox" name="is_wifi" id="c4" value = "1"/>
          <label for="c4">WiFi</label>
          <input type="checkbox" name="is_zigbee" id="c5" value = "1"/>
          <label for="c5">ZigBee</label>
          <input type="checkbox" name="is_lan" id="c6" value = "1"/>
          <label for="c6">LAN</label>
		</div>
		<div class="clear"></div>
      </div>
    </section>
  </div>

  <div class="column right">
    <section>
      <label for="textarea">
        Meter Information*
        <small>Enter information of all meters</small>
      </label>
      <div>
        <input type="text" id="msn" name="msn[]" placeholder="Enter Meter Serial Number" class="required" required/>
		<select name="msn_type[]">
			<option value="1">Single Phase</option>
			<option value="2">Three Phase Whole Current</option>
			<option value="3">Three Phase LT-TOU</option>
			<option value="4">Three Phase HT-TOU</option>
			<option value="5">Three Phase Wide Range LT/HT</option>
	   </select>
      </div>
    </section>
    <section>
      <label for="textarea">
        Meter Information
        <small>Enter information of all meters</small>
      </label>
      <div>
        <input type="text" id="msn" name="msn[]" placeholder="Enter Meter Serial Number" class="required" />
		<select name="msn_type[]">
			<option value="1">Single Phase</option>
			<option value="2">Three Phase Whole Current</option>
			<option value="3">Three Phase LT-TOU</option>
			<option value="4">Three Phase HT-TOU</option>
			<option value="5">Three Phase Wide Range LT/HT</option>
	   </select>
      </div>
    </section>
    <section>
      <label for="textarea">
        Meter Information
        <small>Enter information of all meters</small>
      </label>
      <div>
        <input type="text" id="msn" name="msn[]" placeholder="Enter Meter Serial Number" class="required"/>
		<select name="msn_type[]">
			<option value="1">Single Phase</option>
			<option value="2">Three Phase Whole Current</option>
			<option value="3">Three Phase LT-TOU</option>
			<option value="4">Three Phase HT-TOU</option>
			<option value="5">Three Phase Wide Range LT/HT</option>
	   </select>
      </div>
    </section>
    <section>
      <label for="textarea">
        Meter Information
        <small>Enter information of all meters</small>
      </label>
      <div>
        <input type="text" id="msn" name="msn[]" placeholder="Enter Meter Serial Number" class="required"/>
		<select name="msn_type[]">
			<option value="1">Single Phase</option>
			<option value="2">Three Phase Whole Current</option>
			<option value="3">Three Phase LT-TOU</option>
			<option value="4">Three Phase HT-TOU</option>
			<option value="5">Three Phase Wide Range LT/HT</option>
	   </select>
      </div>
    </section>
  </div>

  <div class="clear"></div>
<div>
  <div class="column left">
  <h2>Data Reading Profile Credentials</h2>
	<section>
      <label for="rd_profile_type">
        Profile Type*
      </label>
      <div>
        <select name="rd_profile_type">
			<option value="1">Database</option>
			<option value="2">Web Services</option>
			<option value="3">CIM</option>
			<option value="4">Multi-Speak</option>
		</select>
      </div>
    </section>
	
	<section>
      <label for="rd_protocol">
        Protocol/Type*
      </label>
      <div>
        <select name="rd_protocol">
			<option value="1">MySQL</option>
			<option value="2">MSSQL</option>
			<option value="3">ORACLE</option>
			<option value="4">MONGO-DB</option>
			<option value="5">NO-SQL</option>
	   </select>
      </div>
    </section>
    <section>
      <label for="rd_host">
        Host/IP*
      </label>

      <div>
        <input type="text" id="rd_host" name="rd_host" placeholder="Enter Host/IP Information" class="required" required/>
      </div>
    </section>
	
	<section>
      <label for="rd_port">
        Port*
      </label>

      <div>
        <input type="text" id="rd_port" name="rd_port" placeholder="Enter Port Number"  class="required" required/>
      </div>
    </section>
	
	<section>
      <label for="rd_user">
        Username*
      </label>

      <div>
        <input type="text" id="rd_user" name="rd_user" placeholder="Enter Valid Username"  class="required" required/>
      </div>
    </section>
	
	<section>
      <label for="rd_pwd">
        Password*
      </label>

      <div>
        <input type="text" id="rd_pwd" name="rd_pwd" placeholder="Enter Valid Password"  class="required" required/>
      </div>
    </section>
  </div>
  <div class="column right">
  <h2>Data Writing Profile Credentials</h2>
	<section>
      <label for="wr_profile_type">
        Profile Type*
      </label>
      <div>
        <select name="wr_profile_type">
			<option value="1">Database</option>
			<option value="2">Web Services</option>
			<option value="3">CIM</option>
			<option value="4">Multi-Speak</option>
		</select>
      </div>
    </section>
	
	<section>
      <label for="wr_protocol">
        Protocol/Type*
      </label>
      <div>
        <select name="wr_protocol">
			<option value="1">MySQL</option>
			<option value="2">MSSQL</option>
			<option value="3">ORACLE</option>
			<option value="4">MONGO-DB</option>
			<option value="5">NO-SQL</option>
	   </select>
      </div>
    </section>
    <section>
      <label for="wr_host">
        Host/IP*
      </label>

      <div>
        <input type="text" id="wr_host" name="wr_host" placeholder="Enter Host/IP Information" class="required" required/>
      </div>
    </section>
	
	<section>
      <label for="wr_port">
        Port*
      </label>

      <div>
        <input type="text" id="wr_port" name="wr_port" placeholder="Enter Port Number"  class="required" required/>
      </div>
    </section>
	
	<section>
      <label for="wr_user">
        Username*
      </label>

      <div>
        <input type="text" id="wr_user" name="wr_user" placeholder="Enter Valid Username" class="required" required/>
      </div>
    </section>
	
	<section>
      <label for="wr_pwd">
        Password*
      </label>

      <div>
        <input type="text" id="wr_pwd" name="wr_pwd" placeholder="Enter Valid Password" class="required" required/>
      </div>
    </section>
  </div>
</div>

  <h5>Note: Added Information Cannot be Ammended</h5>

  <!--<textarea class="wysiwym" name="remarks"></textarea>
  <br />
-->
  <p style="float:right">
    <input type="submit" class="button primary submit" value="Submit" />
    <a href="#" class="button">Cancel</a>
  </p>
 <br />
</form>

            </section>
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
    <script src="<?php echo base_url(); ?>files/js/jquery.selectskin.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.checkboxes.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.wymeditor.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.inputtags.js"></script>
    <script src="<?php echo base_url(); ?>files/js/notifications.js"></script>
    <script src="<?php echo base_url(); ?>files/js/application.js"></script>
  </body>
</html>