
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>
<h6 class="add_category">Sửa danh mục sản phẩm </h6>
<div class="col-md-6">
<?php foreach($categorybyid as $key => $value){?>
    <form method ="POST" action ="<?php echo BASE_URL?>/product/update_category/<?php echo $value['id']?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên danh mục </label>
        <input type="text" class="form-control" name ="title_category_product" value ="<?php echo $value['name']?>" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <button type="submit" class="btn btn-primary">Lưu danh mục </button>
    </form>
 <?php }?>
</div>