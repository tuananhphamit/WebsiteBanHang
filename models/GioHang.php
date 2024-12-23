<?php
class GioHang
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getGioHangFromUser($id)
    {
        try {
            $sql = 'SELECT * FROM gio_hangs WHERE tai_khoan_id = :tai_khoan_id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':tai_khoan_id' => $id]);

            return $stmt->fetch();
        } catch (Exception $e) {
            echo "Error" . $e->getMessage();
        }
    }
    public function getDetailGioHang($id)
    {
        try {
            $sql = 'SELECT chi_tiet_gio_hangs.* , san_phams.ten_san_pham, san_phams.hinh_anh ,san_phams.gia_san_pham , san_phams.gia_khuyen_mai
            FROM chi_tiet_gio_hangs
            INNER JOIN san_phams ON chi_tiet_gio_hangs.san_pham_id = san_phams.id
            WHERE chi_tiet_gio_hangs.gio_hang_id = :gio_hang_id
            ';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':gio_hang_id' => $id]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Error" . $e->getMessage();
        }
    }

    public function addGioHang($id)
    {
        try {
            $sql = 'INSERT INTO gio_hangs (tai_khoan_id) VALUE (:id)';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $this->conn->lastInsertId();
        } catch (Exception $e) {
            echo "Error" . $e->getMessage();
        }
    }

    public function updateSoLuong($gio_hang_id, $san_pham_id, $so_luong)
    {
        try {
            $sql = 'UPDATE chi_tiet_gio_hangs 
            SET so_luong = :so_luong
            WHERE gio_hang_id = :gio_hang_id AND san_pham_id = :san_pham_id
            ';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':gio_hang_id' => $gio_hang_id,
                ':san_pham_id' => $san_pham_id,
                ':so_luong' => $so_luong
            ]);

            return true;
        } catch (Exception $e) {
            echo "Error" . $e->getMessage();
        }
    }


    public function addDetailGioHang($gio_hang_id, $san_pham_id, $so_luong)
    {
        try {
            $sql = 'INSERT INTO chi_tiet_gio_hangs (gio_hang_id, san_pham_id, so_luong) 
            VALUE (:gio_hang_id, :san_pham_id, :so_luong)';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':gio_hang_id' => $gio_hang_id,
                ':san_pham_id' => $san_pham_id,
                ':so_luong' => $so_luong
            ]);

            return true;
        } catch (Exception $e) {
            echo "Error" . $e->getMessage();
        }
    }

    public function deleteSanPhamGioHang($id)
    {
        try {
            $sql = 'DELETE FROM chi_tiet_gio_hangs WHERE id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':id' => $id
            ]);

            return true; // Xóa thành công
        } catch (Exception $e) {
            // Ghi lỗi ra màn hình hoặc log file
            echo "Error: " . $e->getMessage();
            return false; // Thất bại
        }
    }

    public function xoaGioHang($tai_khoan_id)
    {
        try {

            $sql = 'DELETE FROM gio_hangs WHERE tai_khoan_id = :tai_khoan_id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':tai_khoan_id' => $tai_khoan_id
            ]);

            return true;
        } catch (Exception $e) {

            echo "Error: " . $e->getMessage();
            return false;
        }
    }



    public function getGioHangByTaiKhoanId($tai_khoan_id)
    {
        try {
            $sql = 'SELECT chi_tiet_gio_hangs.*, san_phams.ten_san_pham, san_phams.hinh_anh, san_phams.gia_san_pham, san_phams.gia_khuyen_mai
                FROM chi_tiet_gio_hangs
                INNER JOIN san_phams ON chi_tiet_gio_hangs.san_pham_id = san_phams.id
                INNER JOIN gio_hangs ON chi_tiet_gio_hangs.gio_hang_id = gio_hangs.id
                WHERE gio_hangs.tai_khoan_id = :tai_khoan_id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':tai_khoan_id' => $tai_khoan_id]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function xoaChiTietGioHang($tai_khoan_id)
    {
        try {
            // Câu lệnh SQL để xóa tất cả chi tiết giỏ hàng của tài khoản
            $sql = 'DELETE FROM chi_tiet_gio_hangs WHERE gio_hang_id IN (
                    SELECT id FROM gio_hangs WHERE tai_khoan_id = :tai_khoan_id
                )';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':tai_khoan_id' => $tai_khoan_id]);

            return true; // Trả về true nếu xóa thành công
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false; // Trả về false nếu có lỗi xảy ra
        }
    }
}