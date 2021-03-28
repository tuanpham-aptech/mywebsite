<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>My Website</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="http://localhost:81/mywebsite/public/fonts/css/all.min.css">
      <link rel="stylesheet" href="../public/base.css">
      <link rel="stylesheet" href="http://localhost:81/mywebsite/public/css/store.css">
   </head>
   <body>
      <div class="container grid wide">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container">
            <div class="nav-brand ">
               <img src="http://localhost:81/mywebsite/public/images/logo_aptech.png " class="nav__logo"  alt="logo_aptech">
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="cart__text nav-link nav-item-left" href="http://localhost:81/mywebsite/">Trang chủ  <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active dropdown">
                     <a class="cart__text nav-link nav-item-left " id="navbarDropdown" >
                     Danh mục sản phẩm
                     </a>
                     <div class="dropdown-content dropdown-content--list" aria-labelledby="navbarDropdown">
                        <?php foreach($category as $key =>$value){?>
                        <a class="cart__text dropdown-item" href="<?php echo BASE_URL?>categoryproduct/category_product/<?php echo $value['id']?>">
                        <?php echo $value['name']?>
                        </a>
                        <?php } ?>
                     </div>
                  </li>
                  <li class="nav-item active dropdown">
                     <a class="nav-link nav-item-left " id="navbarDropdown" >
                     Thương hiệu
                     </a>
                     <div class="dropdown-content dropdown-content--list" aria-labelledby="navbarDropdown">
                        <?php foreach($brand as $key =>$br){?>
                        <a class="cart__text dropdown-item" href="<?php echo BASE_URL?>brand/brand_product/<?php echo $br['id_brand']?>">
                        <?php echo $br['title_brand']?>
                        </a>
                        <?php }?>
                     </div>
                  </li>
                  <li class="nav-item  active">
                     <a class="cart__text nav-link nav-item-left " href="http://localhost:81/mywebsite/index/contact_us">Liên hệ </a>
                  </li>
                  <?php if(Session::get('customer')==true){ ?> 
                  <li class="nav-item ">
                     <a  class="cart__text nav-item-link" href="http://localhost:81/mywebsite/customer/customer_logout">Đăng xuất</a>
                  </li>
                  <?php }else{ ?>   
                  <li class="nav-item">
                  <i class="fa fa-user icon"></i>
                     <a class="cart__text nav-item-link" href="http://localhost:81/mywebsite/customer/customer_login">Đăng nhập</a>
                  </li>
                  <?php } ?>
               </ul>
               <ul class="form-inline my-2 my-lg-0 list-unstyled">
                  <li class="nav-item mr-4">
                     <a class="cart__text nav-link text-warning display-4" href="http://localhost:81/mywebsite/ordercartuser"><i class="fas fa-cart-plus ml-2"></i></a>
                  </li>
                  <form class="active" method="POST" action="http://localhost:81/mywebsite/index/search">
                     <input class="form-control mr-sm-1 nav__search" name="keyword" type="text" >
                     <button class="btn btn-outline-success my-1 my-sm-0" name="search" type="submit"><i class="fas fa-search"></i></button>
                  </form>
                  </ul>
            </div>
         </div>
      </nav>
