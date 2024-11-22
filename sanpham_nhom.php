<?php
include './authMiddlware.php'; 
// Kiểm tra quyền truy cập,1 là tài khoản quản lý, 0 là tài khoản người dùng
if (!checkLoginAndPermission(1)) {
    echo "<script>alert('Bạn không có quyền truy cập vào trang này.'); windown.location.back();</script>";
    exit();
}
?>

<?php include "headerquantri.php";
include "function_nhomsanpham.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
.container{
        background-color: #FFFFFF;
    padding-bottom: 10px;
}
.container th,.container tr,.container h2,.container  td{
    color: black;
    border-color: black;
}
.container th{
    text-align: center;
    background-color:#343a40;
    border-color: black !important;
}
.container h2{
    text-align: center;
    width: 100%;
    padding-top: 10px;
    font-weight: 700;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 30px;
}
.container td{
    background-color: white;
}
.container button:hover{
   background-color: yellow;
   color: black;
}
.container button{
     border-radius: 7px; 
    background-color: #007BFF;
    justify-content: center;
    margin-left: 40%;
     font-size: 15px;
     font-weight: 400;
}

.example{
padding: 0px 20px 0px 20px;
}
.table{
    padding: 0px 80px 0px 150px;
    font-size: 22px;
}
th,td{
   padding: 10px;
}

 </style>
</head>

<body>
    <?php
   $sanphamnhom = new nhomsanpham();
   $result = $sanphamnhom->hienthinhom();
   $count= mysqli_num_rows($result);
    ?>
    <div class="example">
        <div class="container">
            <div class="row">
                <h2>Quản Lý Nhóm Sản Phẩm </h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                         
                            <th>Tên Nhóm sản Phẩm</th>
                    
                            <th> Ghi Chú</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td>
                                    <?PHP echo $row["id"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["tennhom"] ?>
                                </td>
                                <td>
                                    <?PHP echo $row["ghichu"] ?>
                                </td>
                              
                                <td>
                                <a href="suasanpham_nhom.php?id=<?php echo $row["id"]; ?>" style="text-decoration: none">Sửa</a>
                                <a href="xoasanpham_nhom.php?id=<?php echo $row["id"]; ?>" style="text-decoration: none">Xóa</a>
                            </td>

                            </tr>
                           
                        <?PHP } ?> 
                    </tbody>
                </table>
              <button>  <a href="formsanpham_nhom.php" style="text-decoration: none; color: black;">Thêm Nhóm Sản Phẩm</a></button>
            </div>
        </div>

    </div>
</body>

</html>