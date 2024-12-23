<!-- header  -->
<?php
include './views/layouts/header.php';
?>
<!-- end header -->
<!-- Navbar -->
<?php
include './views/layouts/navbar.php';
?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php
include './views/layouts/slidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Thêm tài khoản quản trị</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form </h3>
              </div>
              
              <form action="<?= BASE_URL_ADMIN . '?act=them-quan-tri' ?>" method="POST">
                <div class="card-body">
                <div class="form-group">
                  <label>Họ tên</label>
                  <input type="text" class="form-control" name="ho_ten" placeholder="Mời nhập tên">
                  <?php if (isset($_SESSION['error']['ho_ten'])) { ?>
                    <p class="text-danger"><?= $_SESSION['error']['ho_ten'] ?></p>

                  <?php } ?>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Mời nhập email">
                  <?php if (isset($_SESSION['error']['email'])) { ?>
                    <p class="text-danger"><?= $_SESSION['error']['email'] ?></p>

                  <?php } ?>
                </div>

                

                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Footer -->
<?php
include './views/layouts/footer.php';
?>
<!-- end footer  -->


</body>

</html>