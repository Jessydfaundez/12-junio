<?php include('head.php') ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('https://jessydfaundez.github.io/Prueba-24-04/img/header.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Visualizaciones</h1>
                        <hr class="small">

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <?php
              // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
              $csv = array_map('str_getcsv', file('data/vis.csv'));
              // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
              array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
              array_shift($csv);
              // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
              // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
              for($a = 0; $a < $total = count($csv); $a++){?>

              <?php };?>

              <article class="row">

                <div class="col-sm-12">
                  <h3>Búsquedas de Combarbalá</h3>
                  <p><img src="vis/combarbala.svg" class="img-responsive">  </p>

                  <p>Número de búsquedas de "Combarbalá" en Google, desde el 15 de mayo al 5 de Junio</p>

                  <h5 class="link"><a href="https://trends.google.es/trends/explore?date=2017-05-15%202017-06-05&q=%2Fm%2F0cxmyz">Datos</a></h5>
                  <hr>

                <h3>Combarbalá según TripAdvisor</h3>
                <p><img src="vis/tripadvisor.svg" class="img-responsive"></p>

                <p>Servicios turísticos que tiene Combarbalá según las categorías de TripAdvisor</p>

                <h5 class="link"><a href="https://www.tripadvisor.cl/Tourism-g1675374-Combarbala_Coquimbo_Region-Vacations.html">Datos</a></h5>
                <hr>

                <h3>Observatorios en Chile</h3>
                <p><img src="vis/observatorios.svg" class="img-responsive"></p>

                <p>Lista de observatorios astronómicos de Chile por región y ciudad, los cuales son puntos turísticos.</p>

                <h5 class="link"><a href="http://primerfoton.cl/2016/11/15/observatorios-astronomicos-que-puedes-visitar-en-chile/">Datos</a></h5>

              </div>
              </article>

                </div>
            </div>
        </div>
  <?php include('footer.php') ?>
