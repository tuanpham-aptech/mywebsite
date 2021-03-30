
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>
<h3 class = "list_category">Danh sách thành viên  </h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col-2">STT</th>
      <th scope="col-8">Tên thành viên </th>
      <th scope="col-8">Số điện thoại  </th>
      <th scope="col-8">Email </th>
      <th scope="col-8">Mật khẩu </th>
      <th scope="col-8">Địa chỉ </th>
      <th scope="col-1">Delete</th>
      <th scope="col-1">Edit</th>

    </tr>
  </thead>
  <tbody>
     <?php
     $i=0;
      foreach($customer as $key =>$value){
          $i++;
        ?>
     <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $value['customer_name']?></td>
      <td><?php echo $value['customer_phone']?></td>
      <td><?php echo $value['customer_email']?></td>
      <td><?php echo $value['customer_password']?></td>
      <td><?php echo $value['customer_address']?></td>
      <td><a href="<?php echo BASE_URL?>customer/delete_customer/<?php echo $value['customer_id']?>">Xóa</a></td>
      <td><a href="<?php echo BASE_URL?>customer/edit_customer/<?php echo $value['customer_id']?>">Cập nhật</a></td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
</table>