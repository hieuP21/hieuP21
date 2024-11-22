<?php
include './authMiddlware.php'; 
// Kiểm tra quyền truy cập,1 là tài khoản quản lý, 0 là tài khoản người dùng
if (!checkLoginAndPermission(1)) {
    echo "<script>alert('Bạn không có quyền truy cập vào trang này.'); windown.location.back();</script>";
    exit();
}
?>
<?php
   include "headerquantri.php";
   include "function_sanpham.php";
   $sanpham = new sanpham();
   $result = $sanpham->hienthi();
   $count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width:100%;
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
        .table img {
            max-width: 50px;
            border-radius: 5px;
        }
        .btn-action {
            margin: 5px;
        }
        .btn-add {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Quản Lý Sản Phẩm</h2>
        <button class="btn btn-primary btn-add">
            <a href="formsanpham.php" style="text-decoration: none; color: white;">Thêm Sản Phẩm</a>
        </button>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Hành Động</th>
                    <th>Mã sản phẩm</th>
                    <th>Nhóm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Mô Tả</th>
                    <th>Đơn Giá Cũ</th>
                    <th>Đơn Giá Mới</th>
                    <th>Ảnh 1</th>
                    <th>Ảnh 2</th>
                    <th>Ảnh 3</th>
                    <th>Ảnh 4</th>
                    <th>Enable</th>
                    <th>Ghi chú</th>
                    <th>Điểm Nổi Bật</th>
                    <th>Cách bảo dưỡng</th>
                    <th>Bảo Hành</th>
                    <th>Xuất Xứ</th>
                    <th>Ngày Đăng</th>
                    <th>Kích Thước</th>
                    <th>Người Đăng</th>
                    <th>Rank</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td>
                                <a href="suasanpham.php?masp=<?php echo $row["masp"]; ?>" class="btn btn-warning btn-sm btn-action">Sửa</a>
                                <a href="xoasanpham.php?masp=<?php echo $row["masp"]; ?>" class="btn btn-danger btn-sm btn-action">Xóa</a>
                            </td>
                            <td><?php echo $row["masp"]; ?></td>
                            <td><?php echo $row["tennhom"]; ?></td>
                            <td><?php echo $row["tensp"]; ?></td>
                            <td><?php echo $row["mota"]; ?></td>
                            <td><?php echo $row["dongiacu"]; ?></td>
                            <td><?php echo $row["dongiamoi"]; ?></td>
                            <td><img src="./images/<?php echo $row['img1']; ?>" alt=""></td>
                            <td><img src="./images/<?php echo $row['img2']; ?>" alt=""></td>
                            <td><img src="./images/<?php echo $row['img3']; ?>" alt=""></td>
                            <td><img src="./images/<?php echo $row['img4']; ?>" alt=""></td>
                            <td><?php echo ($row["enable"]); ?></td>
                            <td><?php echo $row["ghichu"]; ?></td>
                            <td><?php echo $row["diemnoibat"]; ?></td>
                            <td><?php echo $row["dieukienchamsoc"]; ?></td>
                            <td><?php echo $row["cachchamsoc"]; ?></td>
                            <td><?php echo $row["xuatxu"]; ?></td>
                            <td><?php echo $row["ngaydang"]; ?></td>
                            <td><?php echo $row["kichthuoc"]; ?></td>
                            <td><?php echo $row["nguoidang"]; ?></td>
                            <td><?php echo $row["giongloai"]; ?></td>
                        </tr>
                    <?php }
                } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
