<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/menu.php'; ?>




<main>
    <!-- hero slider area start -->
    <section class="slider-area">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider1.jpeg">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <!-- single slider item start -->
            <!-- single slider item start -->
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider2.jpg">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="assets/img/slider/slider3.jpg">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- hero slider area end -->



    <!-- service policy area start -->
    <div class="service-policy section-padding">
        <div class="container">
            <div class="row mtn-30">
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-plane"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Giao hàng</h6>
                            <p>Miễn phí giao hàng</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-help2"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Hỗ trợ</h6>
                            <p>Hỗ trựo 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-back"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Hoàn trả</h6>
                            <p>Hoàn tiền trong 30 ngày</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="policy-item">
                        <div class="policy-icon">
                            <i class="pe-7s-credit"></i>
                        </div>
                        <div class="policy-content">
                            <h6>Thanh toán</h6>
                            <p>Bảo mật thanh toán</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service policy area end -->

    <!-- banner statistics area start -->
    <div class="banner-statistics-area">
        <div class="container">
            <div class="row row-20 mtn-20">
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="assets/img/banner/bannerMini1.jpg" alt="product banner">
                        </a>
                        <div class="banner-content text-right">
                            <h5 class="banner-text1">Mua áo đội bóng</h5>
                            <h2 class="banner-text2">Chính hãng<span>Chất lượng</span></h2>
                            <a href="shop.html" class="btn btn-text">Công ty TNHH May Mặc An Thắng</a>
                        </div>
                    </figure>
                </div>
                <div class="col-sm-6">
                    <figure class="banner-statistics mt-20">
                        <a href="#">
                            <img src="assets/img/banner/bannerMini2.png" alt="product banner">
                        </a>
                        <div class="banner-content text-right">
                            <h5 class="banner-text1">Chất liệu vải thun Hàn</h5>
                            <h2 class="banner-text2">Mát mẻ<span>Hoạt động thỏa mái</span></h2>
                            <a href="shop.html" class="btn btn-text">Công ty TNHH May Mặc An Thắng</a>
                        </div>
                    </figure>
                </div>

            </div>
        </div>
    </div>
    <!-- banner statistics area end -->

    <!-- product area start -->
    <section class="product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Sản phẩm của chúng tôi</h2>
                        <p class="sub-title">Sản phẩm được cập nhật liên tục</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-container">


                        <!-- product tab content start -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                    <?php foreach ($listSanPham as $key => $sanPham): ?>
                                        <!-- product item start -->
                                        <div class="product-item">
                                            <figure class="product-thumb">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id_san_pham=' . $sanPham['id'] ?>">
                                                    <img class="pri-img" src="<?= BASE_URL . $sanPham['hinh_anh'] ?>" alt="product">
                                                    <img class="sec-img" src="<?= BASE_URL . $sanPham['hinh_anh'] ?>" alt="product">
                                                </a>
                                                <div class="product-badge">
                                                    <?php
                                                    $ngayNhap = new DateTime($sanPham['ngay_nhap']);
                                                    $ngayHienTai = new DateTime();
                                                    $tinhNgay = $ngayNhap->diff($ngayHienTai);

                                                    if ($tinhNgay->days <= 7) {
                                                    ?>
                                                        <div class="product-label new">
                                                            <span>Mới</span>
                                                        </div>
                                                    <?php  } ?>



                                                    <?php if ($sanPham['gia_khuyen_mai']) { ?>
                                                        <div class="product-label discount">
                                                            <span>Giảm giá</span>
                                                        </div>



                                                    <?php  } ?>





                                                </div>

                                                <div class="cart-hover">
                                                    <button class="btn btn-cart"><a style="color: darkgray;" href="<?= BASE_URL . '?act=chi-tiet-san-pham&id_san_pham=' . $sanPham['id'] ?>">Xem chi tiết</a></button>
                                                </div>
                                            </figure>
                                            <div class="product-caption text-center">

                                                <h6 class="product-name">
                                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id_san_pham= ' . $sanPham['id'] ?>"><?= $sanPham['ten_san_pham'] ?></a>
                                                </h6>
                                                <div class="price-box">
                                                    <?php if ($sanPham['gia_khuyen_mai']) { ?>
                                                        <span class="price-regular"><?= formatPrice($sanPham['gia_khuyen_mai']) ?></span>
                                                        <span class="price-old"><del><?= formatPrice($sanPham['gia_san_pham']) ?></del></span>
                                                    <?php } else { ?>
                                                        <span class="price-old"><?= formatPrice($sanPham['gia_san_pham']) ?></span>
                                                    <?php } ?>



                                                </div>
                                            </div>
                                        </div>
                                        <!-- product item end -->
                                    <?php endforeach ?>

                                </div>
                            </div>

                        </div>
                        <!-- product tab content end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

    <!-- product banner statistics area start -->
    <section class="product-banner-statistics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product-banner-carousel slick-row-10">
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="assets/img/banner/Banner1.jpg" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">Đơn giản</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="assets/img/banner/Banner2.jpg" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">Phong cách</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="assets/img/banner/Banner3.jpg" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">Thể thao</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="assets/img/banner/Banner4.jpg" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">Trẻ Trung</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                        <!-- banner single slide start -->
                        <div class="banner-slide-item">
                            <figure class="banner-statistics">
                                <a href="#">
                                    <img src="assets/img/banner/Banner5.jpg" alt="product banner">
                                </a>
                                <div class="banner-content banner-content_style2">
                                    <h5 class="banner-text3"><a href="#">Phong cách</a></h5>
                                </div>
                            </figure>
                        </div>
                        <!-- banner single slide start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product banner statistics area end -->

    <!-- featured product area start -->
    <section class="feature-product section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Sản Phẩm Nổi Bật</h2>
                        <p class="sub-title">Các sản phẩm dưới đây là những sản phẩm được quan tâm nhiều nhất</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
                    <?php foreach ($listSanPhamNoiBat as $key => $sanPham): ?>
                                        <!-- product item start -->
                                        <div class="product-item">
                                            <figure class="product-thumb">
                                                <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id_san_pham=' . $sanPham['id'] ?>">
                                                    <img class="pri-img" src="<?= BASE_URL . $sanPham['hinh_anh'] ?>" alt="product">
                                                    <img class="sec-img" src="<?= BASE_URL . $sanPham['hinh_anh'] ?>" alt="product">
                                                </a>
                                                <div class="product-badge">
                                                    <?php
                                                    $ngayNhap = new DateTime($sanPham['ngay_nhap']);
                                                    $ngayHienTai = new DateTime();
                                                    $tinhNgay = $ngayNhap->diff($ngayHienTai);

                                                    if ($tinhNgay->days <= 7) {
                                                    ?>
                                                        <div class="product-label new">
                                                            <span>Mới</span>
                                                        </div>
                                                    <?php  } ?>



                                                    <?php if ($sanPham['gia_khuyen_mai']) { ?>
                                                        <div class="product-label discount">
                                                            <span>Giảm giá</span>
                                                        </div>



                                                    <?php  } ?>





                                                </div>

                                                <div class="cart-hover">
                                                    <button class="btn btn-cart">Chi tiết</button>
                                                </div>
                                            </figure>
                                            <div class="product-caption text-center">

                                                <h6 class="product-name">
                                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id_san_pham= ' . $sanPham['id'] ?>"><?= $sanPham['ten_san_pham'] ?></a>
                                                </h6>
                                                <div class="price-box">
                                                    <?php if ($sanPham['gia_khuyen_mai']) { ?>
                                                        <span class="price-regular"><?= formatPrice($sanPham['gia_khuyen_mai']) ?></span>
                                                        <span class="price-old"><del><?= formatPrice($sanPham['gia_san_pham']) ?></del></span>
                                                    <?php } else { ?>
                                                        <span class="price-old"><?= formatPrice($sanPham['gia_san_pham']) ?></span>
                                                    <?php } ?>



                                                </div>
                                            </div>
                                        </div>
                                        <!-- product item end -->
                                    <?php endforeach ?>
                        

                        <!-- //////////////////////////////////////// -->

                        

                        

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured product area end -->

    <!-- testimonial area start -->
    <section class="testimonial-area section-padding bg-img" data-bg="assets/img/testimonial/testimonials-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title start -->
                    <div class="section-title text-center">
                        <h2 class="title">Những nhà sáng lập</h2>
                        <p class="sub-title">Họ nói gì</p>
                    </div>
                    <!-- section title start -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-thumb-wrapper">
                        <div class="testimonial-thumb-carousel">
                            <div class="testimonial-thumb">
                                <img src="assets/img/testimonial/duc2.jpg" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="assets/img/testimonial/duck.jpg" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="assets/img/testimonial/duck3.jpg" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-thumb">
                                <img src="assets/img/testimonial/duck.jpg" alt="testimonial-thumb">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content-wrapper">
                        <div class="testimonial-content-carousel">
                            <div class="testimonial-content">
                                <p>Trong hơn 10 năm qua, Thời trang 33BOY_shop đã không ngừng nỗ lực để mang đến những sản phẩm chất lượng và đẳng cấp. Chúng tôi luôn đặt khách hàng làm trung tâm, không ngừng sáng tạo để tạo ra các thiết kế độc đáo, giúp khách hàng thể hiện phong cách và sự tự tin. Cảm ơn quý khách hàng và đối tác đã luôn đồng hành cùng chúng tôi trong hành trình này</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <h5 class="testimonial-author">Doanh nhân: G_DUCK</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>Trong hơn 10 năm qua, Thời trang 33BOY_shop đã không ngừng nỗ lực để mang đến những sản phẩm chất lượng và đẳng cấp. Chúng tôi luôn đặt khách hàng làm trung tâm, không ngừng sáng tạo để tạo ra các thiết kế độc đáo, giúp khách hàng thể hiện phong cách và sự tự tin. Cảm ơn quý khách hàng và đối tác đã luôn đồng hành cùng chúng tôi trong hành trình này."</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <h5 class="testimonial-author">Doanh nhân: G_DUCK</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>Trong hơn 10 năm qua, Thời trang 33BOY_shop đã không ngừng nỗ lực để mang đến những sản phẩm chất lượng và đẳng cấp. Chúng tôi luôn đặt khách hàng làm trung tâm, không ngừng sáng tạo để tạo ra các thiết kế độc đáo, giúp khách hàng thể hiện phong cách và sự tự tin. Cảm ơn quý khách hàng và đối tác đã luôn đồng hành cùng chúng tôi trong hành trình này."</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <h5 class="testimonial-author">Doanh nhân: G_DUCK</h5>
                            </div>
                            <div class="testimonial-content">
                                <p>Trong hơn 10 năm qua, Thời trang 33BOY_shop đã không ngừng nỗ lực để mang đến những sản phẩm chất lượng và đẳng cấp. Chúng tôi luôn đặt khách hàng làm trung tâm, không ngừng sáng tạo để tạo ra các thiết kế độc đáo, giúp khách hàng thể hiện phong cách và sự tự tin. Cảm ơn quý khách hàng và đối tác đã luôn đồng hành cùng chúng tôi trong hành trình này."</p>
                                <div class="ratings">
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <h5 class="testimonial-author">Doanh nhân: G_DUCK</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    

  

   
</main>



<?php require_once 'layout/miniCart.php'; ?>

<?php require_once 'layout/footer.php'; ?>