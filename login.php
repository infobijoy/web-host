<?php include('header.php'); ?>
<!-- Log in form start-->
<section>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form name="signin" method="post" action="/login.php" id="cust-login-form" novalidate="novalidate">
          <h1 class="text-center fs-3 fw-bold mb-5">Log in to JetWebHost</h1>
          <input type="hidden" name="action" value="secure_login">
          <input type="hidden" name="redirecturl" value="https://jetwebhost.com/">
          <input type="hidden" name="resellerid" value="129394">

          <div class="form-group">
            <label for="input_email">Email</label>
            <input name="txtUserName" type="text" id="input_email" class="form-control">
          </div>

          <div class="form-group">
            <label for="input_password">Password</label>
            <div class="input-group">
              <input name="txtPassword" type="password" id="input_password" class="form-control">
              <div class="input-group-append">
                <button class="btn btn-vendor toggle-password" type="button" id="togglePassword">
                  <i class="bi bi-eye-fill"></i>
                </button>
              </div>
            </div>
            <a href="/login.php?action=showforgotpass" class="text-end d-block mb-2">Forgot Password?</a>
          </div>

          <div class="form-group">
            <button name="submit" type="submit" class="btn mb-3 col-12 btn-vendor btn-block" value="Login now">Log In</button>
          </div>
          <hr>
          <div class="text-center">
            New to Whois? <a href="#">Create an Account</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="./js/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#togglePassword').click(function() {
      let input = $('#input_password');
      let icon = $(this).find('i');

      if (input.attr('type') === 'password') {
        input.attr('type', 'text');
        icon.removeClass('bi-eye-fill').addClass('bi-eye-slash-fill');
      } else {
        input.attr('type', 'password');
        icon.removeClass('bi-eye-slash-fill').addClass('bi-eye-fill');
      }
    });
  });
</script>

<!-- Log in form end-->
<?php include('footer.php'); ?>