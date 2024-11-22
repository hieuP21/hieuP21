<?php include "headernguoidung.php"; ?>
<?php
   include "thuvien.php";
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
    if(isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
    if(isset($_GET['delid']) && ($_GET['delid'] >= 0)){
        array_splice($_SESSION['giohang'], $_GET['delid'], 1);
    }
    if(isset($_POST['addcart']) && ($_POST['addcart'])) {
        $img = $_POST['img1'];
        $tensp = $_POST['tensp'];
        $dongia = $_POST['dongiamoi'];
        $soluong = $_POST['soluong'];
        $fl = 0;
        for($i = 0; $i < sizeof($_SESSION['giohang']); $i++){
            if($_SESSION['giohang'][$i][1] == $tensp){
                $fl = 1;
                $soluongnew = $soluong + $_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3] = $soluongnew;
                break;
            }
        }
        if($fl == 0) {
            $sp = [$img, $tensp, $dongia, $soluong];
            $_SESSION['giohang'][] = $sp;
        }
    }
    if (isset($_POST['dongydathang'])) {
        $cartBackup = $_SESSION['giohang'];
        unset($_SESSION['giohang']);
        $_SESSION['order_success'] = true;
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .container-product__heading {
            text-align: center;
            margin-bottom: 20px;
        }
        .container-product__heading-border {
            width: 50px;
            height: 3px;
            background-color:black;
            margin: 10px auto;
        }
        .shoping__cart__table table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .shoping__cart__table table, .shoping__cart__table th, .shoping__cart__table td {
            border: 1px solid #ddd;
        }
        .shoping__cart__table th, .shoping__cart__table td {
            padding: 10px;
            text-align: center;
        }
        .shoping__cart__table th {
            background-color:#FFD957;
            color: black;
        }
        .shoping__cart__table td img {
            width: 70px;
            height: 60px;
        }
        .shoping__cart__btns, .shoping__checkout {
            text-align: center;
            margin-top: 20px;
        }
        .primary-btn {
            display: inline-block;
            padding: 10px 20px;
            color: black;
            background-color: #FFD957;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .primary-btn:hover {
            background-color: yellow;
            color: black;
        }
        .checkout__input {
            margin-bottom: 15px;
            text-align: left;
        }
        .checkout__input p {
            margin-bottom: 5px;
            font-weight: 700;
            margin-left: 24%;
        }
        .checkout__input input {
            width: 50%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-left: 24%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="container-product__heading">GIỎ HÀNG CỦA BẠN</h3>
        <div class="container-product__heading-border"></div>
        <form action="bill.php" method="post">
            <div class="shoping__cart__table">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh</th>
                            <th>Tên Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo showgiohang(); ?>
                    </tbody>
                </table>
            </div>
            <div class="shoping__cart__btns">
                <a href="fullsp.php" class="primary-btn">Tiếp Tục Mua Hàng</a>
                <a href="cart.php?delcart=1" class="primary-btn">Xóa Giỏ Hàng</a>
            </div>
            <div class="shoping__checkout">
                <h5>Thông Tin Thanh Toán</h5>
                <div class="checkout__input">
                    <p>Họ Và Tên<span>*</span></p>
                    <input type="text" name="hoten" required>
                </div>
                <div class="checkout__input">
                    <p>Số Điện Thoại<span>*</span></p>
                    <input type="text" name="dienthoai" required>
                </div>
                <div class="checkout__input">
                    <p>Địa Chỉ<span>*</span></p>
                    <input type="text" name="diachi" required>
                </div>
                <div class="checkout__input">
                    <p>Email<span>*</span></p>
                    <input type="email" name="email" required>
                </div>
                <button class="primary-btn" type="submit" name="dongydathang">Đặt Hàng</button>
            </div>
        </form>
    </div>
</body>
</html>
