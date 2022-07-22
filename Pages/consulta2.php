
<!doctype html>
<html lang="en">
  <head>
    
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <form name="form" method="post" post="regristro.php">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../resource/BrandIcon.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Vacunás
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.html">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">LEER MAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Pages/Ingreso.html">INGRESE VACUNAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Pages/consulta.html">CONSULTAR VACUNAS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class=" col-5 text-center d-block mx-auto">
      <form name="form" method="post" action="consulta.php">
        
            <div class="mb-3">
                <label for="" class="form-label">ingrese cedula</label>
                <input type="text" name="cedula" class="form-control" id="" aria-describedby="emailHelp" required>
            </div>

                <button type="submit" name="button"class="btn btn-primary">consultar</button>
            </form>
          </form>
      </div>
          
      <?php

      include('consulta.php');
?>
      
      
          <!-- Bootstrap JavaScript Libraries -->
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
      
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        </body>
      </html>

     