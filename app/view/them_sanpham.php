<!-- them_sanpham.php -->
<form action="index.php?art=themsp" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="ten_sanpham">Tên sản phẩm</label>
        <input type="text" class="form-control" id="ten_sanpham" name="ten_sanpham" required>
    </div>

    <div class="form-group">
        <label for="gia_sanpham">Giá</label>
        <input type="number" step="0.01" class="form-control" id="gia_sanpham" name="gia_sanpham" required>
    </div>

    <div class="form-group">
        <label for="gia_giam">Giá Giảm</label>
        <input type="number" step="0.01" class="form-control" id="gia_giam" name="gia_giam" required>
    </div>

    <div class="form-group">
        <label for="so_luong_ban_ra">Số Lượng Bán Ra</label>
        <input type="number" class="form-control" id="so_luong_ban_ra" name="so_luong_ban_ra" required>
    </div>

    <div class="form-group">
        <label for="ngay_nhap">Ngày Nhập</label>
        <input type="date" class="form-control" id="ngay_nhap" name="ngay_nhap" required>
    </div>

    <div class="form-group">
        <label for="id_danh_muc">Danh Mục</label>
        <select class="form-control" id="id_danh_muc" name="id_danh_muc" required>
            <!-- Example categories -->
            <option value="1">Danh mục 1</option>
            <option value="2">Danh mục 2</option>
        </select>
    </div>

    <div class="form-group">
        <label for="hinh_anh">Hình ảnh</label>
        <input type="file" class="form-control" id="hinh_anh" name="hinh_anh" required>
    </div>

    <div class="form-group">
        <label for="hinh_con2">Hình Con 2</label>
        <input type="file" class="form-control" id="hinh_con2" name="hinh_con2">
    </div>

    <div class="form-group">
        <label for="hinh_con3">Hình Con 3</label>
        <input type="file" class="form-control" id="hinh_con3" name="hinh_con3">
    </div>

    <div class="form-group">
        <label for="hinh_con4">Hình Con 4</label>
        <input type="file" class="form-control" id="hinh_con4" name="hinh_con4">
    </div>

    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
</form>
