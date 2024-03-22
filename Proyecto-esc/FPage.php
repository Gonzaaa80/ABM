<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--CSS-->

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css?6" />
    <!--JS-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://kit.fontawesome.com/5ec6417538.js" crossorigin="anonymous"></script>
    <script src="JavascriptFP.js?65" defer></script>
    <title>Pasealo</title>
    <link rel="icon" href="Sources/dog-solid-24.ico">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="container1">
          <header class="header">
            <div class="iconsec">
              <i class="bx bxs-dog"></i>
              <p class="name">pasealo</p>
            </div>
            <div class="nav_bar">
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-primary">inicio</button>
                <button type="button" class="btn btn-secondary"><a href="#cliente">Cliente</a></button>
                <button type="button" class="btn btn-secondary"><a href="#paseador">Paseador</a></button>
              </div>
              
            </div>
          </header>
          <div class="row main">
            <div class="col-sm-12 col-12 col-lg-7 description">
              <h1>
                El paseo que <br />
                necesitas
              </h1>
              <p>
                Nuestra motivación principal radica en mejorar la calidad de vida de los perros y sus dueños. Creemos firmemente en el vínculo especial que existe entre las mascotas y sus familias humanas, y queremos contribuir a fortalecer esa relación proporcionando un servicio de paseo de perros excepcional que brinde tranquilidad y felicidad a ambos.
              </p>
            </div>
            <div class="col-lg-5 img_p">
              <img src="Sources/perro1.png" alt="" class="perro " />
            </div>
            </div>
          </div>
           <!--CONTACTO-->
           <div class="container text-center ">
            <div class="contenido cl">
           <div class="row" >
            <div class="col-12">
              <h1 class="title-c" id="cliente">El cliente</h1>
              <p class="p-c">
                En PASEALO, entendemos lo importante que es para ti brindarle a tu mascota los
                cuidados y atención que se merece. Por eso, hemos creado un servicio de paseo de
                perros único y flexible, diseñado para adaptarse a tus necesidades y las de tu
                peludo amigo.
              </p>
            </div>
           </div>
          
            <div class="row">
              <!--COLUMNA1-->
              <div class="col-sm-12 col-12 col-lg-8">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Elige a tu paseador
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong
                        >Con nosotros, tienes la libertad de seleccionar al paseador que más te
                        guste.
                      </strong>
                      Contamos con una amplia red de paseadores profesionales y amantes de los
                      perros, cada uno con su propia experiencia y estilo. Puedes revisar los
                      perfiles de nuestros paseadores y elegir aquel que mejor se ajuste a tus
                      preferencias y las necesidades de tu mascota.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Coordina a través de WhatsApp
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Una vez que hayas seleccionado a tu paseador ideal, coordinar el servicio
                        es fácil y conveniente. Todo lo que necesitas hacer es contactarnos a
                        través de WhatsApp. Nuestro equipo estará disponible para responder a tus
                        preguntas, programar los paseos según tu horario y asegurarse de que cada
                        detalle esté perfectamente organizado.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Disfruta de la tranquilidad
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        Con PASEALO, puedes relajarte sabiendo que tu perro está en buenas manos.
                        Nuestros paseadores están comprometidos a proporcionar paseos seguros,
                        divertidos y estimulantes para tu mascota. Durante el paseo, recibirás
                        actualizaciones regulares sobre cómo va todo, para que puedas estar
                        tranquilo/a y seguir con tus actividades diarias con total confianza.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <!--COLUMNA2-->
              <div class="col-sm-12 col-12 col-lg-4 divp">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="Sources/perro slider1.jpg" class="d-block w-100" alt="perro1">
                    </div>
                    <div class="carousel-item">
                      <img src="Sources/perroslider2.jpg" class="d-block w-100" alt="perro2">
                    </div>
                    <div class="carousel-item">
                      <img src="Sources/perro slider1.jpg" class="d-block w-100" alt="perro3">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
            </div>

             <!--PASEADOR-->
             <div class="contenido cl">
            <div class="row" >
              <div class="col-12">
                <h1 class="title-c" id="paseador">El Paseador</h1>
                <p class="p-c">
                  En PASEALO, entendemos lo importante que es para ti brindarle a tu mascota los
                  cuidados y atención que se merece. Por eso, hemos creado un servicio de paseo de
                  perros único y flexible, diseñado para adaptarse a tus necesidades y las de tu
                  peludo amigo.
                </p>
              </div>
             </div>
            
              <div class="row">
                <!--COLUMNA1-->
                <div class="col-sm-12 col-12 col-lg-8">
                  <div class="accordion" id="accordionExample1">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Conexión directa con los clientes
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                          Con nuestro sistema, tendrás la oportunidad de comunicarte directamente con los clientes a través de WhatsApp. Esta comunicación directa te permite establecer una relación más cercana con ellos, entender mejor las necesidades de sus mascotas y brindar un servicio personalizado que garantice su satisfacción.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Apoyo y respaldo
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                          En PASEALO, nos preocupamos por tu bienestar y el de las mascotas que cuidas. Por eso, nuestro equipo está siempre disponible para brindarte apoyo ante cualquier inconveniente que puedas enfrentar durante tus paseos. Ya sea una emergencia médica con la mascota o cualquier otra situación, puedes contar con nosotros para proporcionarte la asistencia necesaria.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Flexibilidad y autonomía
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                          Reconocemos que cada paseador tiene sus propias preferencias y horarios. Por eso, te ofrecemos la flexibilidad para elegir tus propios horarios y áreas de trabajo. Tú decides cuándo y dónde trabajar, para que puedas encontrar el equilibrio perfecto entre tu vida personal y profesional.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <!--COLUMNA2-->
                <div class="col-sm-12 col-12 col-lg-4 divp">
                  <div id="carouselExampleAutoplaying1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="Sources/perro slider1.jpg" class="d-block w-100" alt="perro1">
                      </div>
                      <div class="carousel-item">
                        <img src="Sources/perroslider2.jpg" class="d-block w-100" alt="perro2">
                      </div>
                      <div class="carousel-item">
                        <img src="Sources/perro slider1.jpg" class="d-block w-100" alt="perro3">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
              </div>
          </div>
        
    <div class="gotop-cont">
      <div class="gotop">
        <i class="fa-solid fa-chevron-up"></i>
      </div>
    </div>
    <!--
    <footer class="row">
      <div class="col-12">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5ce6da" fill-opacity="1" d="M0,96L20,117.3C40,139,80,181,120,202.7C160,224,200,224,240,197.3C280,171,320,117,360,117.3C400,117,440,171,480,208C520,245,560,267,600,277.3C640,288,680,288,720,266.7C760,245,800,203,840,197.3C880,192,920,224,960,218.7C1000,213,1040,171,1080,149.3C1120,128,1160,128,1200,154.7C1240,181,1280,235,1320,218.7C1360,203,1400,117,1420,74.7L1440,32L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
      </svg>
    </div>
      
    </footer>
  -->
  </body>
</html>
