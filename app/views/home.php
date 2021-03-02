
<section class="container-fluid">
    <aside class="col-md-2">
    <div class="category__product">DANH MỤC SẢN PHẨM</div>    
    <?php
      foreach($category as $key =>$value){
    ?>
    <div class="category__item"><a href="<?php echo BASE_URL?>categoryproduct/category_product/<?php echo $value['id']?>"><?php echo $value['name']?></a></div>
    <?php }?>
    </aside>
      <article class="col-md-8">
        <?php foreach($product as $key =>$pro){?>
        <!-- <div class="grid__column-2-4"> -->
          <form action="<?php echo BASE_URL?>/ordercartuser/addtocart" method ="POST">

          <input type="hidden" value="<?php echo $pro['id_product']?>" name ="product_id">
          <input type="hidden" value="<?php echo $pro['title_product']?>" name ="product_title">
          <input type="hidden" value="<?php echo $pro['image_product']?>" name ="product_image">
          <input type="hidden" value="<?php echo $pro['quantity_product']?>" name ="product_quantity">
          <input type="hidden" value="<?php echo $pro['price_product']?>" name ="product_price">
          
          <div class="home-product-item grid__column-2-4" >
            <a href="http://localhost:81/mywebsite/categoryproduct/product_detail/<?php echo $pro['id_product']?>">
            <img class="card-img-top" src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $pro['image_product']?>"
            alt="<?php echo $pro['title_product']?>" width="100" height="200" class="home-product-item__img">
            <h4 class="home-product-item__name"><?php echo $pro['title_product']?></h4>
            <div class="home-product-item__price">
              <span class="home-product-item__price-old">350.000đ</span>
              <span class="home-product-item__price-current"><?php echo number_format($pro['price_product'],0,',','.')?>đ</span>
            </div>
            <div class="home-product-item__action">
            <span class="home-product-item__like home-product-item__like--liked">
              <i class="home-product-item__like-icon-empty far fa-heart"></i>
              <i class="home-product-item__like-icon-fill fas fa-heart"></i>
            </span>
            <div class="home-product-item__raitting">
              <i class="home-product-item__star--gold fas fa-star"></i>
              <i class="home-product-item__star--gold fas fa-star"></i>
              <i class="home-product-item__star--gold fas fa-star"></i>
              <i class="home-product-item__star--gold fas fa-star"></i>
              <i class="home-product-item__star--gold fas fa-star"></i>
            </div>
            <span class="home-product-item__sold">138 đã bán</span>
            </div>
            <div class="home-product-item__origin">
              <span class="home-product-item__brand">Ark</span>
                                        
              <span class="home-product-item__origin-name">Moscost</span>
            </div>
            <div class="home-product-item__favourite">
              <i class="fas fa-check"></i>
              <span>Yêu thích</span>
            </div>                               
            <div class="home-product-item__sale-off">
              <span class="home-product-item__sale-off-percent">38%</span>
              <span class="home-product-item__sale-off-label">GIẢM</span>
            </div>
            <a class="home-product--btn btn btn-success btn-sm" >
              <input style="box-shadow: none;" type="submit" name="addcart" value="Đặt hàng">
            </a>
          <!-- </div> -->
        </a>
        </div>
        </form>                              
        <?php } ?>
    </article>
    <aside class="col-md-2">
    <div class="title__brand">THƯƠNG HIỆU</div>
    <?php
     foreach($brand as $key =>$brand){
    ?>
      <div class="category__item"><a href="<?php echo BASE_URL?>brand/brand_product/<?php echo $brand['id_brand']?>"><?php echo $brand['title_brand']?></a></div>
    <?php } ?>
    </aside>
   </section>
