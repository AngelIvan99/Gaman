<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="" method="post">
        <h1>Registrar</h1>
        <input type="text" name="name" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="register">
    </form>

    <?php
        include("registrar.php");
    ?>
</body>
</html>