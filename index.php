<?php include('head.php') ?>


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('https://jessydfaundez.github.io/Prueba-24-04/img/header.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Combarbalá</h1>
                        <hr class="small">
                        <span class="subheading">¿Se puede incentivar el turismo en un pueblo desconocido?</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <?php
           $csv = array_map('str_getcsv', file('data/datos.csv'));
           array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
           array_shift($csv);
           ?>

           <?php for($a = 0; $a < $total = count($csv); $a++){?>
             <div class="col-lg-4"><img src="<?php echo $csv[$a]['img'];?>" class="img-responsive"></div>

             <div class="col-lg-8">
             <div class="post-preview">

                     <h2 class="post-title"><?php echo($csv[$a]["titulo"])?></h2>

                      <p><?php echo($csv[$a]["resumen"])?></p>

                      <p class="post-meta">Tags: <?php echo($csv[$a]["tags"]);?></p>
                      <h5><a href="single.php?url=<?php print($a)?>">Ver Más</a></h5>
                      <hr>
             </div>

                
             </div>
             <?php };?>
             <hr>


         </div>
     </div>
 </div>

<hr>

<?php include('footer.php') ?>
