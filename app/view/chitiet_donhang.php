
            <!-- Bắt đầu xem danh sách sản phẩm -->

            <div class="container-fluid px-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <a href="donhang.html" class="nav nav-link">Quay lại</a>
                            <h4 class="card-title text-center text-primary fw-bold mb-4 mt-2">
                                Chi Tiết Đơn Hàng
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">STT</th>
                                            <th class="text-center">Tên Sản Phẩm</th>
                                            <th class="text-center">Hình Ảnh</th>
                                            <th class="text-center">Số Lượng</th>
                                            <th class="text-center">Giá</th>
                                            <th class="text-center">Thành Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--  -->
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Shenron Hoodie</td>
                                            <td class="text-center">
                                                <img src="img/sanpham_1.png" alt="" width="50px" height="50" />
                                            </td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">675.000</td>
                                            <td class="text-center">1.350.000</td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">Frayed Logos Denim Jacket - Blue Wash</td>
                                            <td class="text-center">
                                                <img src="img/sanpham_2.png" alt="" width="50px" height="50" />
                                            </td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">801.000</td>
                                            <td class="text-center">2.403.000</td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">DirtyCoins Comfy Essential Jeans - Moss Blue</td>
                                            <td class="text-center">
                                                <img src="img/sanpham_3.png" alt="" width="50px" height="50" />
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">711.000</td>
                                            <td class="text-center">711.000</td>
                                        </tr>
                                        <!--  -->
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">Denim Shorts Frayed Logo - Blue Wash</td>
                                            <td class="text-center">
                                                <img src="img/sanpham_4.png" alt="" width="50px" height="50" />
                                            </td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">675.000</td>
                                            <td class="text-center">1.350.000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">Áo Thun Football Jersey</td>
                                            <td class="text-center">
                                                <img src="img/sanpham_5.png" alt="" width="50px" height="50" />
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">550.000</td>
                                            <td class="text-center">550.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12 col -md-6">
                                    <div class="card card-body">
                                        <h4 class="card-title text-center text-primary fw-bold mb-4 mt-2">
                                            Thông Tin Khách Hàng
                                        </h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tên Khách Hàng</th>
                                                        <th class="text-center">Email</th>
                                                        <th class="text-center">Số Điện Thoại</th>
                                                        <th class="text-center">Địa Chỉ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">Manh Quynh</td>
                                                        <td class="text-center">manhquynh@gmail.com</td>
                                                        <td class="text-center">0123456789</td>
                                                        <td class="text-center">
                                                        Tô Ký, trung Mỹ Tây, Q12, TP HCM
                                                        </td>
                                                    </tr>
                                                    <!-- thêm sản phẩm vào đơn hàng -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col -md-6">
                                    <div class="card card-body">
                                        <h4 class="card-title text-center text-primary fw-bold mb-4 mt-2">
                                            Thông Tin Đơn Hàng
                                        </h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Mã Đơn Hàng</th>
                                                        <th class="text-center">Ngày Đặt</th>
                                                        <th class="text-center">Trạng Thái</th>
                                                        <th class="text-center">Ghi Chú</th>
                                                        <th class="text-center">Mã Giảm Giá</th>
                                                        <th class="text-center">Thành Tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">08-11-2024</td>
                                                        <td class="text-center">
                                                            <section>
                                                                <select id="order-status" class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option value="0">Chờ Xác Nhận</option>
                                                                    <option value="1">Đã Xác Nhận</option>
                                                                    <option value="2">Đang Giao</option>
                                                                    <option value="3">Đã Giao</option>
                                                                    <option value="4">Đã Huỷ</option>
                                                                </select>
                                                            </section>
                                                        </td>
                                                        <td class="text-center">Giao tận nơi</td>
                                                        <td class="text-center">TAFSSALE1111</td>
                                                        <td class="text-center">400.000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <hr />
                            <button id="export-button" class="btn btn-primary" disabled style="background-color: #ccc">
                                <a href="" class="btn btn-primary"
                                    style="width: 100%; background-color: #ccc; border: none;"
                                    id="in-export-button">Xuất hoá đơn</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kết thúc Xem danh sách sản phẩm -->
            