<?php include"headernguoidung.php";?>

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
        $sql = "SELECT * 
        FROM sanpham1 ";
    //Bước 3
    $result = mysqli_query($conn, $sql);
    ?>
    <style>
.header_section {
    width: 100%;
    float: left;
    background-image: none !important;
    height: auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.product_box{
        margin-bottom:20px;
    }

    .looking_text{
   color: black; /* Màu chữ xanh */
   font-weight: bold; /* In đậm */
   text-align:center;
}
.looking_text_a{
   color: red; /* Màu chữ xanh */
   font-weight: bold; /* In đậm */
}
input[type="submit"] {
            background-color: pink; /* Màu nền */
            color: black; /* Màu chữ */
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px; /* Bo góc */
            cursor: pointer;
            transition: background-color 0.3s; /* Hiệu ứng chuyển màu */
        }
.col-lg-3 {
   margin-bottom: 20px; /* Khoảng cách giữa các sản phẩm */
    padding: 10px; /* Khoảng cách bên trong */
    border: 5px solid #ddd; /* Đường viền */
    border-radius: 5px; /* Bo góc đường viền */
    background-color: #f9f9f9; /* Màu nền nhạt */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
    transition: transform 0.3s; /* Hiệu ứng khi hover */
   
}
        input[type="submit"]:hover {
            background-color: #45a049; /* Màu khi hover */
        }
        .image_1{
         width: 220px;
         height:220px;
        }
.col-lg-3 {
            margin-bottom: 40px;
}
.row1{
   display:flex;  
   padding: 10px;
   text-align: center;
   justify-content: center;
}
.row2{
   display:flex;
   justify-content: center;
}
.coffee_section_2{
   width:70%;
   border: 5px solid chocolate; /* Đường viền */
    border-radius: 5px;
    margin-left: 220px;
}
    </style>
  <div class="coffee_section layout_padding">
      <div class="container">
            <div class="row1">
               <h1 class="titlesp">TOÀN BỘ SẢN PHẨM</h1>
            </div>
      </div>
      <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container-fluid">
                        <div class="row2">
                        <?php       $limit = 4; 
                            $count = 0; 
                            while ($row= mysqli_fetch_assoc($result)) { 
                                if ($count >= $limit) {
                                    break; 
                                }    
                        ?> 
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img">
                                 
                              <a href="chitiet.php?masp=<?php echo $row["masp"] ?>">
                              <img  src="images/<?php echo $row["img1"] ?>" class="image_1"> </a> 
                           </div>
                           <a href="chitiet.php?masp=<?php echo $row["masp"] ?>">  
                               <h3 class="looking_text_a"><?php echo $row["dongiamoi"] ?> 000 VNĐ</h3></a>
                              <a href="chitiet.php?masp=<?php echo $row["masp"] ?>">
                                   <p class="looking_text"><?php echo $row["tensp"] ?></p></a>
                              <form action="cart.php" method="post">
                              <div class="read_bt"></div>
                               <input type="submit" value="Mua Ngay" name="addcart"></a>
                              <ul>
                                 <li class="active"> </li>
                                 <input type="hidden" name="soluong" value="1">
                                            <input type="hidden" name="tensp" value="<?php echo $row["tensp"] ?>">
                                            <input type="hidden" name="dongiamoi" value="<?php echo $row["dongiamoi"] ?> 000 VNĐ">
                                            <input type="hidden" name="img1" value="<?php echo $row["img1"] ?>">   
                               
                              </ul>
                           </div>
                              </form>
                           <?php 
                            $count++;    
                            }     ?> 
                        </div>


                        <div class="row2">
                        <?php       $limit = 4; 
                            $count = 0; 
                            while ($row= mysqli_fetch_assoc($result)) { 
                                if ($count >= $limit) {
                                    break; 
                                }    
                        ?> 
                        <div class="col-lg-3 col-md-6">
                              <div class="coffee_img">
                                 
                              <a href="chitiet.php?masp=<?php echo $row["masp"] ?>">
                              <img  src="upload/<?php echo $row["img1"] ?>" class="image_1"> </a> 
                           </div>
                           <a href="chitiet.php?masp=<?php echo $row["masp"] ?>">  
                               <h3 class="looking_text_a"><?php echo $row["dongiamoi"] ?> 000 VNĐ</h3></a>
                              <a href="chitiet.php?masp=<?php echo $row["masp"] ?>">
                                   <p class="looking_text"><?php echo $row["tensp"] ?></p></a>
                              <form action="cart.php" method="post">
                              <div class="read_bt"></div>
                               <input type="submit" value="Mua Ngay" name="addcart"></a>
                              <ul>
                                 <li class="active"> </li>
                                 <input type="hidden" name="soluong" value="1">
                                            <input type="hidden" name="tensp" value="<?php echo $row["tensp"] ?>">
                                            <input type="hidden" name="dongiamoi" value="<?php echo $row["dongiamoi"] ?> 000 VNĐ">
                                            <input type="hidden" name="img1" value="<?php echo $row["img1"] ?>">   
                               
                              </ul>
                           </div>
                              </form>
                           <?php 
                            $count++;    
                            }     ?> 
                        </div>
                     </div>             
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
<?php include"footernguoidung.php";?>