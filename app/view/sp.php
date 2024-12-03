<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <?php if (!empty($kq)): ?>
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kq as $sanpham): ?>
                <tr>
                    <td><?= htmlspecialchars($sanpham['id']) ?></td>
                    <td><?= htmlspecialchars($sanpham['ten']) ?></td>
                    <td><?= htmlspecialchars($sanpham['gia']) ?></td>
                    <td><?= htmlspecialchars($sanpham['mota']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Không có sản phẩm nào trong cơ sở dữ liệu.</p>
    <?php endif; ?>
</body>
</html>
