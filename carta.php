<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="shortcut icon" href="img/logoDonJuan.png" type="image/x-icon">
    <title>Don Juan | Carta</title>
    <?php include 'common/head.php' ?>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <?php include 'common/header.php' ?>
    <main class="main container flex-grow-1 d-flex justify-content-center">
      <section class="container my-4">
        <div class="row text-center my-4">
          <h2 class="h1">Carta</h2>
          <p class="fs-5">Sumérgete en un festín de sabores marinos frescos y vive la experiencia única que ofrecemos en cada bocado 🦈</p>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
          
        <?php include 'common/carta.php' ?>

        </div>  
      </section>
    </main>
  </body>
  <?php include 'common/footer.php' ?>
</html>