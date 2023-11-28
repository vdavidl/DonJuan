<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="shortcut icon" href="img/logoDonJuan.png" type="image/x-icon">
    <title>Don Juan | Inicio</title>
    <?php include 'common/head.php' ?>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body class="d-flex flex-column min-vh-100">
    <?php include 'common/header.php' ?>
    <div id="mainContainer" class="container d-flex flex-grow-1 justify-content-center align-items-center">
      <main>
        <div class="d-flex flex-column flex-lg-row align-items-center">
          <div class="p-5">
            <div class="text-center">
              <h1 class="mt-5">Bienvenidos a Don Juan</h1>
              <p class="fs-5 px-4">
                "Tu destino para una auténtica experiencia culinaria peruana en el
                corazón de Chiclayo."
              </p>
            </div>
            <div class="d-flex tiburones justify-content-center gap-2">
              <img src="img/img-index/logo-izq.png" alt="Logo Izquierda" />
              <img src="img/img-index/logo-derch.png" alt="Logo Derecha" />
            </div>
          </div>

          <div class="carrusel">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/img-index/promotion_1.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/img-index/promotion_2.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/img-index/promotion_3.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/img-index/promotion_4.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/img-index/promotion_5.jpg" class="d-block" alt="...">
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
      </main>
    </div>
    <?php include 'common/footer.php' ?>
  </body>
</html>
