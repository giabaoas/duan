<?php
class HomeModel
{
    private $db;

    public function dmvasl()
    {
        include_once './app/Model/conectModel.php';
        $data = new ConnectModel;
        $sql = "SELECT 
                    c.ID_DanhMuc as Danhmuc,
                    c.TenDanhMuc as tenDanhMuc,
                    COUNT(p.ID_DanhMuc) as demSanPham
                FROM danhmucsanpham c
                LEFT JOIN sanpham p ON c.ID_DanhMuc = p.ID_DanhMuc
                GROUP BY c.ID_DanhMuc, c.TenDanhMuc";

        return $data->selectall($sql);
    }
    public function sptonkho()
    {
        include_once './app/Model/conectModel.php';
        $data = new ConnectModel;
        $sql = "SELECT * FROM sanpham";
        return $data->selectall($sql);
    }
    public function doanhthu()
    {
        include_once './app/Model/conectModel.php';
        $data = new ConnectModel;
        $sql = "SELECT SUM(TongTien) AS total FROM donhang";
        return $data->getOne($sql);
    }
    public function donhang()
    {
        include_once './app/Model/conectModel.php';
        $data = new ConnectModel;
        $sql = "SELECT * FROM donhang";
        return $data->selectall($sql);
    }

   

    
}
?>