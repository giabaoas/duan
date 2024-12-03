<?php
function getall_sp() {
    include_once './app/model/ProductModel.php';
    $conn = new ConnectModel();
    $conn->connectdb(); 
    if ($conn === null) {
        die("Không thể kết nối cơ sở dữ liệu."); // Ngắt khi không kết nối được
    }

    $stmt = $conn->prepare("SELECT * FROM sanpham"); // Lấy tất cả sản phẩm
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về danh sách sản phẩm
}

function delsp($id) {
    include_once './app/model/ProductModel.php';
    $conn = new ConnectModel();
    $conn->connectdb(); 
    if ($conn) {
        try {
            // SQL để xóa sản phẩm theo ID
            $stmt = $conn->prepare("DELETE FROM sanpham WHERE ID_SanPham = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            echo "Sản phẩm đã được xóa thành công.";
        } catch (PDOException $e) {
            echo "Lỗi khi xóa sản phẩm: " . $e->getMessage();
        }
    }
}
function themsp($ten_sanpham, $gia_sanpham, $gia_giam, $so_luong_ban_ra, $hinh_anh, $hinh_con2, $hinh_con3, $hinh_con4, $ngay_nhap, $id_danh_muc) {
    include_once './app/model/ProductModel.php';
    $conn = new ConnectModel();
    $conn->connectdb(); 
    if ($conn) {
        // Validate input data (this is just an example, you can add more validation as needed)
        if (empty($ten_sanpham) || !is_numeric($gia_sanpham) || !is_numeric($gia_giam) || !is_numeric($so_luong_ban_ra) || empty($ngay_nhap) || !is_numeric($id_danh_muc)) {
            echo "Dữ liệu không hợp lệ.";
            return;
        }

        try {
            // Prepare the query to insert the new product into the database
            $stmt = $conn->prepare("INSERT INTO sanpham (TenSanPham, DonGia, GiaGiam, SoLuongBanRa, HinhAnh, hinhcon2, hinhcon3, hinhcon4, NgayNhap, ID_DanhMuc) 
                                    VALUES (:ten_sanpham, :gia_sanpham, :gia_giam, :so_luong_ban_ra, :hinh_anh, :hinh_con2, :hinh_con3, :hinh_con4, :ngay_nhap, :id_danh_muc)");

            // Bind parameters
            $stmt->bindParam(':ten_sanpham', $ten_sanpham);
            $stmt->bindParam(':gia_sanpham', $gia_sanpham);
            $stmt->bindParam(':gia_giam', $gia_giam);
            $stmt->bindParam(':so_luong_ban_ra', $so_luong_ban_ra);
            $stmt->bindParam(':hinh_anh', $hinh_anh);
            $stmt->bindParam(':hinh_con2', $hinh_con2);
            $stmt->bindParam(':hinh_con3', $hinh_con3);
            $stmt->bindParam(':hinh_con4', $hinh_con4);
            $stmt->bindParam(':ngay_nhap', $ngay_nhap);
            $stmt->bindParam(':id_danh_muc', $id_danh_muc);

            // Handle file uploads (if provided)
            if (isset($_FILES['hinh_anh']) && $_FILES['hinh_anh']['error'] == 0) {
                $hinh_anh = 'uploads/' . basename($_FILES['hinh_anh']['name']);
                move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $hinh_anh);
            } else {
                $hinh_anh = NULL;
            }

            if (isset($_FILES['hinh_con2']) && $_FILES['hinh_con2']['error'] == 0) {
                $hinh_con2 = 'uploads/' . basename($_FILES['hinh_con2']['name']);
                move_uploaded_file($_FILES['hinh_con2']['tmp_name'], $hinh_con2);
            } else {
                $hinh_con2 = NULL;
            }

            if (isset($_FILES['hinh_con3']) && $_FILES['hinh_con3']['error'] == 0) {
                $hinh_con3 = 'uploads/' . basename($_FILES['hinh_con3']['name']);
                move_uploaded_file($_FILES['hinh_con3']['tmp_name'], $hinh_con3);
            } else {
                $hinh_con3 = NULL;
            }

            if (isset($_FILES['hinh_con4']) && $_FILES['hinh_con4']['error'] == 0) {
                $hinh_con4 = 'uploads/' . basename($_FILES['hinh_con4']['name']);
                move_uploaded_file($_FILES['hinh_con4']['tmp_name'], $hinh_con4);
            } else {
                $hinh_con4 = NULL;
            }

            // Execute the query to insert data
            $stmt->execute();
            echo "Thêm sản phẩm thành công!";
        } catch (Exception $e) {
            // Catch any exceptions and print the error message
            echo "Lỗi: " . $e->getMessage();
        }
    }
}


function capnhat_sp($id, $ten_sanpham, $gia_sanpham, $gia_giam, $so_luong_ban_ra, $hinh_anh, $hinh_con2, $hinh_con3, $hinh_con4, $ngay_nhap, $id_danh_muc) {
    include_once './app/model/ProductModel.php';
    $conn = new ConnectModel();
    $conn->connectdb(); 
    if ($conn) {
        try {
            $stmt = $conn->prepare("UPDATE sanpham SET TenSanPham = :ten_sanpham, DonGia = :gia_sanpham, GiaGiam = :gia_giam, SoLuongBanRa = :so_luong_ban_ra, HinhAnh = :hinh_anh, hinhcon2 = :hinh_con2, hinhcon3 = :hinh_con3, hinhcon4 = :hinh_con4, NgayNhap = :ngay_nhap, ID_DanhMuc = :id_danh_muc WHERE ID_SanPham = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':ten_sanpham', $ten_sanpham);
            $stmt->bindParam(':gia_sanpham', $gia_sanpham);
            $stmt->bindParam(':gia_giam', $gia_giam);
            $stmt->bindParam(':so_luong_ban_ra', $so_luong_ban_ra);
            $stmt->bindParam(':hinh_anh', $hinh_anh);
            $stmt->bindParam(':hinh_con2', $hinh_con2);
            $stmt->bindParam(':hinh_con3', $hinh_con3);
            $stmt->bindParam(':hinh_con4', $hinh_con4);
            $stmt->bindParam(':ngay_nhap', $ngay_nhap);
            $stmt->bindParam(':id_danh_muc', $id_danh_muc);
            $stmt->execute();
            echo "Cập nhật sản phẩm thành công!";
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
function get_sp_by_id($id) {
    include_once './app/model/ProductModel.php';
    $conn = new ConnectModel();
    $conn->connectdb(); 
    if ($conn) {
        try {
            // Prepare the query to fetch the product by ID
            $stmt = $conn->prepare("SELECT * FROM sanpham WHERE ID_SanPham = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $product = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch the product as an associative array
            return $product;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // Handle error
        }
    }
    return null; // Return null if no product is found
}
