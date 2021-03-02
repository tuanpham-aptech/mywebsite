
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
      <th scope="col-8">Thương hiệu</th>
      <th scope="col-1">Delete</th>
      <th scope="col-1">Edit</th>

    </tr>
  </thead>
  <tbody>
     <?php
     $i=0;
      foreach($brand as $key =>$value){
          $i++;
        ?>
     <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $value['title_brand']?></td>
      <td><a href="<?php echo BASE_URL?>/brand/delete_brand/<?php echo $value['id_brand']?>">Xóa</a></td>
      <td><a href="<?php echo BASE_URL?>/brand/edit_brand/<?php echo $value['id_brand']?>">Cập nhật</a></td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
</table>