
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>
<h3 class = "post_category">Liệt kê danh mục bài viết </h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col-2">STT</th>
      <th scope="col-4">Tên danh mục</th>
      <th scope="col-4">Mô tả danh mục</th>
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
      <td><?php echo $value['title_category_post']?></td>
      <td><?php echo $value['desc_category_post']?></td>
      <td><a href="<?php echo BASE_URL?>/post/delete_category/<?php echo $value['id_category_post']?>">Xóa</a></td>
      <td><a href="<?php echo BASE_URL?>/post/edit_category/<?php echo $value['id_category_post']?>">Cập nhật</a></td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
</table>