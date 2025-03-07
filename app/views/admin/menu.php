<nav class="navbar navbar-expand-sm bg-navbar navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo BASE_URL?>/login/dashboard">Admin</a>

  <!-- Links -->
  <ul class="navbar-nav">
  
     <!-- Danh mục bài viết -->
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Danh mục bài viết 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo BASE_URL?>/post">Thêm </a>
        <a class="dropdown-item" href="<?php echo BASE_URL?>/post/list_category">Liệt kê</a>
      </div>
    </li>
      <!-- Danh mục bài viết -->
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Bài viết  
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo BASE_URL?>/post/add_post">Thêm </a>
        <a class="dropdown-item" href="<?php echo BASE_URL?>/post/list_post">Liệt kê</a>
      </div>
    </li>
    <!--Danh mục sản phẩm -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Danh mục sản phẩm 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo BASE_URL?>/product">Thêm </a>
        <a class="dropdown-item" href="<?php echo BASE_URL?>/product/list_category">Liệt kê</a>
        <!-- product/list_category trong đó product là controller list_category là hàm trong controller product-->
      </div>
    </li>
     <!-- Sản phẩm  -->
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Sản phẩm 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo BASE_URL?>/product/add_product">Thêm </a>
        <a class="dropdown-item" href="<?php echo BASE_URL?>/product/list_product">Liệt kê</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Thương hiệu
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo BASE_URL?>brand/add_brand">Thêm </a>
        <a class="dropdown-item" href="<?php echo BASE_URL?>/brand/list_brand">Liệt kê</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Đơn hàng 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo BASE_URL?>/order">Liệt kê</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Thành viên
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo BASE_URL?>customer/list_customer">Liệt kê</a>
      </div>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="<?php echo BASE_URL?>/login/logout">Đăng xuất </a>
    </li>
  </ul>
</nav>