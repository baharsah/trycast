<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=getenv('BRAND_NAME')?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">  
  <!-- sys style -->
  <link rel="stylesheet" href="/assets/stylesheet/lantern.public.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?=$navbar?>

    <?=$sidebar?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=esc(getenv("BRAND_NAME") . " Dashboard")?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <?=$bread?>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <?php foreach ($col as $coldata): ?>

        <?= $coldata ?>

        <?php endforeach ?>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?=$ctrlsidebar?>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    <?php if(ENVIRONMENT === "development") : ?> PHP: <?= esc(PHP_VERSION) ?> CodeIgniter: <?= esc(\CodeIgniter\CodeIgniter::CI_VERSION) ?> <?php endif ; ?> APP : <?=TRYCAST_VER?> <b>#SaveUkraina</b>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 Lutfikahana Baharsah & Jaternas. Admin By <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
</body>
</html>
