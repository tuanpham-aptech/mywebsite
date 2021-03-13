
<?php 
if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach($msg as $key =>$value){
        echo "<span style = 'color:blue; font-width:bold;'>$value</span>";
    }
}
?>
<h3 class = "list_category">Liệt kê đơn hàng  </h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col-2">Id</th>
      <th scope="col-8">Code đơn hàng </th>
      <th scope="col-1">Ngày đặt </th>
      <th scope="col-1">Tình trạng đơn hàng</th>
      <th scope="col-1">Quản lý đơn hàng </th>

    </tr>
  </thead>
  <tbody>
     <?php
     $i=0;
      foreach($order as $key =>$value){
          $i++;
        ?>
     <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $value['order_code']?></td>
      <td><?php echo $value['order_date']?></td>
      <td><?php 
            if($value['order_status'] == 0)
                { echo 'đơn hàng mới ';}
            else{ echo 'đơn hàng đã xử lý';} 
          ?></td>

      <td><a href="<?php echo BASE_URL?>/order/order_details/<?php echo $value['order_code']?>">Xem đơn hàng</a></td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
</table>