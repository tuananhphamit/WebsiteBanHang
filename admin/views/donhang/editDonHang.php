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
          <h1>Quản lí thông tin đơn hàng</h1>
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
              <h3 class="card-title">Sửa thông tin đơn hàng: <?= $donHang['ma_don_hang'] ?> </h3>
            </div>

            <form action="<?= BASE_URL_ADMIN . '?act=sua-don-hang' ?>" method="post">
              <input type="text" name="don_hang_id" value="<?= $donHang['id'] ?>" hidden>
              <div class="card-body">
                <div class="form-group">
                  <label>Tên người nhận</label>
                  <input type="text" class="form-control" value="<?= $donHang['ten_nguoi_nhan'] ?>" name="ten_nguoi_nhan" placeholder="Mời nhập tên danh mục">
                  <?php if (isset($_SESSION['error']['ten_nguoi_nhan'])) { ?>
                    <p class="text-danger"><?= $_SESSION['error']['ten_nguoi_nhan'] ?></p>

                  <?php } ?>
                </div>

                <div class="form-group">
                  <label>Số điện thoại</label>
                  <input type="text" class="form-control" value="<?= $donHang['sdt_nguoi_nhan'] ?>" name="sdt_nguoi_nhan" placeholder="Mời nhập tên danh mục">
                  <?php if (isset($_SESSION['error']['sdt_nguoi_nhan'])) { ?>
                    <p class="text-danger"><?= $_SESSION['error']['sdt_nguoi_nhan'] ?></p>

                  <?php } ?>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" value="<?= $donHang['email_nguoi_nhan'] ?>" name="email_nguoi_nhan" placeholder="Mời nhập tên danh mục">
                  <?php if (isset($_SESSION['error']['email_nguoi_nhan'])) { ?>
                    <p class="text-danger"><?= $_SESSION['error']['email_nguoi_nhan'] ?></p>

                  <?php } ?>
                </div>

                <div class="form-group">
                  <label>Địa chỉ</label>
                  <input type="text" class="form-control" value="<?= $donHang['dia_chi_nguoi_nhan'] ?>" name="dia_chi_nguoi_nhan" placeholder="Mời nhập tên danh mục">
                  <?php if (isset($_SESSION['error']['dia_chi_nguoi_nhan'])) { ?>
                    <p class="text-danger"><?= $_SESSION['error']['dia_chi_nguoi_nhan'] ?></p>

                  <?php } ?>
                </div>

                <div class="form-group">
                  <label>Ghi chú</label>
                  <textarea name="ghi_chu" class="form-control" id="" placeholder="Nhập mô tả"><?= $donHang['ghi_chu'] ?></textarea>
                </div>

                <hr>

                <div class="form-group">
                  <label for="">Trạng Thái Đơn hàng</label>
                  <select class="form-control custom-select" name="trang_thai_id" id="">
                    <?php foreach ($listTrangThaiDonHang as $trangThai): ?>
                      <option 
                      <?php 
                      
                        if ($donHang['trang_thai_id'] > $trangThai['id'] 
                        || $donHang['trang_thai_id'] == 11
                        || $donHang['trang_thai_id'] == 12
                        || $donHang['trang_thai_id'] == 13) {
                          echo 'disabled';
                        }
                      ?>
                      <?= $trangThai['id'] == $donHang['trang_thai_id'] ? 'selected' : '' ?> 
                        value="<?= $trangThai['id'] ?>">
                      <?= $trangThai['ten_trang_thai'] ?>
                    
                      </option>
                    <?php endforeach ?>

                  </select>
                  
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