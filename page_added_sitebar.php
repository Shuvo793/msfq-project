<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>our website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    Us soft Web dev2
</div>
<div class="main">
    <div class="menu">
        <a href="">Home</a>
        <a href="?p=products">Products</a>
        <a href="?p=service">Service</a>
        <a href="?p=contact">Contact</a>
        <a href="?p=new_file">New File</a>
    </div>
    <div class="content">
        <?php
        if(isset($_GET['p'])){
            if(file_exists("pages/".$_GET['p'].".php")){
                echo '<h1>'.ucwords(str_replace("_"," ",$_GET['p'])).'</h1>';
                include ("pages/".$_GET['p'].".php");
            }else{
                foreach ($_SERVER as $key => $value){
                    echo "$key = $value <br/>";
                }
            }

        }else{
            echo "this is a home page";
        }
        ?>

    </div>
</div>
<div class="footer">
    copyright @ussoft <?php print date('Y'); ?>
</div>

</body>
</html>