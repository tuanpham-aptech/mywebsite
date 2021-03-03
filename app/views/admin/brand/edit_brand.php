<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>
<h6 class="add_brand">Sửa danh mục sản phẩm </h6>
<div class="col-md-6">
<?php foreach($brandbyid as $key => $value){?>
    <form method ="POST" action ="<?php echo BASE_URL?>/brand/update_brand/<?php echo $value['id_brand']?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên danh mục </label>
        <input type="text" class="form-control" name ="title_brand" value ="<?php echo $value['title_brand']?>" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <button type="submit" class="btn btn-primary">Lưu thương hiệu </button>
    </form>
 <?php }?>
</div>