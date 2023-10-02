<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<!-- RECAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- END RECAPTCHA -->
<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/landing-page/dist/css/style-login.css">
<body>

  <div class="wrapper">
    <?php
    Flasher::message();
    ?>
    <div class="title-text">
      <div class="title login">Login Form</div>
      <div class="title signup">Signup Form</div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Signup</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form action="<?=BASEURL; ?>/Login/ProsesLogin" class="login" id="demo-form"  method="POST">
          <div class="field">
            <input type="text" placeholder="Masukkan Username" required name="nama_pengguna" autocomplete="off">
          </div>
          <div class="field">
            <input type="password" placeholder="Masukkan Password" required name="kata_sandi" autocomplete="off">
          </div>
          <!-- Kode recaptcha -->
          <br>
          <div class="g-recaptcha" data-sitekey="6LcvumsoAAAAAL5u8gTI3bkk-Of8tapAxOoWEY7Y"></div>
          <br>
          <!-- end syntax -->

          <div class="pass-link"><a href="#">Forgot password?</a></div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="">Signup now</a></div>
        </form>
        <form action="#" class="signup">
          <div class="field">
            <input type="text" placeholder="Email Address" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Confirm password" required>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Signup">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- js - captcha -->
  <script type="text/javascript">
    var onloadCallback = function() {
      alert("grecaptcha is ready!");
    };
  </script>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
  async defer>
</script>
<!-- end captcha -->


<script type="text/javascript">
  const loginText = document.querySelector(".title-text .login");
  const loginForm = document.querySelector("form.login");
  const loginBtn = document.querySelector("label.login");
  const signupBtn = document.querySelector("label.signup");
  const signupLink = document.querySelector("form .signup-link a");
  signupBtn.onclick = (()=>{
    loginForm.style.marginLeft = "-50%";
    loginText.style.marginLeft = "-50%";
  });
  loginBtn.onclick = (()=>{
    loginForm.style.marginLeft = "0%";
    loginText.style.marginLeft = "0%";
  });
  signupLink.onclick = (()=>{
    signupBtn.click();
    return false;
  });
</script>
</body>
</html>

