<?php

class ThongKe
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function loadAll_thongke()
    {
        try {
            // Câu lệnh SQL đã được chỉnh sửa
            $sql = 'SELECT 
                        danh_mucs.id AS madm, 
                        danh_mucs.ten_danh_muc AS tendm, 
                        COUNT(san_phams.id) AS countsp, 
                        MIN(san_phams.gia_san_pham) AS minprice, 
                        MAX(san_phams.gia_san_pham) AS maxprice, 
                        AVG(san_phams.gia_san_pham) AS avgprice
                    FROM san_phams 
                    LEFT JOIN danh_mucs ON danh_mucs.id = san_phams.danh_muc_id
                    GROUP BY danh_mucs.id 
                    ORDER BY danh_mucs.id DESC';

            // Chuẩn bị câu lệnh
            $stmt = $this->conn->prepare($sql);

            // Thực thi câu lệnh đã chuẩn bị
            $stmt->execute();

            // Trả về kết quả
            return $stmt->fetchAll();
        } catch (Exception $e) {
            // Hiển thị lỗi cụ thể nếu có
            echo "Lỗi: " . $e->getMessage();
        }
    }

    public function getAllDonHang30days()
    {
        try {
            $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.ten_trang_thai
                FROM don_hangs 
                INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id
                WHERE don_hangs.ngay_dat >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Error" . $e->getMessage();
        }
    }

    public function getTop10SanPham()
    {
        try {
            $sql = 'SELECT san_phams.*, danh_mucs.ten_danh_muc
                FROM san_phams 
                INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
                ORDER BY san_phams.luot_xem DESC
                LIMIT 10';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getAllDonHangBom()
    {
        try {
            $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.ten_trang_thai
                FROM don_hangs 
                INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id
                WHERE don_hangs.trang_thai_id = :trang_thai_id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':trang_thai_id' => 11  // Lọc theo id_trang_thai
            ]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getAllDonHangHoan()
    {
        try {
            $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.ten_trang_thai
                FROM don_hangs 
                INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id
                WHERE don_hangs.trang_thai_id = :trang_thai_id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':trang_thai_id' => 10  // Lọc theo id_trang_thai
            ]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
