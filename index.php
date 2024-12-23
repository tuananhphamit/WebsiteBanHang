<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();


// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';

// Require toàn bộ file Models
require_once './models/Student.php';
require_once './models/DanhMuc.php';
require_once './models/SanPham.php';
require_once './models/TaiKhoan.php';
require_once './models/BinhLuan.php';
require_once './models/GioHang.php';
require_once './models/DonHang.php';

// Route
$act = $_GET['act'] ?? '/';

// if($_GET['act']){
//     $act = $_GET['act'];
// }else{
//     $act='/';
// }

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    //route
    '/' => (new HomeController())->home(),


    //sanpham
    'all-san-pham' => (new HomeController())->allSanPham(),
    'san-pham-trong-danh-muc' => (new HomeController())->danhSachSanPhamTheoDanhMuc(),
    'chi-tiet-san-pham' => (new HomeController())->chiTietSanPham(),


    //authen
    'login' => (new HomeController())->formLogin(),
    'logout' => (new HomeController())->logout(),
    'check-login' => (new HomeController())->postLogin(),
    'register' => (new HomeController())->formRegister(),
    'dang-ky' => (new HomeController())->postRegister(),

    //chinh-sua-thong-tin-nguoi-dung
    'form-chinh-sua' => (new HomeController())->formUser(),
    'thay-doi-thong-tin-tai-khoan' => (new HomeController())->postUser(),
    'sua-mat-khau-ca-nhan' => (new HomeController())->postEditMatKhauCaNhan(),
    //binhluan
    'dang-binh-luan' => (new HomeController())->postBinhLuan(),

    //giỏ hàng
    'them-gio-hang' => (new HomeController())->addGioHang(),
    'gio-hang' => (new HomeController())->gioHang(),

    'thanh-toan' => (new HomeController())->thanhToan(),
    'xu-ly-thanh-toan' => (new HomeController())->postThanhToan(),

    'xoa-san-pham-gio-hang' => (new HomeController())->deleteSpGioHang(),

    'chi-tiet-don-hang-user' => (new HomeController())->show(),
    'huy-don' => (new HomeController())->huyDon(),
    'hoan-don' => (new HomeController())->hoanDon(),
    
};
