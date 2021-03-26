
<div class="container container__wrapper">
  <div class="row">
    <h2 class="list-product-title">List Product Title</h2>
    <div class="list-product-subtitle">
      <p>List Product description</p>
    </div>
    <!-- <div class="product-group"> -->
      <div class="row">
          <?php foreach($search as $key =>$pro){?>
            <form action="<?php echo BASE_URL?>categoryproduct/product_detail/<?php echo $pro['id_product']?>" class="product-group-form d-flex" method ="POST">
              <input type="hidden" value="<?php echo $pro['id_product']?>" name ="product_id">
              <input type="hidden" value="<?php echo $pro['title_product']?>" name ="product_title">
              <input type="hidden" value="<?php echo $pro['image_product']?>" name ="product_image">
              <input type="hidden" value="<?php echo $pro['quantity_product']?>" name ="product_quantity">
              <input type="hidden" value="<?php echo $pro['price_product']?>" name ="product_price">
              <div class="col-md-3 col-sm-6 col-12">
                <div class="card card-product">
                  <a href="http://localhost:81/mywebsite/categoryproduct/product_detail/<?php echo $pro['id_product']?>" class="product__link">
                    <img class="card-img-top" style="height:200px" src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $pro['image_product']?>" alt="<?php echo $pro['title_product']?>">
                  </a> 
                  <div class="card-body">
                    <h5 class="card-title">
                    <a class="cart__text" href="http://localhost:81/mywebsite/categoryproduct/product_detail/<?php echo $pro['id_product']?>">
                          <?php echo $pro['title_product']?>
                    </a></h5>
                    <p class="card-text"><?php echo number_format($pro['price_product'],0,',','.')?>vnđ</p>
                    <a href="#" class="btn btn-primary product-group-btn">
                      <input style="box-shadow: none;" type="submit" name="addcart" value="Đặt mua">
                    </a>
                  </div>
                </div>
              </div>
            </form>
          <?php }?>
      </div>
    </div>
  <!-- </div> -->
</div>
<!-- end show product -->
