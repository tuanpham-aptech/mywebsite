<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>

<h6 class="add_category">Chỉnh sửa thông tin thành viên </h6>
<div class="col-md-6">
    <?php foreach($customerbyid as $key => $value){?>
    <form method ="POST" action ="<?php echo BASE_URL?>customer/update_customer/<?php echo $value['customer_id']?>" >
    <div class="form-group">
        <label for="exampleInputEmail1">Tên thành viên </label>
        <input type="text" value="<?php echo $value['customer_name']?>" class="form-control" name ="customer_name" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Số điện thoại </label>
        <input type="text" class="form-control" value="<?php echo $value['customer_phone']?>" name ="customer_phone" id="exampleInputEmail1">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email </label>
        <input type="text" value="<?php echo $value['customer_email']?>" class="form-control" name ="customer_email" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Mật khẩu </label>
        <input type="text" value="<?php echo $value['customer_password']?>" class="form-control" name ="customer_password" id="exampleInputEmail1">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Địa chỉ  </label>
        <textarea id="editor" class="form-control" rows="5" style="resize:none;" name ="customer_address" ><?php echo $value['customer_address']?></textarea>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
   
    <button type="submit" class="btn btn-primary">Cập nhật thông tin </button>
    </form>
    <?php 
    }
    ?>
</div>
