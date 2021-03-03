
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>

<h6 class="add_category">Thêm thương hiệu </h6>
<div class="col-md-6">
  <form autocomplete="off" action="<?php echo BASE_URL?>brand/insert_brand" method ="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên thương hiệu </label>
        <input type="text" class="form-control" name ="title_brand" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <button type="submit" class="btn btn-primary">Thêm thương hiệu</button>
    </form>
</div>