
<section class="container-fluid">
    <aside class="col-md-2">
    <div class="category__product">DANH MỤC SẢN PHẨM</div>
    <?php
      foreach($category as $key =>$value){
    ?>
    <div class="category__item"><a href="<?php echo BASE_URL?>categoryproduct/category_product/<?php echo $value['id']?>"><?php echo $value['name']?></a></div>
    <?php }?>
    </aside>
      <article class="col-md-8 ">          
          <?php foreach($product as $key =>$cbt){?>
            <!--Section: Block Content-->
        <form action="<?php echo BASE_URL?>/ordercartuser/addtocart" method ="POST">

          <input type="hidden" value="<?php echo $cbt['id_product']?>" name ="product_id">
          <input type="hidden" value="<?php echo $cbt['title_product']?>" name ="product_title">
          <input type="hidden" value="<?php echo $cbt['image_product']?>" name ="product_image">
          <input type="hidden" value="<?php echo $cbt['quantity_product']?>" name ="product_quantity">
          <input type="hidden" value="<?php echo $cbt['price_product']?>" name ="product_price">
            
          <section class="mb-5">

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
                      <td class="pl-0">
                        <div class="def-number-input number-input safari_only mb-0">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="minus"></button>
                          <input class="quantity" min="0" name="quantity" value="1" type="number">
                          <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="plus"></button>
                        </div>
                      </td>
                    
                    </tr>
                  </tbody>
                </table>
              </div>
              <a class="home-product--btn btn btn-success btn-sm" >
              <input style="box-shadow: none;" type="submit" name="addcart" value="Đặt hàng">
            </a>
            </div>
          </div>
          <script type="text/javascript">
          $(document).ready(function () {
          // MDB Lightbox Init
          $(function () {
          $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
          });
          });
          </script>
          </section>

          </form>
          <?php }?>
      </article>
    <aside class="col-md-2">
    <div class="title__brand">THƯƠNG HIỆU</div>
    <?php
     foreach($brand as $key =>$brand){
    ?>
      <div class="category__item"><a href="#"><?php echo $brand['title_brand']?></a></div>
    <?php } ?>
    </aside>
   </section>

