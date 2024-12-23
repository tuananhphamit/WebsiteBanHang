<?php require_once 'views/layout/header.php'; ?>
<?php require_once 'views/layout/menu.php'; ?>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">my-account</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- my account wrapper start -->
    <div class="my-account-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">


                                        <?php if ($user['chuc_vu_id'] == 1) { ?>
                                            <a href="<?= BASE_URL_ADMIN . '?act=login-admin' ?>" class="nav-link">
                                                <i class="fa fa-sign-out"></i> Đăng nhập admin
                                            </a>
                                        <?php } else { ?>
                                            <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                                Orders</a>
                                            <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account
                                                Details</a>
                                        <?php } ?>


                                        <a href="<?= BASE_URL . '?act=logout' ?>" class="nav-link" onclick="return confirm('Đăng xuất tài khoản')"><i class="fa fa-sign-out"></i> Logout</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->

                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">


                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h5>Đơn hàng của bạn</h5>
                                                <?php
                                                // Kiểm tra và hiển thị lỗi
                                                if (isset($_SESSION['error1'])): ?>
                                                    <div class="alert alert-danger">
                                                        <?= htmlspecialchars($_SESSION['error1']); ?>
                                                    </div>
                                                    <?php unset($_SESSION['error1']);
                                                endif; ?>

                                                <?php
                                                // Kiểm tra và hiển thị thông báo thành công
                                                if (isset($_SESSION['message'])): ?>
                                                    <div class="alert alert-success">
                                                        <?= htmlspecialchars($_SESSION['message']); ?>
                                                    </div>
                                                <?php unset($_SESSION['message']);
                                                endif; ?>



                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>Mã đơn hàng</th>
                                                                <th>Tên người nhận</th>
                                                                <th>Số điện thoại</th>
                                                                <th>Ngày đặt</th>
                                                                <th>Tổng tiền</th>
                                                                <th>Trạng Thái</th>
                                                                <th>Thao Tác</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php foreach ($don_hang_list as $key => $don_hang): ?>
                                                                <tr>
                                                                    <td><?= $key + 1; ?></td>
                                                                    <td><?= $don_hang['ma_don_hang'] ?></td>
                                                                    <td><?= $don_hang['ten_nguoi_nhan'] ?></td>
                                                                    <td><?= $don_hang['sdt_nguoi_nhan'] ?></td>

                                                                    <td><?= date('d M, Y', strtotime($don_hang['ngay_dat'])); ?></td>

                                                                    <td><?= formatPrice($don_hang['tong_tien']) . 'đ' ?></td>
                                                                    <td><?= $don_hang['ten_trang_thai'] ?></td>
                                                                    <td>
                                                                        <!-- Nút xem chi tiết đơn hàng -->
                                                                        <button class="btn btn-info btn-sm mb-2">
                                                                            <a href="<?= BASE_URL . '?act=chi-tiet-don-hang-user&id_don_hang=' . $don_hang['id'] ?>">
                                                                                Xem Chi Tiết
                                                                            </a><br>
                                                                        </button><br>

                                                                        <button class="btn btn-danger btn-sm mb-2">
                                                                            <a href="<?= BASE_URL . '?act=huy-don&id=' . $don_hang['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn không?')">
                                                                                Hủy Đơn
                                                                            </a><br>
                                                                        </button><br>

                                                                        <button class="btn btn-success btn-sm">
                                                                            <a href="<?= BASE_URL . '?act=hoan-don&id=' . $don_hang['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn hoàn hàng không?')">
                                                                                Hoàn Hàng
                                                                            </a>
                                                                        </button>

                                                                    </td>



                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>


                                                        </tbody>
                                                    </table>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h5>Tài khoản người dùng: <?= $user['ho_ten'] ?></h5>
                                                <div class="account-details-form">
                                                    <form action="<?= BASE_URL . '?act=thay-doi-thong-tin-tai-khoan' ?>" method="POST" enctype="multipart/form-data">
                                                        <?php if (isset($_SESSION['complete'])) { ?>
                                                            <div class="alert alert-success alert-dismissable">
                                                                <a class="panel-close close" data-dismiss="alert">×</a>
                                                                <i class="fa fa-coffee"></i>
                                                                <?= $_SESSION['complete'] ?>
                                                            </div>
                                                        <?php } ?>
                                                        <?php unset($_SESSION['complete']); ?>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="single-input-item">
                                                                    <input type="hidden" name="tai_khoan_id" value="<?= $user['id'] ?>">
                                                                    <label for="first-name" class="required">Họ tên</label>
                                                                    <input type="text" name="ho_ten" value="<?= $user['ho_ten'] ?>" id="first-name" placeholder="Họ tên" />
                                                                    <?php if (isset($_SESSION['error']['ho_ten'])) { ?>
                                                                        <p class="text-danger"><?= $_SESSION['error']['ho_ten'] ?></p>

                                                                    <?php } ?>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="display-name" class="required">Ảnh đại diện</label>
                                                            <input type="file" name="anh_dai_dien" id="display-name" />
                                                            <img src="<?= BASE_URL . $user['anh_dai_dien'] ?>" alt="ảnh lỗi rồi" width="100px">
                                                            <?php if (isset($_SESSION['error']['anh_dai_dien'])) { ?>
                                                                <p class="text-danger"><?= $_SESSION['error']['anh_dai_dien'] ?></p>

                                                            <?php } ?>
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="display-name" class="required">Ngày Sinh</label>
                                                            <input type="date" name="ngay_sinh" value="<?= $user['ngay_sinh'] ?>" id="display-name" placeholder="Ngày sinh" />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="email" class="required">Email</label>
                                                            <input type="email" name="email" id="email" value="<?= $user['email'] ?>" placeholder="Email" />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label for="so_dien_thoai" class="required">Số điện thoại</label>
                                                            <input type="text" id="so_dien_thoai" name="so_dien_thoai" value="<?= $user['so_dien_thoai'] ?>" placeholder="Số điện thoại" />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <label>Giới tính</label>

                                                            <select class="form-control" name="gioi_tinh">
                                                                <option <?= $user['gioi_tinh'] == 1 ? 'selected' : '' ?> value="1">Nam</option>
                                                                <option <?= $user['gioi_tinh'] == 2 ? 'selected' : '' ?> value="2">Nữ</option>


                                                            </select>
                                                        </div>


                                                        <div class="single-input-item">
                                                            <label for="dia_chi" class="required">Địa chỉ</label>
                                                            <input type="text" id="dia_chi" name="dia_chi" value="<?= $user['dia_chi'] ?>" placeholder="Địa chỉ" />
                                                        </div>
                                                        <div class="single-input-item">
                                                            <button type="submit" class="btn btn-sqr">Lưu thay đổi</button>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div>
                                                    <form action="<?= BASE_URL . '?act=sua-mat-khau-ca-nhan' ?>" method="POST">
                                                        <fieldset>
                                                            <legend>Thay đổi mật khẩu</legend>
                                                            <?php if (isset($_SESSION['success'])) { ?>
                                                                <div class="alert alert-success alert-dismissable">
                                                                    <a class="panel-close close" data-dismiss="alert">×</a>
                                                                    <i class="fa fa-coffee"></i>
                                                                    <?= $_SESSION['success'] ?>
                                                                </div>
                                                            <?php } ?>
                                                            <?php unset($_SESSION['success']); ?>
                                                            <div class="single-input-item">
                                                                <label for="current-pwd" class="required">Mật khẩu cũ</label>
                                                                <input type="password" name="old_pass" id="current-pwd" placeholder="Nhập mật khẩu cũ" />
                                                                <?php if (isset($_SESSION['error']['old_pass'])) { ?>
                                                                    <p class="text-danger"><?= $_SESSION['error']['old_pass'] ?></p>

                                                                <?php } ?>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="new-pwd" class="required">
                                                                            Mật khẩu mới</label>
                                                                        <input type="password" id="new_pass" name="new_pass" placeholder="Nhập mật khẩu mới" />
                                                                        <?php if (isset($_SESSION['error']['new_pass'])) { ?>
                                                                            <p class="text-danger"><?= $_SESSION['error']['new_pass'] ?></p>

                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item">
                                                                        <label for="confirm-pwd" class="required">
                                                                            Nhập lại mật khẩu</label>
                                                                        <input type="password" id="confirm_pass" name="confirm_pass" placeholder="Nhập lại mật khẩu mới" />
                                                                        <?php if (isset($_SESSION['error']['confirm_pass'])) { ?>
                                                                            <p class="text-danger"><?= $_SESSION['error']['confirm_pass'] ?></p>

                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="single-input-item">
                                                            <button type="submit" class="btn btn-sqr">Lưu thay đổi</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper end -->
</main>

<?php require_once 'views/layout/footer.php'; ?>