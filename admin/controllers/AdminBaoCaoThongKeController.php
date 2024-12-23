<?php 

class AdminBaoCaoThongKeController{

    public $modelThongKe;
    public $modelTaiKhoan;

    public function __construct()
    {
        $this->modelThongKe = new ThongKe();
        $this->modelTaiKhoan = new AdminTaiKhoan();
       

    }

   
    public function home(){
        $listDonHang30days = $this->modelThongKe->getAllDonHang30days();
        $listKhachHang = $this->modelTaiKhoan->getAllTaiKhoan(2);
        $list10top = $this->modelThongKe->getTop10SanPham();
        $listDonBom = $this->modelThongKe->getAllDonHangBom();
        $listDonHoan = $this->modelThongKe->getAllDonHangHoan();
        $listThongKe = $this->modelThongKe->loadAll_thongke();


        require_once './views/home.php';
    }

    public function top10sanpham(){
        $list10top = $this->modelThongKe->getTop10SanPham();
        require_once './views/thongke/top10sp.php';
    }

    public function donHangMoi(){
        $listDonHang30days = $this->modelThongKe->getAllDonHang30days();
        require_once './views/thongke/donHangMoi.php';
    }
    

    public function donBom(){
        $listDonBom = $this->modelThongKe->getAllDonHangBom();
        require_once './views/thongke/donBom.php';
    }

    public function donHoan(){
        $listDonHoan = $this->modelThongKe->getAllDonHangHoan();
        require_once './views/thongke/donHoan.php';
    }

    
    

}