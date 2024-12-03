<!-- Bắt Đầu Sản Phẩm Sale -->
<?php
require_once './app/Model/HomeModel.php';
$total = new HomeModel();
$total_amount = $total->doanhthu();
?>
<div class="col-sm-6 col-xl-3">
    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-bar fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">Tổng doanh thu</p>
            <h6 class="mb-0"><?= number_format($total_amount['total'], 0); ?> VNĐ</h6>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Sản Phẩm Từng Danh Mục</h6>
            <a href="">Hiện Tất Cả</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <!-- Hiển Thị Danh Mục Và Số Lượng -->
                <?php
                require_once './app/Model/HomeModel.php';
                $danhmuc = new HomeModel();
                $danhsachdanhmuc = $danhmuc->dmvasl();
                ?>


                <thead>
                    <tr class="text-dark">
                        <th scope="col">STT</th>
                        <th scope="col">Tên Danh Mục</th>
                        <th scope="col">Số Lượng Sản Phẩm</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($danhsachdanhmuc as $item) {
                        extract($item);
                        echo '<tr>
                                <td>' . $Danhmuc . '</td>
                                <td>' . $tenDanhMuc . '</td>
                                <td>' . $demSanPham . '</td>     
                              </tr>';
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Kết Thúc Sản phẩm Sale -->



<!-- Bắt Đầu Danh Sách Đơn Hàng -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Danh sách đơn hàng</h6>
            <a href="">Xem tất cả</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <?php
                require_once './app/Model/HomeModel.php';
                $danhmuc = new HomeModel();
                $danhsachdanhmuc = $danhmuc->donhang();
                ?>

                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Ngày tạo đơn hàng</th>
                        <th scope="col">Mã hóa đơn</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($danhsachdanhmuc as $item) {
                        extract($item);
                        echo '<tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>' . $NgayDat . '</td>
                                <td>' . $ID_DH . '</td>
                                <td>' . $TenKhachHang . '</td>
                                <td>' . $TongTien . '</td>
                                <td>' . $TrangThai . '</td>
                                <td><a class="btn btn-sm btn-primary" href="index.php?art=chitiet_donhang">Chi tiết </a></td> 
                              </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Kết Thúc Danh Sách Đơn Hàng -->


<!-- Bắt Đầu sản phẩm bán chạy -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0"> Sản Phẩm Bán Chạy</h6>
            <a href="">Xem Tất Cả</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <?php
                require_once './app/Model/HomeModel.php';
                $danhmuc = new HomeModel();
                $danhsachdanhmuc = $danhmuc->sptonkho();
                ?>

                <thead>
                    <tr class="text-dark">
                        <th scope="col">STT</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Số Lượt Mua </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($danhsachdanhmuc as $item) {
                        extract($item);
                        echo '<tr>
                                <td>' . $ID_SanPham . '</td>
                                <td>' . $TenSanPham . '</td>
                                <td> <img src="./public/img/' . $HinhAnh . '" alt="" style="width: 50px; height: 50px"></td>
                                <td>' . $Soluongbanra . '</td>
                              </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Kết thúc sản phẩm bán chạy -->



<!-- Bảng số lượng sản phẩm tồn kho -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Số Lượng Sản Phẩm Tồn Kho</h6>
            <a href="">Hiện Tất Cả</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <?php
                require_once './app/Model/HomeModel.php';
                $danhmuc = new HomeModel();

                $danhsachdanhmuc = $danhmuc->sptonkho();
                ?>
                <thead>
                    <tr class="text-dark">
                        <th scope="col">STT</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Số Lượng Tồn Kho</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($danhsachdanhmuc as $item) {
                        extract($item);
                        echo '<tr>
                                <td>' . $ID_SanPham . '</td>
                                <td>' . $TenSanPham . '</td>
                                <td> <img src="./public/img/' . $HinhAnh . '" alt="" style="width: 50px; height: 50px"></td>
                                <td>' . $Soluongtonkho . '</td>     
                              </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h6 class="mb-0">Tin nhắn </h6>
                    <a href="">Xem Tất Cả</a>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle flex-shrink-0" src="./public/img/user.jpg" alt=""
                        style="width: 40px; height: 40px;">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-0">Công an tỉnh Hồ Chí Minh</h6>
                            <small>15 phút trước</small>
                        </div>
                        <span>Tin nhắn gần đây....</span>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle flex-shrink-0" src="./public/img/user.jpg" alt=""
                        style="width: 40px; height: 40px;">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-0">Công an quận 12</h6>
                            <small>15 phút trước</small>
                        </div>
                        <span>Tin nhắn gần đây...</span>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle flex-shrink-0" src="./public/img/user.jpg" alt=""
                        style="width: 40px; height: 40px;">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-0">Dĩ An</h6>
                            <small>15 phút trước</small>
                        </div>
                        <span>Tin nhắn gần đây...</span>
                    </div>
                </div>
                <div class="d-flex align-items-center pt-3">
                    <img class="rounded-circle flex-shrink-0" src="./public/img/user.jpg" alt=""
                        style="width: 40px; height: 40px;">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-0">Hóc Môn</h6>
                            <small>15 phút trước</small>
                        </div>
                        <span>Tin nhắn gần đây...</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Lịch Vạn Niên</h6>
                    <a href="">Xem Tất Cả</a>
                </div>
                <div id="calender"></div>
            </div>
        </div>
    </div>
</div>
<!-- Widgets End -->