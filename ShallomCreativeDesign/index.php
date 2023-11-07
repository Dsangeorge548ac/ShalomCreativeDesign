<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/boostrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome CDN-->
    <link
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
    <!-- Stylesheet -->
    <title>Document</title>
</head>
<style>

section {
    height: auto;
    width: 100%;
    display: grid;
    place-items: center;
  }

  .row {
    display: flex;
    overflow-y:auto;
    width: 90%;
  }
  
  .row::-webkit-scrollbar {
    background-color: rgb(206, 206, 206);
    margin: 20px;
    height: 3.5px;
    border-radius: 10px;
    cursor: pointer;
  }

  .row::-webkit-scrollbar-thumb {
    background-color: rgb(0, 0, 0);
    width: 3.5px;
    border-radius: 10px;
    padding-left: 10em;
    cursor: pointer;
  }

  .row::-webkit-scrollbar-button {
    display: none;
  }

  .column {
    width: 100%;
    padding: 1em 1em 1em 1em;
    text-align: center;
  }
  .card {
    width: 100%;
    height: 100%;
    padding: 2em 1.5em;
    background: linear-gradient(#ffffff 50%, #2c7bfe 50%);
    background-size: 100% 200%;
    background-position: 0 2.5%;
    border-radius: 5px;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    transition: 0.5s;
  }
  h3 {
    font-size: 20px;
    font-weight: 600;
    color: #1f194c;
    margin: 1em 0;
  }
  p {
    color: #575a7b;
    font-size: 15px;
    line-height: 1.6;
    letter-spacing: 0.03em;
  }
  .icon-wrapper {
    background-color: #2c7bfe;
    position: relative;
    margin: auto;
    font-size: 30px;
    height: 2.5em;
    width: 2.5em;
    color: #ffffff;
    border-radius: 50%;
    display: grid;
    place-items: center;
    transition: 0.5s;
  }
  .card:hover {
    background-position: 0 100%;
  }
  .card:hover .icon-wrapper {
    background-color: #ffffff;
    color: #2c7bfe;
  }
  .card:hover h3 {
    color: #ffffff;
  }
  .card:hover p {
    color: #f0f0f0;
  }
  @media screen and (min-width: 768px) {
    section {
      padding: 0 2em;
    }
    .column {
      flex: 0 50%;
      max-width: 50%;
    }
  }
  @media screen and (min-width: 992px) {
    section {
      padding: 1em 3em;
    }
    .column {
      flex: 0 0 33.33%;
      max-width: 33.33%;
    }
  }
</style>
<body>

    <header id="header">
        <h1><img src="./imagenes/fotos/3-removebg-preview.png" alt="" class="logo"></h1>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul class="menu-horizontal">
                <li><a href="#" class="link">Inicio</a></li>
                <li><a href="" class="link">Diseños</a></li>
                <li><a href="" class="link">Diseñar</a></li>
                <li><a href="#NOSOTROS" class="link">Nosotros</a></li>
                <li><a href="" class="link">Support</a></li>

                <ul class="menu-horizontal-2">
                    <li><a href="./Sign-up/index.php" class="link"><img src="./imagenes/fotos/usuario.png" alt="" class="icon"></a></li>
                    <li><a href="./Sign-up/register.php" class="link-2">Registrarse</a></li>
                </ul>
            </ul>
        </nav>
        
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>
    
<div class="contenedor-principal">
    <div class="slide-contenedor">
        <section class="seccion" style="margin-bottom: 22em; width:100%; margin-top:5em; display:none;">
            <div class="parrafo">
                <p class="titulo">Bienvenido a Forest Store</p><br>
                <P class="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan aliquam ex sit amet egestas.</P><br>
            </div>

            <div class="gallery" style="display: none;">
                <div class="image image3"></div>
                <div class="image image4"></div>
                <div class="image image1"></div>
            </div>
        </section>
    
        <div class="fade">
            <video autoplay muted loop class="video-container">
                <source src="./imagenes/fotos/SnapInsta.io-Your Last Layer.mp4" type="video/mp4">
              </video>
        </div>
    </div>


    <div class="slide-contenedor">
        <section class="seccion">
            <div class="parrafo">
                <p class="titulo-2">Diseña tu propia camiseta o sudadera</p><br>
                <P class="texto-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</P><br>
                <div class="botones" style="justify-content: center;">
                    <button class="button-2">Crear Diseño</button>
                    <button class="button-2">Ver Diseños</button>
                </div>
            </div>
        </section>
    <div class="fade-2"></div>
</div>
    
<div class="carrusel-contenedor">
    <h2 class="carrusel-titulo">Diseños Creados</h2>
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

<section style="background: white;">
    <br><br><br><br>
    <div class="row">
        <p class="titulo" style="text-align: center; width:100%;">Servicios</p><br>
    </div>
    <br><br>
    <div class="row">
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="fas fa-hammer"></i>
          </div>
          <h3>Service Heading</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
            consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="fas fa-brush"></i>
          </div>
          <h3>Service Heading</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
            consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="fas fa-wrench"></i>
          </div>
          <h3>Service Heading</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
            consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="fas fa-truck-pickup"></i>
          </div>
          <h3>Service Heading</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
            consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="fas fa-broom"></i>
          </div>
          <h3>Service Heading</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
            consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="fas fa-plug"></i>
          </div>
          <h3>Service Heading</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
            consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
    </div>
    <br><br>
  </section>

        <div class="slide-contenedor" id="NOSOTROS">
            <section class="seccion-2">
                <div class="parrafo-2">
                    <p class="titulo">Nosotros</p><br>
                    <P class="texto-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan aliquam ex sit amet egestas. Etiam blandit placerat auctor. Pellentesque ut auctor lectus. Etiam id justo orci. Mauris tempor lectus quis nunc molestie, interdum volutpat sem fringilla. Sed interdum ornare euismod. Vestibulum scelerisque eleifend diam eget consequat. Donec dignissim ligula nec nibh fringilla, in ultricies magna euismod. Sed posuere enim mi, ut pulvinar leo ornare a. 
                        In ut quam blandit, elementum magna ut, fermentum velit. Fusce dui ante, gravida vitae velit ut, egestas faucibus est. Suspendisse maximus convallis est et viverra. Donec tincidunt lectus dolor, vel feugiat justo vulputate vel. Quisque finibus consequat hendrerit. Ut feugiat tortor a turpis lobortis porta. In hac habitasse platea dictumst. Curabitur mollis lacus lectus, sed hendrerit ipsum mollis eget. Ut at odio vitae nulla tempus aliquet mattis vitae nibh. Pellentesque nec fringilla libero. Donec bibendum sapien id dictum porta. Nulla at massa vitae enim consectetur scelerisque. Quisque in suscipit justo. 
                        Vivamus bibendum eros ac turpis hendrerit cursus. Nullam placerat congue quam, nec porta ex malesuada sit amet. Nullam vulputate nisl elit, at convallis massa porta scelerisque. Nunc augue elit, lacinia et arcu non, lacinia consectetur libero. Maecenas finibus nec nibh at laoreet. Donec dictum leo vitae erat sagittis, nec volutpat felis elementum. Donec nibh risus, vestibulum non felis in, auctor sollicitudin nunc. Aliquam sit amet vestibulum augue. Vivamus faucibus, nisl in efficitur viverra, elit risus porta enim, bibendum ullamcorper erat ex in lectus. Duis tincidunt malesuada dui eu molestie. Morbi lectus magna, suscipit sed sagittis consequat, consequat ut quam.
                    </P>
                </div>
            </section>
                <div class="fade-3"></div>
            </div>
        </div>
    </div>
         
        
            <footer>
                <li>©2023 Abercrombie.Todos los derechos</li>
                <li><a href="#">Privacidad</a></li>
                <li><a href="#">Términos de venta</a></li>
                <li><a href="#">Términos de uso del sitio web</a></li>
                <li><a href="#">Adhesiones y vinculación con las redes sociales</a></li>
                <li><a href="#">Preferencias de cookies</a></li>
            </footer>
    </div>


    

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
        
    </script>

    <script src="./js/funciones.js"></script>
    
</body>
</html>