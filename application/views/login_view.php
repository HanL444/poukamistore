<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>


  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

  <link rel="stylesheet" href="<?php echo base_url('assets/login/'); ?>css/style.css">


</head>

<body>
  <div class="login-wrap">
    <div class="login-html">
      <input id="" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
      <input id="" type="radio" name="tab" class="sign-up" style="display:"><label for="tab-2" class="tab"></label>
      <div class="login-form">
        <div class="sign-in-htm">
          <?php echo validation_errors(); ?>
          <?php echo form_open('verifylogin'); ?>
          <div class="group">
            <label for="user" class="label">Username</label>
            <input id="user" name="username" type="text" class="input">
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="pass" name="password" type="password" class="input" data-type="password">
          </div>
          <div class="group">
            <select class="input" name="pilihan">
              <option value="2">Admin</option>
              <option value="1">Member</option>
            </select>
          </div>
          <div class="group">
            <input type="submit" class="button" value="Sign In">
          </div>
          <div class="hr"></div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>