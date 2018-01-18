<?php include('inc/funciones.php'); ?>

<?php
$tituloPagina = "KANICOMPANY";
$pagina = "inicio";

include('inc/header.php'); ?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 >KERE 1 KANI?¿¿?¿</h1>
        <p>JJAJA PA TI O PA TS AMIJS XD PA DNTRO O FUERA D KASA LOL SAKLE D PSEO </p>
        <p>TU KANI POE TNR ASTA 2 HESTO ANIMOJJAJA LOL</p>
        <P>K TPO D KANI KEREH SURMANOHHHHHHHH?¿?¿¿¿?¿?¿??</P>
        <p><a class="btn btn-primary btn-lg" href="#" role="button"> MRAT ALJUNO +JJAJAJ &raquo;</a></p>
      </div>
    </div>

<div class="container">

      <!-- Destacados -->

      <div class="row">
        <?php 
            $contador=1;
            $ofertas;
            while ($contador<=3 AND list($oferta_id, $oferta)= each($ofertas)){
                echo portada($oferta_id, $oferta);
                $contador++;
            }
        ?>
        
      </div>

      <hr>

    </div>
 
    <!-- /Destacados -->   

<?php include('inc/footer.php'); ?>   