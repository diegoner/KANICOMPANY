<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        ﻿<?php include('inc/funciones.php'); ?>
           
<?php 
$id = $_REQUEST['id'];
$tituloPagina = "Catálogo";
$pagina = "catalogo";

include('inc/header1.php'); ?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
		<h1>KTALOJO D KNISJEJJEJE</h1>
		<p>¡DSFRUTA D NSTRS MS MJRES KNI MS UAPO DL VRRIOKIDEJAJA! PIYAT LS KNIS PROM KES TN TO VRATO SUPRIMOHhHhhhHh.</p>
		<p><a class="btn btn-primary btn-lg"> MRAT ALJUNO +JJAJAJ &raquo;</a></p>
		</div>
	</div>

	<!--Ofertas-->
	
		<div class="container">

			<div class="row">
			<?php foreach ($ofertas as $oferta_id =>$oferta){
			echo "<form action='precompra.php?cani=$oferta_id&id=$id' method='post'>";
                        echo "<input type='submit' name='submit'>";
                        echo "</form>";
                        echo portada($oferta_id, $oferta);
                        
			}?>
			</div>
			
			<hr>
			
			
			
<?php include('inc/footer.php'); ?>  
        
        
    </body>
</html>
