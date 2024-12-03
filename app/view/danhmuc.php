



        <!-- Bảng danh mục sản phẩm có nút thêm, sửa, xoá, xem, tìm kiếm -->
        <div class="container-fluid pt-4 px-4">
          <div class="row">
            <div class="col-12">
              <div class="bg-light rounded p-4">
                <div
                  class="d-flex align-items-center justify-content-between mb-4">
                  <h6 class="mb-0">Danh Mục Sản Phẩm</h6>
                  <a href="them_danhmuc.php" class="btn btn-primary">Thêm Mới</a>
                </div>
                <!-- form search -->
                <form class="d-none d-md-flex ms-4">
                    <div class="input-group">
                        <input class="form-control border-0" type="search" placeholder="Tìm kiếm danh mục"/>
                            <button class="btn">
                                <span class="input-group-text bg-transparent border-0"><i class="fa fa-search"></i></span>
                            </button>
                    </div>
                </form>
                <br />
                <!-- form search end -->
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Danh mục</th>
                                <th>Hình ảnh</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hoodies</td>
                                <td><img src="img/sanpham_1.png" alt="" style="width: 50px; height: 50px"></td>
                                <td>
                                    <a href="chitiet_sanpham.html"><button class="btn btn-info btn-sm btn-color-text">Xem</button></a>
                                    <a href="chinhsua_sanpham.html"><button class="btn btn-warning btn-sm btn-color-text">Sửa</button></a>
                                    <button class="btn btn-danger btn-sm btn-color-text">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jackets</td>
                                <td><img src="img/sanpham_3.png" alt="" style="width: 50px; height: 50px"></td>
                                <td>
                                    <a href="chitiet_sanpham.html"><button class="btn btn-info btn-sm btn-color-text">Xem</button></a>
                                    <a href="chinhsua_sanpham.html"><button class="btn btn-warning btn-sm btn-color-text">Sửa</button></a>
                                    <button class="btn btn-danger btn-sm btn-color-text">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Pants</td>
                                <td><img src="img/sanpham_2.png" alt="" style="width: 50px; height: 50px"></td>
                                <td>
                                    <a href="chitiet_sanpham.html"><button class="btn btn-info btn-sm btn-color-text">Xem</button></a>
                                    <a href="chinhsua_sanpham.html"><button class="btn btn-warning btn-sm btn-color-text">Sửa</button></a>
                                    <button class="btn btn-danger btn-sm btn-color-text">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Shorts</td>
                                <td><img src="img/sanpham_4.png" alt="" style="width: 50px; height: 50px"></td>
                                <td>
                                    <a href="chitiet_sanpham.html"><button class="btn btn-info btn-sm btn-color-text">Xem</button></a>
                                    <a href="chinhsua_sanpham.html"><button class="btn btn-warning btn-sm btn-color-text">Sửa</button></a>
                                    <button class="btn btn-danger btn-sm btn-color-text">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>T-shirts & Polo shirts</td>
                                <td><img src="img/sanpham_1.png" alt="" style="width: 50px; height: 50px"></td>
                                <td>
                                    <a href="chitiet_sanpham.html"><button class="btn btn-info btn-sm btn-color-text">Xem</button></a>
                                    <a href="chinhsua_sanpham.html"><button class="btn btn-warning btn-sm btn-color-text">Sửa</button></a>
                                    <button class="btn btn-danger btn-sm btn-color-text">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
