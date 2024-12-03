


            <form action="" class="form-label">
              <div class="container-fluid py-4 px-4">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-header bg-light">
                                  <h4 class="mb-0">Chi tiết Tài Khoản</h4>
                              </div>
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-12 col -lg-4">
                                          <!-- Upload file ảnh -->
                                          <div class="photo-section text-center">
                                              <img id="profileImage" src="img/avatar-trang-4.jpg "alt="Profile Picture" width="200px">    
                                              <input type="file" id="uploadImage" accept="image/*" onchange="previewImage(event)">
                                              <p class="text-muted">Admin</p>
                                              <label for="uploadImage">Thay Đổi Ảnh</label>
                                          </div>
                                          <div class="d-flex justify-content-center">
                                            <a href="taikhoan.html"class="btn btn-primary me-2" >Quay lại</a>                        
                                            <a href="chinhsua_taikhoan.html" class="btn btn-primary">Sửa chi tiết</a>
                                            <a href="#" class="btn btn-danger ms-2">Xóa tài khoản</a>
                                          </div>
                                          <!--  -->
                                      </div>
                                      <div class="col-12 col -lg-8">
                                          <div class="card">
                                              <div class="card-header bg-light">
                                                  <h5 class="mb-0">Thông Tin</h5>
                                              </div>
                                              <div class="card-body">
                                                  <div class="row">
                                                      <div class="col-12 col-lg-6">
                                                          <div class="mb-3">
                                                              <label for="name" class="form-label">Họ và Tên</label>
                                                              <input type="text" class="form-control" id="name" value="Mạnh Quỳnh"/>     
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                          <div class="mb-3">
                                                              <label for="email" class="form-label">Email</label>
                                                              <input type="email" class="form-control" id="email" value="manhquynh@gmail.com"/>
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                          <div class="mb-3">
                                                              <label for="phone" class="form-label">Số Điện  Thoại</label>
                                                              <input type="text" class="form-control" id="phone" value="0323459999"/>  
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col-lg-6">
                                                          <div class="mb-3">
                                                              <label for="address" class="form-label">Địa Chỉ</label>
                                                              <input type="text" class="form-control" id="address" value="Đường Tô ký, Phường Trung Mỹ Tây, Quận 12, TP HCM" />                                                                  
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col -lg-6">
                                                          <div class="mb-3">
                                                              <label for="role" class="form-label">Vai Trò</label>
                                                              <select class="form-select" id="role">
                                                                  <option selected>Chọn vai trò</option>
                                                                  <option value="admin">Admin</option>
                                                                  <option value="user">User</option>
                                                              </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col -lg-6">
                                                          <div class="mb-3">
                                                              <label for="role" class="form-label">Trạng thái</label>
                                                              <select class="form-select" id="role" disabled>
                                                                  <option selected>Thiết lập trạng thái</option>
                                                                  <option value="0" selected>Đang Hoạt động</option>
                                                                  <option value="1">Đã tắt</option>
                                                              </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
           