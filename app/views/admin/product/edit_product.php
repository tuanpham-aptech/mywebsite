
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>

<h6 class="add_category">Chỉnh sửa sản phẩm </h6>
<div class="col-md-6">
    <?php foreach($productbyid as $key => $value){?>
    <form method ="POST" action ="<?php echo BASE_URL?>/product/update_product/<?php echo $value['id_product']?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên sản phẩm </label>
        <input type="text" value="<?php echo $value['title_product']?>" class="form-control" name ="title_product" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Hình ảnh sản phẩm </label>
        <input type="file" class="form-control" name ="image_product" id="exampleInputEmail1">
        <p><img src="<?php echo BASE_URL?>/public/uploads/product/<?php echo $value['image_product']?>" width="100" height="100"></p>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Giá sản phẩm </label>
        <input type="text" value="<?php echo $value['price_product']?>" class="form-control" name ="price_product" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Số lượng sản phẩm </label>
        <input type="text" value="<?php echo $value['quantity_product']?>" class="form-control" name ="quantity_product" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Miêu tả sản phẩm </label>
        <textarea class="form-control" rows="5" style="resize:none;" name ="desc_product" ><?php echo $value['desc_product']?>"</textarea>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Danh mục sản phẩm </label>
        <select name="category_product" id="" class="form-control">
        <?php foreach($category as $key =>$cate){?>
            <option <?php if($cate['id'] == $value['id_category_product']){echo'selected';}?>
            value="<?php echo $cate['id']?>"><?php echo $cate['name']?></option>
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
