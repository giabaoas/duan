<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <div class="d-flex justify-content-between mb-4">
            <h4 class="mb-0">Danh sách sản phẩm</h4>
            <a href="index.php?art=themsp"><button class="btn btn-info btn-sm">Thêm Sản Phẩm</button></a>
        </div>

        <!-- form search -->
        <form class="d-none d-md-flex ms-4">
            <div class="input-group">
                <input class="form-control border-0" type="search" placeholder="Tìm kiếm sản phẩm" />
                <button class="btn">
                    <span class="input-group-text bg-transparent border-0">
                        <i class="fa fa-search"></i>
                    </span>
                </button>
            </div>
        </form>
        <br />
        <!-- form search end -->
        <?php
        if (isset($kq) && count($kq) > 0) {
            $ID_SanPham = 1;
            ?>
            <div class="table-responsive">

                <table class="table table -bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Giá Giảm</th>
                            <th>Số Lượng Bán Ra</th>
                            <th>Hình ảnh</th>
                            <th>Hình Con2</th>
                            <th>Hình Con3</th>
                            <th>Hình Con4</th>
                            <th>Ngày Nhập</th>
                            <th>Danh mục</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($kq as $sp) {
                            ?>
                            <?php
                            echo '
                            <tr>
                                <td>' . $ID_SanPham . '</td>
                                <td>' . htmlspecialchars($sp['TenSanPham']) . '</td>
                                <td>' . htmlspecialchars($sp['DonGia']) . '</td>
                                <td>' . htmlspecialchars($sp['GiaGiam']) . '</td>
                                <td>' . htmlspecialchars($sp['Soluongbanra']) . '</td>
                                <td><img src="./public/img/' . htmlspecialchars($sp['HinhAnh']) . '" alt="" style="width: 50px; height: 50px"></td>
                                <td><img src="./public/img/' . htmlspecialchars($sp['hinhcon2']) . '" alt="" style="width: 50px; height: 50px"></td>
                                <td><img src="./public/img/' . htmlspecialchars($sp['hinhcon3']) . '" alt="" style="width: 50px; height: 50px"></td>
                                <td><img src="./public/img/' . htmlspecialchars($sp['hinhcon4']) . '" alt="" style="width: 50px; height: 50px"></td>
                                <td>' . htmlspecialchars($sp['NgayNhap']) . '</td>
                                <td>' . htmlspecialchars($sp['ID_DanhMuc']) . '</td>
                                <td>
                                
                                 
                                    <a href="index.php?art=updatesp&id=' . htmlspecialchars($sp['ID_SanPham']) . '"><button class="btn btn-warning btn-sm">Sửa</button></a>
                                    <a href="index.php?art=delsp&id=' . htmlspecialchars($sp['ID_SanPham']) . '"><button class="btn btn-danger btn-sm">Xóa</button></a>
                                </td>
                            </tr>';
                            $ID_SanPham++;
                        }
        } else {
            echo '<tr><td colspan="7">Không có sản phẩm nào.</td></tr>';
        }
        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>