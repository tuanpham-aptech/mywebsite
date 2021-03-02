<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE KÍNH MẮT </title>
</head>
<body>
        <?php 
        spl_autoload_register(function($class){
            include_once 'system/libs/'.$class.'.php';// điều kiện các url
        });
        include_once 'app/config/config.php';// điều kiện các url

       $main = new Main();
        ?>
</body>
</html>