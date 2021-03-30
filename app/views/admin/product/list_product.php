
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>
<h3 class = "list_category">Liệt kê sản phẩm </h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col-2">STT</th>
      <th scope="col-8">Tên sản phẩm </th>
      <th scope="col-8">Mô tả sản phẩm </th>
      <th scope="col-8">Giá sản phẩm </th>
      <th scope="col-8">Hình ảnh</th>
      <th scope="col-8">Số lượng</th>
      <th scope="col-8">Danh mục</th>
      <th scope="col-1">Delete</th>
      <th scope="col-1">Edit</th>

    </tr>
  </thead>
  <tbody>
     <?php
     $i=0;
      foreach($category as $key =>$value){
          $i++;
        ?>
     <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $value['title_product']?></td>
      <td><?php echo $value['desc_product']?></td>
      <td><?php echo number_format($value['price_product'],0,',','.')?></td>
      <td><img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $value['image_product']?>" width="100" height="100"></td>
      <td><?php echo $value['quantity_product']?></td>
      <td><?php echo $value['name']?></td>

      <td><a href="<?php echo BASE_URL?>/product/delete_product/<?php echo $value['id_product']?>">Xóa</a></td>
      <td><a href="<?php echo BASE_URL?>/product/edit_product/<?php echo $value['id_product']?>">Cập nhật</a></td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
</table>