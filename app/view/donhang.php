

            <!-- Bắt đầu danh sách đơn hàng -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="mb-0">Danh Sách Đơn Hàng</h2>
                    </div>
                    <!-- form search -->
                    <form class="d-none d-md-flex ms-4">
                        <div class="input-group">
                            <input class="form-control border-0" type="search" placeholder="Tìm kiếm đơn hàng" />
                            <button class="btn">
                                <span class="input-group-text bg-transparent border-0">
                                    <i class="fa fa-search"></i>
                                </span>
                            </button>
                        </div>
                    </form>
                    <br />
                    <!-- form search end -->
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên Khách Hàng</th>
                                    <th scope="col">Tổng Tiền</th>
                                    <th scope="col">Ngày Đặt</th>
                                    <th scope="col">Trạng Thái</th>
                                    <th scope="col">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cô gái đáng iuu</td>
                                    <td>400.000đ</td>
                                    <td>18-11-2024</td>
                                    <td>Đã Giao</td>
                                    <td><a href="chitiet_donhang.html"><button class="btn btn-sm btn-primary">Xem Chi Tiết</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Chàng trai zui ze</td>
                                    <td>600,000đ</td>
                                    <td>18-11-2024</td>
                                    <td>Đã Giao</td>
                                    <td><a href="chitiet_donhang.html"><button class="btn btn-sm btn-primary">Xem Chi Tiết</button></a></td>
                                </tr>
                                <!-- Thêm thông tin đơn hàng-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Kết thúc phần danh sách đơn hàng-->

            <!-- Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <!-- <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div> -->
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Đánh Giá Của Khách Hàng</h6>
                            <div class="owl-carousel testimonial-carousel">
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="img/testimonial-1.jpg"
                                        style="width: 100px; height: 100px;">
                                    <h5 class="mb-1">Cô gái đáng iuu</h5>
                                    <p> <i class="fas fa-star" style="color: #FAB302;"></i>
                                        <i class="fas fa-star" style="color: #FAB302;"></i>
                                        <i class="fas fa-star" style="color: #FAB302;"></i>
                                        <i class="fas fa-star" style="color: #FAB302;"></i>
                                        <i class="fas fa-star-half-alt" style="color: #FAB302;"></i></p>
                                    <p class="mb-0">Tôi đã mua hàng từ website shop thời trang và tôi rất hài lòng với trải nghiệm của mình. 
                                        Trang website có giao diện đẹp mắt, dễ sử dụng và tìm kiếm sản phẩm.</p>
                                </div>
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="img/testimonial-2.jpg"
                                        style="width: 100px; height: 100px;">
                                    <h5 class="mb-1">Chàng trai zui ze</h5>
                                    <p> <i class="fas fa-star" style="color: #FAB302;"></i>
                                        <i class="fas fa-star" style="color: #FAB302;"></i>
                                        <i class="fas fa-star" style="color: #FAB302;"></i>
                                        <i class="fas fa-star" style="color: #FAB302;"></i>
                                        <i class="fas fa-star" style="color: #FAB302;"></i></p>
                                    <p class="mb-0">Sản phẩm không chỉ xứng đáng với số tiền bạn bỏ ra mà còn vượt qua cả mong đợi. 
                                        Bạn sẵn lòng giới thiệu món đồ này cho bạn bè, vì nó không chỉ là một sản phẩm thời trang, 
                                        mà còn là một trải nghiệm mua sắm tuyệt vời.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31348.217679290843!2d106.60453607534566!3d10.847447642937087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b6c59ba4c97%3A0x535e784068f1558b!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1731181852540!5m2!1svi!2s" 
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">TAFs</a>
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>