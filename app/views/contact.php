<section>
   <div class="bg_in">
      <div class="contact_form">
         <div class="contact_left">
            <div class="ch-contacts-details">
               <ul class="contact-list">
                  <li class="addr">
                     <strong class="title">Địa chỉ của chúng tôi</strong>
                     <p>
                        <em><strong>Mywebsite</strong></em><br />
                        <em> 789 Tam Trinh Hoàng Mai Hà Nội<br />
                        Điện thoại : 0379.679.502<br />
                     </p>
                  </li>
               </ul>
            </div>
         </div>
         <div class="contact_right">
            <div class="form_contact_in">
               <div class="box_contact">
                  <form name="FormDatHang" method="post" action="ordercartuser" >
                     <div class="content-box_contact">
                        <div class="row">
                           <div class="input">
                              <label>Họ và tên: <span style="color:red;">*</span></label>
                              <input type="text" name="txtHoTen" required class="clsip">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                              <label>Số điện thoại: <span style="color:red;">*</span></label>
                              <input type="text" name="txtDienThoai" required onkeydown="return checkIt(event)" class="clsip">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                              <label>Địa chỉ: <span style="color:red;">*</span></label>
                              <input type="text" name="txtDiaChi" required class="clsip" >
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                              <label>Email: <span style="color:red;">*</span></label>
                              <input type="text" name="txtEmail" onchange="return KiemTraEmail(this);" required class="clsip">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                              <label>Nội dung: <span style="color:red;">*</span></label>
                              <textarea type="text" name="txtNoiDung" class="clsipa"></textarea>
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row btnclass">
                           <div class="input ipmaxn ">
                              <input type="submit" class="btn-gui btn btn-success" name="frmSubmit" id="frmSubmit" value="Gửi đơn hàng">
                              <input type="reset" class="btn-gui btn btn-danger" value="Nhập lại">
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
      </div>
   </div>
</section>

