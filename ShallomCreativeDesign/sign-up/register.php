<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './vendor/phpmailer/phpmailer/src/exception.php';
    require './vendor/phpmailer/phpmailer/src/oauth.php';
    require './vendor/phpmailer/phpmailer/src/smtp.php';


    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: welcome.php");
        die();
    }

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    include 'config.php';
    $msg = "";

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
        $code = mysqli_real_escape_string($conn, md5(rand()));

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
            $msg = "<div class='alert alert-danger'>{$email} - Esta dirección de correo electrónico ya existe.</div>";
        } else {
            if ($password === $confirm_password) {
                $sql = "INSERT INTO users (name, email, password, code) VALUES ('{$name}', '{$email}', '{$password}', '{$code}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "<div style='display: none;'>";
                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'acunafernando592@gmail.com';                     //SMTP username
                        $mail->Password   = 'secret';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom('acunafernando592@gmail.com');
                        $mail->addAddress($email);

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'no reply';
                        $mail->Body    = 'Aquí está el enlace de verificación. <b><a href="http://localhost/ShallomCreativeDesign/Sign-up/?verification='.$code.'">http://localhost/ShallomCreativeDesign/Sign-up/?verification='.$code.'</a></b>';

                        $mail->send();
                        echo 'El mensaje ha sido enviado';
                    } catch (Exception $e) {
                        echo "No se pudo enviar el mensaje. Error de envío: {$mail->ErrorInfo}";
                    }
                    echo "</div>";
                    $msg = "<div class='alert alert-info'>Le hemos enviado un enlace de verificación a su dirección de correo electrónico.</div>";
                } else {
                    $msg = "<div class='alert alert-danger'>Algo salió mal.</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Su primera Contraseña no coincide con la segunda</div>";
            }
        }

      
        
    }

   

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login Form - Brave Coder</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css"/>
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>
<style>
    * {
       margin: 0;
       padding: 0;
       box-sizing: border-box;
    }

    .container {
    max-width: 880px;
    margin: auto;
    height: 83vh;
    }  


    input {
        height: 56.5px;
    }
</style>
<body>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="./images/Neutral Minimalist Social Media Digital Product Carousel Instagram Post.png" alt="">
                            <?php echo $msg; ?>
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Registrarse</h2>
                        <form action="" method="post">
                            <input type="text" class="name" name="name" placeholder="Ingresa tu nombre" value="<?php if (isset($_POST['submit'])) { echo $name; } ?>" required>
                            <input type="email" class="email" name="email" placeholder="Ingresa tu correo" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
                            <input type="password" class="password" name="password" placeholder="Ingresa tu contraseña" required>
                            <input type="password" class="confirm-password" name="confirm-password" placeholder="Confirma tu contraseña" required>
                            <button name="submit" class="btn" type="submit">Registrarse</button>
                        </form>
                        <div class="social-icons">
                            <p>Inicia sesion! <a href="index.php">Iniciar sesion</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

</body>

</html>