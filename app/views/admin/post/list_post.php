
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
      <th scope="col-8">Tên bài viết </th>
      <th scope="col-8">Chi tiết bài viết</th>
      <th scope="col-8">Hình ảnh</th>
      <th scope="col-8">Danh mục</th>
      <th scope="col-1">Xóa</th>
      <th scope="col-1">Cập nhật</th>

    </tr>
  </thead>
  <tbody>
     <?php
     $i=0;
      foreach($post as $key =>$value){
          $i++;
        ?>
     <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $value['title_post']?></td>
      <td><?php echo substr($value['content_post'],0,300)?></td>
      <td><img src="<?php echo BASE_URL?>/public/uploads/post/<?php echo $value['image_post']?>" width="100" height="100"></td>
      <td><?php echo $value['id_category_post']?></td>

      <td><a href="<?php echo BASE_URL?>/post/delete_post/<?php echo $value['id_post']?>">Xóa</a></td>
      <td><a href="<?php echo BASE_URL?>/post/edit_post/<?php echo $value['id_post']?>">Cập nhật</a></td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
</table>