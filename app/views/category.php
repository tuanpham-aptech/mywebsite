<h1>This is home page </h1>
<p>Category :
    <?php 
    foreach($category as $key=>$value){
       echo $value['name'] .'<br>'; 

    }
    ?>
</p>