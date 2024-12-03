<!-- Form Cập Nhật Sản Phẩm -->
<form action="index.php?art=updatesp&id=<?php echo $sp['ID_SanPham']; ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="ten_sanpham">Tên sản phẩm:</label>
        <input type="text" class="form-control" id="ten_sanpham" name="ten_sanpham" value="<?php echo htmlspecialchars($sp['TenSanPham']); ?>" required>
    </div>
    <div class="form-group">
        <label for="gia_sanpham">Giá sản phẩm:</label>
        <input type="number" class="form-control" id="gia_sanpham" name="gia_sanpham" value="<?php echo htmlspecialchars($sp['DonGia']); ?>" required>
    </div>
    <div class="form-group">
        <label for="gia_giam">Giá giảm:</label>
        <input type="number" class="form-control" id="gia_giam" name="gia_giam" value="<?php echo htmlspecialchars($sp['GiaGiam']); ?>">
    </div>
    <div class="form-group">
        <label for="so_luong_ban_ra">Số lượng bán ra:</label>
        <input type="number" class="form-control" id="so_luong_ban_ra" name="so_luong_ban_ra" value="<?php echo htmlspecialchars($sp['Soluongbanra']); ?>" required>
    </div>
    <div class="form-group">
        <label for="hinh_anh">Hình ảnh chính:</label>
        <input type="file" class="form-control" id="hinh_anh" name="hinh_anh">
        <img src="img/<?php echo htmlspecialchars($sp['HinhAnh']); ?>" style="width: 100px; height: 100px;" alt="Hình ảnh cũ">
    </div>
    <div class="form-group">
        <label for="hinh_con2">Hình ảnh con 2:</label>
        <input type="file" class="form-control" id="hinh_con2" name="hinh_con2">
        <img src="img/<?php echo htmlspecialchars($sp['hinhcon2']); ?>" style="width: 100px; height: 100px;" alt="Hình ảnh con 2">
    </div>
    <div class="form-group">
        <label for="hinh_con3">Hình ảnh con 3:</label>
        <input type="file" class="form-control" id="hinh_con3" name="hinh_con3">
        <img src="img/<?php echo htmlspecialchars($sp['hinhcon3']); ?>" style="width: 100px; height: 100px;" alt="Hình ảnh con 3">
    </div>
    <div class="form-group">
        <label for="hinh_con4">Hình ảnh con 4:</label>
        <input type="file" class="form-control" id="hinh_con4" name="hinh_con4">
        <img src="img/<?php echo htmlspecialchars($sp['hinhcon4']); ?>" style="width: 100px; height: 100px;" alt="Hình ảnh con 4">
    </div>
    <div class="form-group">
        <label for="ngay_nhap">Ngày nhập:</label>
        <input type="date" class="form-control" id="ngay_nhap" name="ngay_nhap" value="<?php echo htmlspecialchars($sp['NgayNhap']); ?>" required>
    </div>
    <div class="form-group">
        <label for="id_danh_muc">Danh mục:</label>
        <select class="form-control" id="id_danh_muc" name="id_danh_muc" required>
            <option value="1" <?php echo $sp['ID_DanhMuc'] == 1 ? 'selected' : ''; ?>>Danh mục 1</option>
            <option value="2" <?php echo $sp['ID_DanhMuc'] == 2 ? 'selected' : ''; ?>>Danh mục 2</option>
            <option value="3" <?php echo $sp['ID_DanhMuc'] == 3 ? 'selected' : ''; ?>>Danh mục 3</option>
        </select>
    </div>
    <button type="submit" class="btn btn-warning">Cập Nhật Sản Phẩm</button>
</form>
