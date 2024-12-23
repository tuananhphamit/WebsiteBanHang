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
                                <li class="breadcrumb-item"><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->


    <!-- Register Content Start -->
    <div class="col-lg-12">
        <div class="login-reg-form-wrap sign-up-form">
            <h5 class="text-center">Đăng ký</h5>
            <form action="<?= BASE_URL . '?act=dang-ky' ?>" method="post">
                <div class="single-input-item">
                    <input type="text" name="ho_ten" placeholder="Mời nhập tên" required />
                    <?php if (isset($_SESSION['error']['ho_ten'])) { ?>
                        <p class="text-danger"><?= $_SESSION['error']['ho_ten'] ?></p>
                        <?php unset($_SESSION['error']['ho_ten']); // Xóa thông báo sau khi hiển thị 
                        ?>
                    <?php } ?>
                </div>
                <div class="single-input-item">
                    <input type="email" name="email" placeholder="Mời nhập email" required />
                    <?php if (isset($_SESSION['error']['email'])) { ?>
                        <p class="text-danger"><?= $_SESSION['error']['email'] ?></p>
                        <?php unset($_SESSION['error']['email']); // Xóa thông báo sau khi hiển thị 
                        ?>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <input type="password" name="mat_khau" placeholder="Tạo mật khâu" required />
                            <?php if (isset($_SESSION['error']['mat_khau'])) { ?>
                                <p class="text-danger"><?= $_SESSION['error']['mat_khau'] ?></p>
                                <?php unset($_SESSION['error']['mat_khau']); // Xóa thông báo sau khi hiển thị 
                                ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <input type="password" name="mat_khau_confirm" placeholder="Nhập lại mật khẩu" required />
                            <?php if (isset($_SESSION['error']['mat_khau_confirm'])) { ?>
                                <p class="text-danger"><?= $_SESSION['error']['mat_khau_confirm'] ?></p>
                                <?php unset($_SESSION['error']['mat_khau_confirm']); // Xóa thông báo sau khi hiển thị 
                                ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="single-input-item">
                    <div class="login-reg-form-meta">
                        <div class="remember-meta">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="subnewsletter">
                                <label class="custom-control-label" for="subnewsletter">Subscribe
                                    Our Newsletter</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-input-item">
                    <button type="submit" class="btn btn-sqr text-center">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Register Content End -->

</main>



<!-- offcanvas mini cart start -->
<div class="offcanvas-minicart-wrapper">
    <div class="minicart-inner">
        <div class="offcanvas-overlay"></div>
        <div class="minicart-inner-content">
            <div class="minicart-close">
                <i class="pe-7s-close"></i>
            </div>
            <div class="minicart-content-box">
                <div class="minicart-item-wrapper">
                    <ul>
                        <li class="minicart-item">
                            <div class="minicart-thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/cart/cart-1.jpg" alt="product">
                                </a>
                            </div>
                            <div class="minicart-content">
                                <h3 class="product-name">
                                    <a href="product-details.html">Dozen White Botanical Linen Dinner Napkins</a>
                                </h3>
                                <p>
                                    <span class="cart-quantity">1 <strong>&times;</strong></span>
                                    <span class="cart-price">$100.00</span>
                                </p>
                            </div>
                            <button class="minicart-remove"><i class="pe-7s-close"></i></button>
                        </li>
                        <li class="minicart-item">
                            <div class="minicart-thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/cart/cart-2.jpg" alt="product">
                                </a>
                            </div>
                            <div class="minicart-content">
                                <h3 class="product-name">
                                    <a href="product-details.html">Dozen White Botanical Linen Dinner Napkins</a>
                                </h3>
                                <p>
                                    <span class="cart-quantity">1 <strong>&times;</strong></span>
                                    <span class="cart-price">$80.00</span>
                                </p>
                            </div>
                            <button class="minicart-remove"><i class="pe-7s-close"></i></button>
                        </li>
                    </ul>
                </div>

                <div class="minicart-pricing-box">
                    <ul>
                        <li>
                            <span>sub-total</span>
                            <span><strong>$300.00</strong></span>
                        </li>
                        <li>
                            <span>Eco Tax (-2.00)</span>
                            <span><strong>$10.00</strong></span>
                        </li>
                        <li>
                            <span>VAT (20%)</span>
                            <span><strong>$60.00</strong></span>
                        </li>
                        <li class="total">
                            <span>total</span>
                            <span><strong>$370.00</strong></span>
                        </li>
                    </ul>
                </div>

                <div class="minicart-button">
                    <a href="cart.html"><i class="fa fa-shopping-cart"></i> View Cart</a>
                    <a href="cart.html"><i class="fa fa-share"></i> Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offcanvas mini cart end -->

<?php require_once 'views/layout/footer.php'; ?>