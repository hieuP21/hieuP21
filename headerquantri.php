<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Trị</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .manager-form {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
            background-color:lightskyblue;
            width:100%;
        }
        .manager-logo__img {
            height: 160px;
            width: 170px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .manager-form__wrap {
            margin-left: 20px;
            margin-bottom: 20px;
        }
        .manager-form__menu-heading {
            display: flex;
            align-items: center;
            font-size: 1.25rem;
            color: #343a40;
            text-decoration: none;
        }
        .manager-form__menu-heading i {
            margin-left: 10px;
        }
        .manager-form__menu-list {
            list-style: none;
            padding: 0;
            margin-top: 10px;
        }
        .manager-form__menu-items {
            margin-bottom: 10px;
        }
        .manager-form__menu-items-link {
            text-decoration: none;
            color: black;
            font-size: 1rem;
        }
        .manager-form__menu-items-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="manager">
            <div class="manager-form">
                <a href="#!" class="manager-logo">
                    <img src="./images/logoquanly.jpg" alt="ảnh" class="manager-logo__img">
                </a>
                
                <div class="manager-form__wrap">
                    <a href="taikhoan.php" class="manager-form__menu-heading">Tài Khoản <i class="fas fa-chevron-down"></i></a>
                    <div class="manager-form__menu">
                        <ul class="manager-form__menu-list">
                            <li class="manager-form__menu-items">
                                <a href="taikhoan.php" class="manager-form__menu-items-link">Các Tài Khoản</a>
                            </li>
                            <li class="manager-form__menu-items">
                                <a href="lienhe1.php" class="manager-form__menu-items-link">Liên Hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="manager-form__wrap">
                    <a href="sanpham.php" class="manager-form__menu-heading">Sản Phẩm <i class="fas fa-chevron-down"></i></a>
                    <div class="manager-form__menu">
                        <ul class="manager-form__menu-list">
                            <li class="manager-form__menu-items">
                                <a href="sanpham.php" class="manager-form__menu-items-link">Các Sản Phẩm</a>
                            </li>
                            <li class="manager-form__menu-items">
                                <a href="cart_admin.php" class="manager-form__menu-items-link">Quản Lý Đơn Đã Đặt Hàng</a>
                            </li>
                            <li class="manager-form__menu-items">
                                <a href="bill_admin.php" class="manager-form__menu-items-link">Quản Lý Thông Tin Đơn Đặt Hàng</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="manager-form__wrap">
                    <a href="sanpham_nhom.php" class="manager-form__menu-heading">Nhóm Sản Phẩm <i class="fas fa-chevron-down"></i></a>
                    <div class="manager-form__menu">
                        <ul class="manager-form__menu-list">
                            <li class="manager-form__menu-items">
                                <a href="sanpham_nhom.php" class="manager-form__menu-items-link">Các Nhóm Sản Phẩm</a>
                            </li>
                            <li class="manager-form__menu-items">
                                <a href="formsanpham_nhom.php" class="manager-form__menu-items-link">Thêm Nhóm Sản Phẩm</a>
                            </li>
                        </ul>
                    </div>
                </div>
                  
            </div>
        </div>
    </div>
</body>
</html>
