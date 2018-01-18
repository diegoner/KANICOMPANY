 <?php include('inc/funciones.php'); ?>

<?php 
if(isset($_GET["id"])){
    $oferta_id = $_GET["id"];
    if(isset($ofertas[$oferta_id])){
    $oferta = $ofertas[$oferta_id];
    }
}else{
	header("Location: catalogo.php");
	exit();
}

$tituloPagina = "Catálogo";
$pagina = "oferta";

include('inc/header1.php'); ?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
        <div class="col-md-8">
        <p><img src="<?php echo $oferta["imagen"]; ?>" alt="<?php echo $oferta["nombre"]; ?>"><p>
            <h2><?php echo $oferta["nombre"]; ?></h2>
            <p><?php echo $oferta["descripcion"]; ?></p>
            </div>

            <div class="col-md-4">
            <p><a class="btn btn-warning" href="#">Comprar: Antes <?php echo $oferta["precio"] ?>
            <strong> Ahora <?php echo $oferta["precioOferta"]; ?></strong></a></p>
            </div>
            </div>
            </div>


      
<?php include('inc/footer.php'); ?>  