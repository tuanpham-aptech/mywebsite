<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:81/mywebsite/public/fonts/css/all.min.css">
    <link rel="stylesheet" href="http://localhost:81/mywebsite/public/css/base.css">
    <link rel="stylesheet" href="http://localhost:81/mywebsite/public/css/style.css">
</head>
<body>
<section class="container-fluid">
   <header class="container-fluid">
       <div class="header__logo">
         <a href="#" class="header__logo-link">
         <img class="header__logo-img" src="http://localhost:81/mywebsite/public/images/logo_aptech.png" alt="logo_aptech"></a> 
       </div>
       <div class="header__search">
           <input type="text" class="header__search-input form-control" placeholder="Nhập nội dung tìm kiếm sản phẩm ">
                <a href="#" class="header__search-btn">
                    <i class="header__search-btn-icon fas fa-search"></i>
                </a>    
       </div>
       <div class="header__cart">
            <div class="header__cart-wrap">
                <a href="http://localhost:81/mywebsite/ordercartuser" class="header__cart-link">
                    <i class="header__cart-icon fas fa-shopping-cart"></i>
                </a> 
            </div>
        </div>
   </header>
    <nav class="menu container-fluid">
        <ul class="menu__list">
            <li class="menu__list-item">
                <a href="#">Danh mục sản phẩm </a>
            </li>
            <li class="menu__list-item">
                <a href="http://localhost:81/mywebsite/">Trang chủ</a>
            </li>
            <li class="menu__list-item">
                <a href="#">Sản phẩm </a>
            </li>
            <li class="menu__list-item">
                <a href="#">Giới thiệu </a>
            </li>
            <li class="menu__list-item">
                <a href="http://localhost:81/mywebsite/index/contact_us">Liên hệ</a>
            </li>
            <?php if(!Session::get('customer')){ ?>
                <li class="menu__list-item">
                <a href="http://localhost:81/mywebsite/customer/customer_logout">Đăng xuất </a>
                 </li>
            <?php }else{ ?>
                <li class="menu__list-item">
                <a href="http://localhost:81/mywebsite/customer/customer_login">Đăng nhập </a>
                </li>
            <?php } ?>
           
         </ul>
    </nav>