
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>

<h6 class="add_category">Thêm danh mục bài viết </h6>
<div class="col-md-6">
    <form method ="POST" action ="<?php echo BASE_URL?>/post/insert_post">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên danh mục </label>
        <input type="text" class="form-control" name ="title_category_post" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Miêu tả danh mục </label>
        <input type="text" class="form-control" name ="desc_category_post" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <button type="submit" class="btn btn-primary">Thêm danh mục </button>
    </form>
</div>
