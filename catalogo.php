<?php include('inc/funciones.php'); ?>

<?php 

$tituloPagina = "Catálogo";
$pagina = "catalogo";

include('inc/header.php'); ?>


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
			echo portada($oferta_id, $oferta);
			}?>
			</div>
			
			<hr>
			
			
			
<?php include('inc/footer.php'); ?>  