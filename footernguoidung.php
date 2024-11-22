
<style>
   .footer {
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;
      padding: 20px 0;
   }
   .address_text {
      font-size: 24px;
      font-weight: bold;
      border-bottom: 2px solid white;
      margin-bottom: 20px;
      display: inline-block;
      margin-right: 110px;
   }
   .footer_text {
      font-size: 16px;
      font-weight: bold;
      margin: 15px 0;
      line-height: 1.8;
   }
   .location_text {
      display: flex;
      justify-content: center; /* Căn giữa các mục */
      flex-direction: column; /* Đảm bảo các mục xếp theo cột */
      align-items: center; /* Căn giữa theo chiều ngang */
   }
   .location_text ul {
      list-style-type: none;
      padding: 0;
   }
   .location_text ul li {
      font-size: 16px;
      font-weight: bold;
      margin: 10px 0;
      line-height: 1.5;
      border: 1px solid white;
      padding: 10px;
      display: inline-block;
      width: fit-content;
   }
   .location_text ul li a {
      text-decoration: none;
      color: white;
   }
   .padding_left_10 {
      padding-left: 10px;
   }
   .form-group {
      margin-top: 20px;
      display: flex;
      justify-content: center; /* Căn giữa form nhập email */
   }
   .update_mail {
      width: 60%;
      padding: 10px;
      margin: 10px 0;
      border: 2px solid white;
      border-radius: 5px;
      background-color: black;
      color: white;
   }
   .subscribe_bt {
      margin-top: 10px;
      display: flex;
      justify-content: center; /* Căn giữa biểu tượng telegram */
   }
   .subscribe_bt a img {
      width: 40px;
   }
</style>
<div class="footer">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
         <h1 class="address_text">Địa Chỉ</h1>
         <p class="footer_text"> Nếu bạn gặp phải rắc rối khi mua hàng hãy liên hệ tới chúng tôi. Chúng tôi sẽ luôn đảm bảo sự hài lòng của bạn khi mua hàng của chúng tôi!</p>
         <div class="location_text">
            <ul>
               <li>
                  <a href="#">
                  <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+0396969112</span>
               </a>
               </li>
               <li>
                  <a href="#">
                  <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Nhom7WEB@gmail.com</span>
               </a>
               </li>
               </ul>
         </div>
            <div class="form-group">
               <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                  <div class="subscribe_bt"><a href="#"><img src="./images/thayhoan.jpg"></a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="copyright_section">
         <div class="container">
            </div>
         </div>
</div>