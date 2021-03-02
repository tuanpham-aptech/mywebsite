
<section>
   <div class="bg_in">
   <?php 
   if(!empty($_GET['msg'])){
      $msg = unserialize(urldecode($_GET['msg']));
      foreach($msg as $key =>$value){
         echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
      }
   }
   ?>
      <div class="contact_form">
      <form action="<?php echo BASE_URL?>customer/insert_register" method="POST">
         <div class="contact_left">
            <h5 class="contact_left--h5">Đăng kí khách hàng</h5>
            <div class="form_contact_in ml-4">
               <div class="box_contact">
                  <form name="FormDatHang" method="post" action="ordercartuser" >
                     <div class="content-box_contact">
                        <div class="row">
                           <div class="input">
                              <label>Họ và tên: <span style="color:red;">*</span></label>
                              <input type="text" name="username" required class="clsip">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                              <label>Số điện thoại: <span style="color:red;">*</span></label>
                              <input type="text" name="phone" required  class="clsip">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                              <label>Địa chỉ: <span style="color:red;">*</span></label>
                              <input type="text" name="address" required class="clsip" >
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                              <label>Email: <span style="color:red;">*</span></label>
                              <input type="text" name="email" required class="clsip">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                              <label>Mật khẩu: <span style="color:red;">*</span></label>
                              <input type="password" name="password" required class="clsip" >
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row btnclass">
                           <div class="input ipmaxn ">
                              <input type="submit" class="btn-gui btn btn-success" name="register" id="frmSubmit" 
                              value="Đăng kí tài khoản">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="clear"></div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </form>
      <form action="<?php echo BASE_URL?>customer/customer_login_user" method="POST">
         <div class="contact_right">
            <form action="" method="POST" autocomplete="off">
            <div class="customer">  
            <h5 class="contact_right--h5">Đăng nhập  khách hàng</h5>

                <div class="customer__email">
                    <label for="" class="customer__email-label">Email </label>
                    <span class="customer__name-span">*</span>
                    <input type="text" class="customer__email-input" required="" name="username">
                </div>
                <div class="customer__password">
                    <label for="" class="customer__password-label">Password </label>
                    <span class="customer__name-span">*</span>
                    <input type="password" class="customer__password-input" required="" name="password">
                </div>
                <div class="customer__btn">
                    <input type="submit" class="customer__btn btn btn-primary" name ="login" value="Đăng nhập">
                </div>  
            </div>
            </form>
         </div>
      </form>
      </div>
   </div>
</section>

