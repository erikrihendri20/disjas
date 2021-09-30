<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Import Yogyakarta</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/admin-lte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/admin-lte/dist/css/adminlte.min.css'); ?>">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url('auth/login'); ?>" class="h1"><b>Login</b>Dashboard</a>
    </div>
    <div class="card-body">
    <div id="flash">
        <?= session()->flash; ?>
    </div>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input name="user" type="text" class="form-control" placeholder="Email atau Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <hr>
      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <img style="width: 20px; " src="https://upload.wikimedia.org/wikipedia/commons/2/28/Lambang_Badan_Pusat_Statistik_%28BPS%29_Indonesia.svg" alt=""> Login SSO BPS
        </a>
      </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/admin-lte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin-lte/dist/js/adminlte.js'); ?>"></script>

</body>
</html>
