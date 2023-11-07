<?php
   session_start();
   if (!isset($_SESSION['SESSION_EMAIL'])) {
       header("Location: index.php");
       die();
   }
   
   include 'config.php';
   
   $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
   
   if (mysqli_num_rows($query) > 0) {
       $row = mysqli_fetch_assoc($query);
       $name = $row['name'];
       $email = $row['email'];
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header id="header">
        <h1><img src="../imagenes/fotos/3-removebg-preview.png" alt="" class="logo"></h1>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul class="menu-horizontal">
                <li><a href="../index.php" class="link">Inicio</a></li>
                <li><a href="" class="link">Diseños</a></li>
                <li><a href="" class="link">Diseñar</a></li>
                <li><a href="#NOSOTROS" class="link">Nosotros</a></li>
                <li><a href="" class="link">Support</a></li>

                <ul class="menu-horizontal-2">
                    <li><a href="#" class="link"><img src="../imagenes/fotos/usuario.png" alt="" class="icon"></a></li>
                    <li><a href="#" class="link-2">Registrarse</a></li>
                </ul>
            </ul>
        </nav>
        
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>

<div class="data-container">
    <form action="welcome.php" method="post" class="data">
            <div class="profile-container">
                <img src="./images/usuario.png" id="image">
                <h2 id="name"><?php echo $name; ?></h2>
                <p id="email"><?php echo $email; ?></p>
                <a href='logout.php' id="row" class="logout">Sign out</a>
            </div>
        </form>
    </div>
</body>
</html>