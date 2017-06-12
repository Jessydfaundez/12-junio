<?php include('head.php') ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('https://jessydfaundez.github.io/Prueba-24-04/img/header.jpg')">
        <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="site-heading">
                      <h1>Antecedentes</h1>
                      <hr class="small">

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <section>
                  <h2>Antecedentes</h2>
                  <?php
                  // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
                  $csv = array_map('str_getcsv', file('data/antecedentes.csv'));
                  // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
                  array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
                  array_shift($csv);
                  // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
                  // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
                  for($a = 0; $a < $total = count($csv); $a++){?>
                    <article class="row">
                      <hr>
                      <div class="col-sm-12">
                        <h3> <?php echo $csv[$a]['id'];?>. <?php echo $csv[$a]['nombre'];?></h3>
                        <div><img src="<?php echo $csv[$a]['imagen'];?>" class="img-responsive"></div>
                        <!--<h6>Agreguen aquí la información en Data</h6>-->
                        <p><strong>Descripción: </strong><?php echo $csv[$a]['descripcion'];?></p>

                        <h5 class="link"><a href="<?php echo $csv[$a]['link'];?>">Link del Proyecto</a></h5>


                      </div>
                    </article>
                  <?php };?>

                  </section>
                </div>
            </div>
        </div>
    </article>

    <hr>

    <!-- Footer -->
    <?php include('footer.php') ?>
