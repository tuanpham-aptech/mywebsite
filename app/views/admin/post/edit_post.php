
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>
<h6 class="add_category">Sửa danh mục bài viết</h6>
<div class="col-md-6">
<?php foreach($categorybyid as $key => $value){?>
    <form method ="POST" action ="<?php echo BASE_URL?>/post/update_category_post/<?php echo $value['id_category_post']?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên danh mục </label>
        <input type="text" class="form-control" name ="title_category_post" value ="<?php echo $value['title_category_post']?>" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tên danh mục </label>
        <textarea name ="desc_category_post"  id="" cols="30" rows="10"><?php echo $value['desc_category_post']?>" </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Lưu danh mục </button>
    </form>
 <?php }?>
</div>