<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabriela - Art</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos/styles.css">
</head>
<body>
  <header>
    <div class="imagen">
        <img src="./img/img/GABRIELA-LOGO2.png" alt="">
    </div>
  </header>
  <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="listarencards.php">Todos los productos</a>
                <a href="escultura.php">Esculturas</a>
                <a href="dibujos.php">Dibujos</a>
                <a href="cuadros.php">Cuadros</a>
                <a href="grabados.php">Grabados</a>
            </div>
          </div>
        </div>
  </nav>
  <section>
    
    <div>
      <div>
        <div>
          <h1>Tienda de Arte Online</h1>
        </div>
        <div>
          <img src="./ropa.jpeg" alt="" style="width: 100%;">
        </div>
      </div>
    </div>
    
  </section>
  <?php require('./layout/footer.php') ?>      
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>