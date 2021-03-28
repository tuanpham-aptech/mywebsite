
<section class="container">
   <div class="row">
      <article class="col-md-8 ">
         <?php foreach($product as $key =>$cbt){?>
         <!--Section: Block Content-->
            <section class="mb-5">
               <form action="http://localhost:81/mywebsite/ordercartuser/addtocart" method ="POST">
               <input type="hidden" value="<?php echo $cbt['id_product']?>" name ="product_id">
               <input type="hidden" value="<?php echo $cbt['title_product']?>" name ="product_title">
               <input type="hidden" value="<?php echo $cbt['image_product']?>" name ="product_image">
               <input type="hidden" value="<?php echo $cbt['price_product']?>" name ="product_price">
                  <div class="row">
                     <div class="col-md-6 mb-4 mb-md-0">
                        <div id="mdb-lightbox-ui"></div>
                        <div class="mdb-lightbox">
                           <div class="row product-gallery mx-1">
                              <div class="col-12 mb-0">
                                 <figure class="view overlay rounded z-depth-1 main-img">
                                    <a href="<?php echo BASE_URL?>/public/uploads/product/<?php echo $cbt['image_product']?>"
                                       data-size="1000x900">
                                    <img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $cbt['image_product']?>"
                                       class="img-fluid z-depth-1">
                                    </a>
                                 </figure>
                              </div>
                              <div class="col-12">
                                 <div class="row">
                                    <div class="col-3">
                                       <div class="view overlay rounded z-depth-1 gallery-item">
                                          <img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $cbt['image_product']?>"
                                             class="img-fluid">
                                          <div class="mask rgba-white-slight"></div>
                                       </div>
                                    </div>
                                    <div class="col-3">
                                       <div class="view overlay rounded z-depth-1 gallery-item">
                                          <img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $cbt['image_product']?>"
                                             class="img-fluid">
                                          <div class="mask rgba-white-slight"></div>
                                       </div>
                                    </div>
                                    <div class="col-3">
                                       <div class="view overlay rounded z-depth-1 gallery-item">
                                          <img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $cbt['image_product']?>"
                                             class="img-fluid">
                                          <div class="mask rgba-white-slight"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <h5><?php echo $cbt['title_product']?></h5>
                        <p class="mb-2 text-muted text-uppercase small"><?php echo $cbt['desc_product']?></p>
                        <ul class="rating">
                           <li class ="rating__item">
                              <i class="fas fa-star fa-sm text-primary"></i>
                           </li>
                           <li class ="rating__item">
                              <i class="fas fa-star fa-sm text-primary"></i>
                           </li>
                           <li class ="rating__item">
                              <i class="fas fa-star fa-sm text-primary"></i>
                           </li>
                           <li class ="rating__item">
                              <i class="fas fa-star fa-sm text-primary"></i>
                           </li>
                           <li class ="rating__item">
                              <i class="far fa-star fa-sm text-primary"></i>
                           </li>
                        </ul>
                        
                        <div class="rating__number"><span class="mr-1 rating__span "><strong><?php echo number_format($cbt['price_product'],0,',','.')?>đ</strong></span></div>
                        <p class="pt-1"><?php echo $cbt['desc_product']?></p>
                        <div class="table-responsive mb-2">
                           <table class="table table-sm table-borderless">
                              <tbody>
                                 <tr>
                                    <td class="pl-0 pb-0 w-25">Số lượng</td>
                                 </tr>
                                 <tr>
                                    <td>
                                    <div class="buttons_added">
                                       <input class="minus is-form" type="button" value="-">
                                       <input aria-label="quantity" class="input-qty" id="sl"
                                       max="<?php echo $cbt['quantity_product']?>"min="1"
                                       name ="product_quantity" type="number" value="1">
                                       <input class="plus is-form" type="button" value="+">
                                    </div>
                                    </td>
                                 </tr>
                                 <!-- <tr>
                                    <td>--Màu sắc--</td>
                                    <td>--Màu sắc--</td>
                                 </tr> -->
                              </tbody>
                           </table>
                        </div>
                        <a class="home-product--btn product-group-btn btn btn-success btn-sm" >
                        <input style="box-shadow: none;" type="submit" name="addcart" id="addcart" value="Đặt hàng">
                        </a>
                     </div>
                  </div>
               </form>     
            </section>
         <?php }?>
      </article>
   </div>
   <?php if(Session::get('customer')==true) : ?> 
      <div class="row">
         <h5 class="mt-3 mr-4">Bình luận khách hàng </h5>
         <form action="<?php echo BASE_URL ?>customer/insertComment" method="POST">
            <input type="hidden" name="id_product" value="<?php echo $cbt['id_product'];?>">
            <div class="form-group">
               <textarea name="comment_content" id="mainComment" required cols="30" rows="2" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
               <button style="float:right;" name ="btn_submit" class="btn btn-primary" >Thêm comment</button>
            </div>
         </form>       
      </div> 
   <?php endif;?>
</section>

<script src="http://localhost:81/mywebsite/public/js/jquery.js"></script>
<script type="text/javascript">
      $('input.input-qty').each(function () {
            var $this = $(this),
                qty = $this.parent().find('.is-form'),
                min = Number($this.attr('min')),
                max = Number($this.attr('max'))
            console.log(max)
           var d = min;
            $(qty).on('click', function () {
                if ($(this).hasClass('minus')) {
                    if (d > min) d += -1
                } else if ($(this).hasClass('plus')) {
                    var x = Number($this.val()) + 1
                    if (x <= max) d += 1
                }
                $this.attr('value', d).val(d)
            })
        })
    
</script>
<!-- <script type="text/javascript">
   $(document).ready(function(){
      $('#addComment').on('click',function(){
         var comment = $("#mainComment").val();
         if(comment.length > 5){
            $.ajax({
               url:'product_detail.php',
               method:'POST',
               dataType:'text',
               data:{
                  addComment:1,
                  comment:comment
               },success:function(response){
                  console.log(response);
               }
            })
         }else{
            alert("please check your input");
         }
      });
   });

</script> -->

