
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>

<h6 class="add_category">Thêm bài viết  </h6>
<div class="col-md-6">
    <form method ="POST" action ="<?php echo BASE_URL?>/post/insert_post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên bài viết </label>
        <input type="text" class="form-control" name ="title_post" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Hình ảnh sản phẩm </label>
        <input type="file" class="form-control" name ="image_post" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Chi tiết bài viết</label>
        <textarea id ="editor" class="form-control" rows="10" style="resize:none;" name ="content_post" ></textarea>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Danh mục bài viết</label>
        <select name="category_post" id="" class="form-control">
        <?php foreach($category as $key =>$value){?>
            <option value="<?php echo $value['id_category_post']?>"><?php echo $value['title_category_post']?></option>
        <?php } ?>
        </select>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <button type="submit" class="btn btn-primary">Thêm bài viết</button>
    </form>
</div>
