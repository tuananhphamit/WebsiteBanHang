<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>

<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item">Sản phẩm của bạn</li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <a href="<?= BASE_URL . '?act=form-chinh-sua' ?>" class="btn btn-sqr">Quay lại</a>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Ảnh sản phẩm</th>
                                        <th class="pro-title">Tên sản phẩm</th>
                                        <th class="pro-price">Giá tiền</th>
                                        <th class="pro-quantity">Số Lượng</th>
                                        <th class="pro-subtotal">Tổng tiền</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $tongGioHang = 0;
                                    foreach ($chi_tiet_don_hang as $key => $sanPham):
                                    ?>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="<?= BASE_URL . $sanPham['hinh_anh'] ?>" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="#"><?= $sanPham['ten_san_pham'] ?></a></td>
                                            <td class="pro-title"><a href="#"><?= $sanPham['don_gia'] ?></a></td>

                                            <td class="pro-title"><a href="#"><?= $sanPham['so_luong'] ?></a></td>
                                            <td class="pro-title"><a href="#"><?= $sanPham['thanh_tien'] ?></a></td>
                                            

                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- Cart Update Option -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
</main>






<?php require_once 'layout/miniCart.php'; ?>

<?php require_once 'layout/footer.php'; ?>