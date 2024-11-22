<?php include "headernguoidung.php";

include "function_lienhe.php";
$lienhe = new lienhe();
if(isset($_POST['ok'])){
   $lienhe->hoten=isset($_POST['hoten']) ? $_POST['hoten'] : '';
   $lienhe->sdt=isset($_POST['sdt']) ? $_POST['sdt'] : '';
   $lienhe->email=isset($_POST['email']) ? $_POST['email'] : '';
   $lienhe->noidung=isset($_POST['noidung']) ? $_POST['noidung'] : '';
  
   $lienhe->insert();
}
?>

<style>
.contact {
    height: unset;
}

.contact__form:hover {
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
}

.header_section {
    width: 100%;
    float: left;
    background-image: none !important;
    height: auto;
    background-size: 100%;
    background-repeat: no-repeat;
}

.contact__form-gr-input {
    border: 1px solid black !important;
}

.send_bt {
    background-color: #007bff; /* Màu nền */
    color: white; /* Màu chữ */
    border: none; /* Bỏ viền */
    border-radius: 5px; /* Bo góc */
    padding: 10px 20px; /* Khoảng cách trong nút */
    font-size: 16px; /* Kích thước chữ */
    cursor: pointer; /* Hiển thị con trỏ khi di chuột */
    transition: background-color 0.3s, transform 0.2s; /* Hiệu ứng chuyển đổi */
    margin-top: 20px;
    margin-left: 40%;
}

.send_bt:hover {
    background-color: #0056b3; /* Màu nền khi di chuột */
    transform: scale(1.05); /* Phóng to nhẹ khi di chuột */
}

.send_bt:active {
    transform: scale(0.95); /* Nhấn nút sẽ thu nhỏ */
}

.contact__form {
    background-color: #f8f9fa; /* Màu nền form */
    padding: 30px; /* Khoảng cách trong form */
    border-radius: 10px; /* Bo góc form */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Đổ bóng form */
}

.contact__form input,
.contact__form textarea {
    width: 100%; /* Chiếm toàn bộ chiều rộng */
    padding: 10px; /* Khoảng cách trong */
    margin-bottom: 15px; /* Khoảng cách dưới */
    border: 1px solid chocolate; /* Viền */
    border-radius: 5px; /* Bo góc */
    font-size: 16px; /* Kích thước chữ */
    transition: border-color 0.3s; /* Hiệu ứng khi thay đổi viền */
}

.contact__form input:focus,
.contact__form textarea:focus {
    border-color: #007bff; /* Màu viền khi focus */
    outline: none; /* Bỏ outline */
}

.titlecontact {
    font-size: 2.5em; /* Kích thước chữ tiêu đề */
    color: #343a40; /* Màu chữ tiêu đề */
    text-align: center; /* Canh giữa */
    margin-bottom: 20px; /* Khoảng cách dưới */
    margin-left: 150px;
}

.bulit_icon {
    text-align: center;
    margin-bottom: 30px; 
}

.mail_text {
    height: 45px; /* Chiều cao input */
}

.massage-bt {
    height: 150px; /* Chiều cao textarea */
    resize: none; /* Không cho thay đổi kích thước */
}

.container-fluid {
    padding: 50px 0; /* Khoảng cách trên dưới */
    background-color: #e9ecef; /* Màu nền container */
    border:2px solid chocolate;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="titlecontact">NHẬP THÔNG TIN LIÊN HỆ</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="contact_section_2">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="contact__form">
                    <form action="" method="post">
                        <div class="mail_section_1">
                            <input type="text" class="mail_text" placeholder="Your Name" name="hoten">
                            <input type="text" class="mail_text" placeholder="Your Email" name="email">
                            <input type="text" class="mail_text" placeholder="Your Phone" name="sdt">
                            <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="noidung"></textarea>
                            <div class="contact__form-btn">
                                <button class="send_bt" type="submit" name="ok">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footernguoidung.php";
?>
