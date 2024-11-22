
<?php 	  session_start();
//   if(isset($_SESSION)){

//   }
 
 
 ?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "btl_web";

    //B1: Create connetion
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    
    if (!$conn) {
        die("connection failer" . mysqli_connect_error());
    }
    //B2:
    $sql_nhom = "SELECT * FROM `sanpham_nhom` ";
   ;
    //Bước 3
    $result_nhom = mysqli_query($conn, $sql_nhom);
   
    $addToCartClicked = isset($_POST['addcart']);

    if ($addToCartClicked && !isset($_SESSION['user'])) {
        // Người dùng chưa đăng nhập và đã nhấn nút "Thêm vào giỏ hàng"
        // Chuyển hướng đến trang login.php
        header("Location: login.php");
        exit();
    }

   
    ?>
    <style>
header {
   display: flex;
    justify-content: space-between;
    padding: 12px 50px;
    height: 100px;
    background-color: black;
}
.header1{
    width: 100%;
    display: flex; /* Sử dụng flexbox */
    align-items: center;
    justify-content: space-between; /* Dàn đều các phần tử */
}
li {
    list-style: none;
}
a {
    text-decoration: none;
    color: azure;
}
.menu {
    flex: 3;
    display: flex;
}
.menu > li {
    padding: 10px 25px;
    color: #FFFFFF;
    position: relative;
}
.menu > li a {
    font-weight: bold;
    line-height: 20px;
    display: block;
}
.ọthers-flex {
    flex: 1;
    display: flex;
    border: 4px white;
}
.others {
    margin-left: auto; /* Đẩy phần others sang bên trái */
    display: flex; /* Đảm bảo các mục con xếp hàng ngang */
    align-items: baseline; /* Căn giữa theo chiều dọc */
    border: 4px white;
}
.ọthers-flex > li {
   padding: 0 8px; /* Khoảng cách giữa các mục */
    font-size: 13px;
    color: #FFFFFF;
    list-style: none;
}

.header-bot {
    color: #000000;
    background: #FFD957;
    margin-top: 4px;
    padding: 10px 20px;
    display: flex;
    height: 60px;
}
.row {
    margin-left: 340px;
    display: flex;
}
.list-row {
    margin-top: 10px;
    margin-left: 5px;
    margin-right: 5px;
}
.list-row > span {
    font-size: 20px;
}
.list {
    margin-right: 15px;
    background-color: chocolate;
}
#searching {
    display: inline;
    padding: 0px 10px 0px 10px;
    height: 42px;
    line-height: 42px;
    background: #fff;
    border-color: #e7e7e7;
    border-radius: 0px;
    box-shadow: none;
    font-size: 13px;
    font-weight: 300;
    color: #bbb;
    width: 400px;
}
    </style>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>GUNDAM SHOP</title>
     
   </head>
   <body>
      <header>
       <div class=" header1">
               <a class="navbar-brand"href="index.php"><img src="./images/logo.jpg"></a>
                  <ul class="menu">
                  <?php if(isset($_SESSION['user'])){ ?>
                     <li>
                        <a href="index.php">Trang chủ</a>
                     </li>
                     <li>
                        <a href="fullsp.php">Sản Phẩm</a>
                     </li>
                     <li >
                        <a href="xemdonhang_dadat.php">Đơn Hàng</a>
                     </li>
                     <li >
                        <a href="lienhe.php">Liên hệ</a>
                     </li>
                     <li >
                        <a href="tintuc.php">Tin Tức</a>
                     </li>
                     <li >
                        <a href="">Bộ Sưu Tập</a>
                     </li>
                  </ul> 
                     <div class="others">
                        <ul class="ọthers-flex">
                           <li><a href="#"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>	<?php echo $_SESSION['user']; ?></a></li>
                           <li><a href="logout.php"><span class="user_icon"> <i class="fa fa-sign-out-alt" aria-hidden="true"></i></span>Đăng xuất</a></li>
                           <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ Hàng</a></li>
                        </ul>
                     </div>
                  <?php } else { ?>
                  <ul class="menu">
                     <li>
                        <a href="index.php">Trang chủ</a>
                     </li>
                     <li >
                        <a href="fullsp.php">Sản Phẩm</a>
                     </li>
                     <li>
                        <a href="login.php">Đơn Hàng</a>
                     </li>
                     <li >
                        <a href="lienhe.php">Liên hệ</a>
                     </li>   
                     <li >
                        <a href="tintuc.php">Tin Tức</a>
                     </li>
                     <li >
                        <a href="">Bộ Sưu Tập</a>
                     </li>         
                  </ul>
                    
                     <div class="others">
                        <ul class="ọthers-flex">
                           <li><a href="login.php"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Đăng nhập</a></li>
                           <li><a href="dangki.php"><span class="user_icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span>Đăng kí</a></li>
                        </ul>
                     </div>
                     <?php } ?> 
       </div>
       </header>
    </div> 
</head>