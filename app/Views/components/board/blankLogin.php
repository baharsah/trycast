<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=getenv('BRAND_NAME')?> | <?=lang("Info.login.title")?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/stylesheet/lantern.public.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=getenv("BRAND_HOME")?>"> <?=esc(getenv("BRAND_NAME") . " Dashboard")?></a>
  </div>
  <!-- /.login-logo -->
  <div id="nel" class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?=lang('Info.loginToStart')?></p>

      <?=form_open('/auth/login')?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="<?=lang('Auth.username')?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="<?=lang('Auth.password')?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"><?=lang("Info.login.title")?></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      /.social-auth-links -->

      <p class="mb-1">
        <!-- <a href="{forgoturl}">Lupa Password?</a> -->
      </p>
      <p class="mb-0">
        <a href="<?=base_url('auth/register')?>" class="text-center"><?=lang("Info.register.link")?></a>
      </p>
      <small class="mb-0">
          (v.<?=TRYCAST_VER."-".ENVIRONMENT?>) DB <?=\Config\Database::connect(null , false)->getVersion()?>
        </small>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
</body>
</html>
