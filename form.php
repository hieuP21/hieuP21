
<link href="quantri/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   
    <link href="quantri/css/sb-admin-2.min.css" rel="stylesheet">
    <?php
include './authMiddlware.php'; 
// Kiểm tra quyền truy cập,1 là tài khoản quản lý, 0 là tài khoản người dùng
if (!checkLoginAndPermission(1)) {
    echo "<script>alert('Bạn không có quyền truy cập vào trang này.'); windown.location.back();</script>";
    exit();
}
?>
<?php include "headerquantri.php";
include "function_taikhoan.php";
$taikhoan = new taikhoan();
if(isset($_POST['tbOk'])){
   $taikhoan->tendangnhap=isset($_POST['tendangnhap']) ? $_POST['tendangnhap'] : '';
   $taikhoan->matkhau=isset($_POST['matkhau']) ? $_POST['matkhau'] : '';
   $taikhoan->hoten=isset($_POST['hoten']) ? $_POST['hoten'] : '';
   $taikhoan->email=isset($_POST['email']) ? $_POST['email'] : '';
   $taikhoan->enable=isset($_POST['enable']) ? $_POST['enable'] : 0 ;
   $taikhoan->insert1();

   
}
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>


</head>
    <style>
     .container h2,label{
          color: black ;
       }

    </style>
</head>
<body>

<div class="container" >
    <h2>Thêm Tài Khoản</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="email">Tên đăng nhập:</label>
            <input type="text" class="form-control" id="tendangnhap" name="tendangnhap" required>
        </div>
        <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control"  name="matkhau" required>
        </div>
        <div class="form-group">
            <label for="email">Họ tên:</label>
            <input type="text" class="form-control" name="hoten" >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" >
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="enable" value="1" checked> Kích hoạt </label>
</div>
<button type="submit" class="btn btn-primary" name="tbOk">Chấp nhận</button>
    </form>
</div>
</body>
</html> 
