<form autocomplete="off" action="<?php echo BASE_URL?>category/insertcategory" method ="POST">
<?php 
if(isset($msg)){
    echo "<span style ='color:skyblue;font-width:bold;'>".$msg."</span>";
}
?>
   <table>
    <tr>
        <td>Phân loại</td>
        <td><input type="text" required="1" name="title" ></td>
    </tr>
    <tr>
        <td><input type="Submit" name="addcategory" ></td>
    </tr>
   </table>
</form>