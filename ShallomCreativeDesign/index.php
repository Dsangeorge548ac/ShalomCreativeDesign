<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Font Awesome CDN-->
    <link
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
    <!-- Stylesheet -->
</head>
<body>
    
    <header>

        <div class="container__header">	

            <div class="logo">
                <img src="./imagenes/fotos/3-removebg-preview.png" alt="">
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="./camisa/index.html">Diseñar camiseta</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#Contacto">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            <i class="fa-solid fa-bars" id="icon_menu"></i>
            <div class="header__register">
                <a href="./Sign-up/index.php" class="link"><img src="./imagenes/fotos/usuario.png" alt="" class="icon"></a>
                <input type="button" class="btn__header-register" onclick="redireccionar()" style="font-weight: bold;" value="Registrarse">
            </div>
        </div>

    </header>

    <main>

        <div class="cover">

            <div class="text__information-cover">
                <p class="h1">Bienvenido a Shalom Creative Design</p>

                <p>Vaya más allá de informar sobre datos históricos. Utilice la inteligencia procesable de cada
                    evento digital para impactar positivamente en los resultados comerciales. Continuamente. En
                    tiempo real. A escala.</p>

                <div class="buttons__cover">
                    <input type="button" class="btn__readMore-cover" style="font-weight: bold;" value="Leer más">
                    <input type="button" class="btn__register-cover" style="font-weight: bold;" onclick="redireccionar()" value="Registrarse">
                </div>

            </div>

            <div class="media__cover">
                <video src="media/animacion_cover.webm" autoplay playinline loop muted preload="auto"></video>
            </div>


        </div>

        <div class="container__banner">
            
            <div class="banner">
                <div class="banner__icon-heart">
                    <img src="media/heart_notify.png" id="icon_heart" alt="">
                </div>
                <div class="banner__icon-fire">
                    <img src="media/fire-dynamic-color.png" id="icon_fire" alt="">
                </div>
                <div class="banner__text">
                    <h2>En Shalom Creative Design te ofrecemos la oportunidad de poder diseñar tu propia camiseta de manera gratuita</h2>
                    <a href="#">Leer más</a>
                </div>
            </div>

        </div>


        
        <div class="carrusel-contenedor">
            <p class="carrusel-titulo">Diseños Creados</p>
            <br>
                <div class="contenedor-carrusel">
                    <div class="container">
                        <div class="slider-wrapper">
                          <button id="prev-slide" class="slide-button material-symbols-rounded">
                            chevron_left
                          </button>
                          <ul class="image-list">
                            <img class="image-item" src="./imagenes/fotos/camisetas/camiseta de mujer.webp" alt="img-1" />
                            <img class="image-item" src="./imagenes/fotos/camisetas/camiseta-manga-larga.png" alt="img-2" />
                            <img class="image-item" src="./imagenes/fotos/camisetas/camiseta de nirvana.png" alt="img-3" />
                            <img class="image-item" src="./imagenes/fotos/camisetas/camiseta-mtv.webp" alt="img-4" />
                            <img class="image-item" src="./imagenes/fotos/camisetas/camiseta pac man.webp" alt="img-5" />
                            <img class="image-item" src="./imagenes/fotos/camisetas/camseta-1.jpg" alt="img-6" />
                          </ul>
                          <button id="next-slide" class="slide-button material-symbols-rounded">
                            chevron_right
                          </button>
                        </div>
        
                        <div class="slider-scrollbar">
                          <div class="scrollbar-track">
                            <div class="scrollbar-thumb"></div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>



              <section class="seccion-2" id="Contacto">
                <div class="area">
                <div class="contenedor">
                    <div class="contacto">
                        <p class="titulo-2">Contacto</p>
                        <p class="campo-de-texto-2">
                            Lorem ipsum, dolor sit amet coknsectetur adipisicing elit Cupiditate, autem animiipsum dolor sit amet coknsectetur adipisicing elit Cupiditate, autem animi ipsum, dolor amet coknsectetur adipisicing.
                        </p>
                    </div>
                </div>
            
                      <div class="contenedor">
                        <form action="enviar.php" method="POST">
                            <div class="contenido-contacto">
                                
                                <br>
                                <label for="username">Full name</label>
                                <input type="text" class="input-contacto" placeholder="Name" id="name" name="name" required>
                        
                                <label for="username">Email</label>
                                <input type="email" class="input-contacto" placeholder="Email or phone" id="email" name="email" required >
                        
                                <label for="pasword">Message</label>
                                <textarea name="message" id="message" class="input" required></textarea>
                                <input type="submit" class="boton-mensaje">
            
                                <div class="footer-content">
                                    <div class="icon-social">
                                        <a href="https://tr.ee/fk1eKXsTTY"><img src="https://png.pngtree.com/element_our/md/20180509/md_5af2d4c95ac7b.jpg" class="boton-social" alt=""></a>
                                        <a href="https://www.instagram.com/fabrimine.ca/"><img src="https://w7.pngwing.com/pngs/519/326/png-transparent-black-and-white-dark-grey-instagram-transparent-on-dark-grey-icon.png" class="boton-social" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </form>          
                    </div>
                </div>  
            </section>
        </main>

    <footer>
        <li>©2023 ShalomCreativeDesign.Todos los derechos</li>
        <li><a href="#">Privacidad</a></li>
        <li><a href="#">Términos de venta</a></li>
        <li><a href="#">Términos de uso del sitio web</a></li>
        <li><a href="#">Adhesiones y vinculación con las redes sociales</a></li>
        <li><a href="#">Preferencias de cookies</a></li>
    </footer>

   

    <script src="js/script.js"></script>
    <script>
        const initSlider = () => {
            const imageList = document.querySelector(".slider-wrapper .image-list");
            const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
            const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
            const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
            const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
            
            // Handle scrollbar thumb drag
            scrollbarThumb.addEventListener("mousedown", (e) => {
                const startX = e.clientX;
                const thumbPosition = scrollbarThumb.offsetLeft;
                const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
                
                // Update thumb position on mouse move
                const handleMouseMove = (e) => {
                    const deltaX = e.clientX - startX;
                    const newThumbPosition = thumbPosition + deltaX;
        
                    // Ensure the scrollbar thumb stays within bounds
                    const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                    const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
                    
                    scrollbarThumb.style.left = `${boundedPosition}px`;
                    imageList.scrollLeft = scrollPosition;
                }
        
                // Remove event listeners on mouse up
                const handleMouseUp = () => {
                    document.removeEventListener("mousemove", handleMouseMove);
                    document.removeEventListener("mouseup", handleMouseUp);
                }
        
                // Add event listeners for drag interaction
                document.addEventListener("mousemove", handleMouseMove);
                document.addEventListener("mouseup", handleMouseUp);
            });
        
            // Slide images according to the slide button clicks
            slideButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const direction = button.id === "prev-slide" ? -1 : 1;
                    const scrollAmount = imageList.clientWidth * direction;
                    imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
                });
            });
        
             // Show or hide slide buttons based on scroll position
            const handleSlideButtons = () => {
                slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
                slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
            }
        
            // Update scrollbar thumb position based on image scroll
            const updateScrollThumbPosition = () => {
                const scrollPosition = imageList.scrollLeft;
                const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
                scrollbarThumb.style.left = `${thumbPosition}px`;
            }
        
            // Call these two functions when image list scrolls
            imageList.addEventListener("scroll", () => {
                updateScrollThumbPosition();
                handleSlideButtons();
            });
        }
        
        window.addEventListener("resize", initSlider);
        window.addEventListener("load", initSlider);


        /*funcion de redireccion del input*/
        function redireccionar () {
            location.href="./Sign-up/register.php";
        }
    </script>
</body>
</html>
