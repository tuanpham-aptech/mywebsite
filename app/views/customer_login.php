<div class="container">
   <div class="row">
      <div class="message">
         <?php 
            if(!empty($_GET['msg'])){
               $msg = unserialize(urldecode($_GET['msg']));
               foreach($msg as $key =>$value){
                  echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
               }
            }
            ?>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 contact__register">
         <h5 class="contact__register-title text-center mt-2">Đăng kí khách hàng </h5>
         <form action="<?php echo BASE_URL?>customer/insert_register" method="POST">
            <div class="container contact__properties">
               <div class="row">
                  <div class="input">
                     <label>Họ và tên: <span style="color:red;">*</span></label>
                     <input type="text" name="username" required class="clsip">
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="row">
                  <div class="input">
                     <label>Mật khẩu: <span style="color:red;">*</span></label>
                     <input type="password" title="Mật khẩu phải từ 6 kí tự" name="password" required class="clsip" >
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="row">
                  <div class="input">
                     <label>Số điện thoại: <span style="color:red;">*</span></label>
                     <input type="tel" pattern="\d{10,13}" name="phone" required  class="clsip">
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="row">
                  <div class="input">
                     <label>Địa chỉ: <span style="color:red;">*</span></label>
                     <textarea name="address"  cols="30" style="width:540px;" rows="4"></textarea>
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="row">
                  <div class="input">
                     <label>Email: <span style="color:red;">*</span></label>
                     <input type="email" pattern=".+@.+(\.[a-z]{2,3}){1,2}" name="email" required class="clsip">
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="row btnclass">
                  <div class="contact__properties-input ipmaxn mb-2 ">
                     <input type="submit" class="btn-gui btn btn-success" name="register" id="frmSubmit" 
                        value="Đăng kí tài khoản">
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
         </form>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-5 contact__login">
         <h5 class="contact__login-title text-center mt-2">Đăng nhập khách hàng </h5>
         <form action="<?php echo BASE_URL?>customer/customer_login_user" method="POST">
            <div class="customer__email">
               <label for="" class="customer__email-label">Email </label>
               <span class="customer__name-span">*</span>
               <input type="email" class="customer__email-input" required="" name="username">
            </div>
            <div class="customer__password">
               <label for="" class="customer__password-label">Mật khẩu</label>
               <span class="customer__name-span">*</span>
               <input type="password" class="customer__password-input" required="" name="password">
            </div>
            <div class="customer__btn mb-4">
               <input type="submit" class="customer__btn btn btn-primary" name ="login" value="Đăng nhập">
            </div>
         </form>
      </div>
   </div>
</div>