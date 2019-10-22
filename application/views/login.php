<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-In</title>
	<link rel='stylesheet prefetch' href='<?php echo base_url(); ?>files/css/ionicons.css'>
	<link rel='stylesheet prefetch' href='<?php echo base_url(); ?>files/css/font-awesome.min.css'>
	<link rel="stylesheet" href="<?php echo base_url(); ?>files/css/style.css">
</head>

<body>
  <div class="signupSection">
  <div class="info">
    <h2>Smart Grid Testing Suite</h2>
    <img src="<?php echo base_url(); ?>files/img/usaid.png" width="141px">
    <p>Power Information Technology Company</p>
  </div>
  <form action="<?php echo site_url(); ?>/testing_suite/dashboard/" method="POST" class="signupForm" name="signupform">
    <h2>Sign In</h2>
    <ul class="noBullet">
      <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="username" placeholder="Username" value="" oninput="return userNameValidation(this.value)" required/>
      </li>
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="" oninput="return passwordValidation(this.value)" required/>
      </li>
      
      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Login" value="Login">
      </li>
    </ul>
  </form>
</div>
  
    <script src="<?php echo base_url(); ?>/files/js/index.js"></script>

</body>
</html>
