  <div class="login-wrap">
    <div class="login-html">
      <input id="" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
      <input id="" type="radio" name="tab" class="sign-up" style="display:"><label for="tab-2" class="tab"></label>
      <div class="login-form">
        <div class="sign-in-htm">
          <?php echo validation_errors(); ?>
          <?php echo form_open('autentifikasi'); ?>
          <div class="group">
            <label for="user" class="label">Username</label>
            <input id="user" name="username" type="text" class="input">
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="pass" name="password" type="password" class="input" data-type="password">
          </div>
          <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="customCheck">Remember me</label>
          </div>
          <br>
          <div class="group">
            <input type="submit" class="button" value="Sign In">
          </div>
          <div class="text-center">
            <a class="small" href="<?= base_url('login/lupaPassword');?>">Lupa Password?</a>
          </div>
          <br>
          <div class="text-center">
            <a class="small" href="<?= base_url('login/registrasi')?>">Daftar Akun!</a>
          </div>
          <div class="hr"></div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>