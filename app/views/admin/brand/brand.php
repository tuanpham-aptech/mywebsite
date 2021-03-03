<h1>This is home page </h1>
<p>Brand :
    <?php 
    foreach($brand as $key=>$value){
       echo $value['title_brand'] .'<br>'; 
    }
    ?>
</p>