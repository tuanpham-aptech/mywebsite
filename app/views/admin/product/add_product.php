
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>

<h6 class="add_category">Thêm sản phẩm </h6>
<div class="col-md-6">
    <form method ="POST" action ="<?php echo BASE_URL?>/product/insert_product" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên sản phẩm </label>
        <input type="text" class="form-control" name ="title_product" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Hình ảnh sản phẩm </label>
        <input type="file" class="form-control" name ="image_product" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Giá sản phẩm </label>
        <input type="text" class="form-control" name ="price_product" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Số lượng sản phẩm </label>
        <input type="text" class="form-control" name ="quantity_product" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Miêu tả sản phẩm </label>
        <textarea id="editor" class="form-control" rows="5" style="resize:none;" name ="desc_product" ></textarea>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Danh mục sản phẩm </label>
        <select name="category_product" id="" class="form-control">
        <?php foreach($category as $key =>$value){?>
            <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
        <?php } ?>
        </select>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <button type="submit" class="btn btn-primary">Thêm sản phẩm  </button>
    </form>
</div>
