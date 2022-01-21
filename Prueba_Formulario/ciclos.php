<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #E85F79;
            text-align: center;
        }
    </style>
</head>
<body>

    <?php
        for ($i=0; $i < 10; $i++) { 
    ?>
            <img src="polvo.jpg" alt="">
    <?php
        }
    ?>

    <h1>Holaaaaaaaaaaaaaaaaaaaaaa</h1>

    <?php
        while (rand(1,15) != 5) {
    ?>
            <img src="polvo.jpg" alt="">
    <?php
        }
    ?>

    
</body>
</html>