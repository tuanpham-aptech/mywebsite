
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>

<h6 class="add_category">Chỉnh sửa bài viết </h6>
<div class="col-md-6">
    <?php foreach($postbyid as $key => $value){?>
    <form method ="POST" action ="<?php echo BASE_URL?>/post/update_post/<?php echo $value['id_post']?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên bài viết  </label>
        <input type="text" value="<?php echo $value['title_post']?>" class="form-control" name ="title_post" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Hình ảnh  </label>
        <input type="file" class="form-control" name ="image_post" id="exampleInputEmail1">
        <p><img src="<?php echo BASE_URL?>/public/uploads/post/<?php echo $value['image_post']?>" width="100" height="100"></p>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nội dung bài viết  </label>
        <textarea id="editor" class="form-control" rows="10" style="resize:none;" name ="content_post" ><?php echo $value['content_post']?></textarea>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Danh mục bài viết  </label>
        <select name="category_post" id="" class="form-control">
        <?php foreach($category as $key =>$cate){?>
            <option <?php if($cate['id_category_post'] == $value['id_post']){echo'selected';}?>
            value="<?php echo $cate['id_category_post']?>"><?php echo $cate['title_category_post']?></option>
        <?php  } ?>
        </select>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật sản phẩm  </button>
    </form>
    <?php 
    }
    ?>
</div>
