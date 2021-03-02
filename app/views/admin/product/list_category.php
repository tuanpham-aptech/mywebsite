
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>
<h3 class = "list_category">Liệt kê danh mục sản phẩm </h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col-2">STT</th>
      <th scope="col-8">Tên danh mục</th>
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
      <td><?php echo $value['name']?></td>
      <td><a href="<?php echo BASE_URL?>/product/delete_category/<?php echo $value['id']?>">Xóa</a></td>
      <td><a href="<?php echo BASE_URL?>/product/edit_category/<?php echo $value['id']?>">Cập nhật</a></td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
</table>