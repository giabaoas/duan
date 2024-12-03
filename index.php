<?php
session_start();
ob_start();

include_once './app/view/header.php';



// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Nếu chưa đăng nhập, chuyển hướng tới trang đăng nhập
    header("Location: app/view/signin.php");
    exit();
}











include_once "./app/model/conectModel.php"; // Include database connection functions
include_once "./app/model/ProductModel.php"; // Include product handling functions

// Check if the 'art' parameter is set in the URL
if (isset($_GET['art'])) {
    $art = htmlspecialchars($_GET['art']); // Secure the 'art' parameter from the URL
    switch ($art) {

        case 'main':
            include_once './app/view/main.php';
            break;

        case 'sanpham':
            $kq = getall_sp(); // Get the list of products from the database
            if (file_exists("./app/view/sanphamview.php")) {
                include_once "./app/view/sanphamview.php"; // Show the product list view
            } else {
                echo 'test';
            }
            break;

        case 'delsp':
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']); // Get the product ID from the URL
                delsp($id); // Call the function to delete the product
            }

            $kq = getall_sp(); // Get the list of products after deletion
            if (file_exists("./view/sanphamview.php")) {
                include_once "./view/sanphamview.php"; // Show the updated product list
            } else {
                die("File view/sanphamview.php not found.");
            }
            break;

        case 'themsp':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Collect form data and sanitize input
                $ten_sanpham = htmlspecialchars($_POST['ten_sanpham']);
                $gia_sanpham = floatval($_POST['gia_sanpham']);
                $gia_giam = floatval($_POST['gia_giam']);
                $so_luong_ban_ra = intval($_POST['so_luong_ban_ra']);
                $ngay_nhap = htmlspecialchars($_POST['ngay_nhap']);
                $id_danh_muc = intval($_POST['id_danh_muc']);

                // Handle file uploads
                $hinh_anh = $_FILES['hinh_anh']['name'] ? 'uploads/' . basename($_FILES['hinh_anh']['name']) : null;
                $hinh_con2 = $_FILES['hinh_con2']['name'] ? 'uploads/' . basename($_FILES['hinh_con2']['name']) : null;
                $hinh_con3 = $_FILES['hinh_con3']['name'] ? 'uploads/' . basename($_FILES['hinh_con3']['name']) : null;
                $hinh_con4 = $_FILES['hinh_con4']['name'] ? 'uploads/' . basename($_FILES['hinh_con4']['name']) : null;

                // Validate and move files
                if ($hinh_anh)
                    move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $hinh_anh);
                if ($hinh_con2)
                    move_uploaded_file($_FILES['hinh_con2']['tmp_name'], $hinh_con2);
                if ($hinh_con3)
                    move_uploaded_file($_FILES['hinh_con3']['tmp_name'], $hinh_con3);
                if ($hinh_con4)
                    move_uploaded_file($_FILES['hinh_con4']['tmp_name'], $hinh_con4);

                // Insert product into the database
                themsp($ten_sanpham, $gia_sanpham, $gia_giam, $so_luong_ban_ra, $hinh_anh, $hinh_con2, $hinh_con3, $hinh_con4, $ngay_nhap, $id_danh_muc);

                // Redirect to the product list page
                header("Location: index.php?art=sanpham");
                exit();
            } else {
                // Show the product add form
                include_once "./app/view/them_sanpham.php"; // Ensure this form exists
            }
            break;

        case 'updatesp':
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['id'])) {
                $id = $_GET['id'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $gia_sanpham = $_POST['gia_sanpham'];
                $gia_giam = $_POST['gia_giam'];
                $so_luong_ban_ra = $_POST['so_luong_ban_ra'];
                $hinh_anh = $_FILES['hinh_anh']['name'] ? 'uploads/' . basename($_FILES['hinh_anh']['name']) : null;
                $hinh_con2 = $_FILES['hinh_con2']['name'] ? 'uploads/' . basename($_FILES['hinh_con2']['name']) : null;
                $hinh_con3 = $_FILES['hinh_con3']['name'] ? 'uploads/' . basename($_FILES['hinh_con3']['name']) : null;
                $hinh_con4 = $_FILES['hinh_con4']['name'] ? 'uploads/' . basename($_FILES['hinh_con4']['name']) : null;
                $ngay_nhap = $_POST['ngay_nhap'];
                $id_danh_muc = $_POST['id_danh_muc'];

                // Upload images
                move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $hinh_anh);
                move_uploaded_file($_FILES['hinh_con2']['tmp_name'], $hinh_con2);
                move_uploaded_file($_FILES['hinh_con3']['tmp_name'], $hinh_con3);
                move_uploaded_file($_FILES['hinh_con4']['tmp_name'], $hinh_con4);

                capnhat_sp($id, $ten_sanpham, $gia_sanpham, $gia_giam, $so_luong_ban_ra, $hinh_anh, $hinh_con2, $hinh_con3, $hinh_con4, $ngay_nhap, $id_danh_muc);
                header("Location: index.php?art=sanpham"); // Redirect to the product list after updating
                exit();
            }
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sp = get_sp_by_id($id); // Fetch product by ID
                if ($sp) {
                    include_once "./view/chinhsua_sanpham.php"; // Show the product editing form
                } else {
                    echo "Sản phẩm không tồn tại."; // Handle case where product doesn't exist
                }
            }
            break;

        case 'danhmuc':
            include_once './app/view/danhmuc.php';
            break;

        case 'chitiet_donhang':
            include_once './app/view/chitiet_donhang.php';
            break;

        case 'taikhoan':
            include_once './app/view/taikhoan.php'; // Added 'taikhoan' case
            break;

        default:
            include_once "./app/view/main.php";
            break;
    }
} else {
    include_once './app/view/main.php';
}

include_once './app/view/footer.php';
?>
