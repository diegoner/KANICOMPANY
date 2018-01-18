
﻿<?php

function portada($oferta_id, $oferta){

$salida = "";
$salida = $salida.'<div class="col-lg-4">';
$salida = $salida.'<h2>'.$oferta["nombre"].'</h2>';
$salida = $salida.'<img src="'.$oferta["imagen"].'" alt="'.$oferta["nombre"].'"class="img-circle">';
$salida = $salida.'<p>'.$oferta["introDescripcion"].'</p>';
$salida = $salida.'<p><a class="btn btn-warning">Antes '.$oferta["precio"].
                  '<strong> Ahora '.$oferta["precioOferta"].'</strong></a></p></div>';

return $salida;

}

$ofertas = array();

$ofertas[001] = array(
"nombre" => "KANI BAILNGO",
"introDescripcion" => "PA 1S VAILESIKO CN LA YESSSSSIKAHHHHH",
"descripcion" => "CMPADRE SI KERE 1 AHUTNTIKO KANI DL FABRK STA S LA TULLA PRIMO TO TIRAO N FUNLA LS E BENDIO TOS JJJSJAAJA XDLOL",
"imagen" => "img/BAILA.jpg",
"precio" => "554 ¥",
"precioOferta" => "423 ¥"
);

$ofertas[002] = array(
"nombre" => "KANI DROJATA",
"introDescripcion" => "1 AUTNTIK DISIONARIO D DGAS I NFERMEDS BENIRIAS",
"descripcion" => "SI T PLLAS STE D RGALO T DMOS UNS JERNGAS I UNS LAIS CMPESINSA PA LS MONXIS LA VRD L + AUTNTIKO X LA RAZA",
"imagen" => "img/DROGAO.jpg",
"precio" => "0,33 ¥",
"precioOferta" => "0.30 ¥"
);

$ofertas[003] = array(
"nombre" => "KANI MJERR",
"introDescripcion" => "MJER COM LS K NO KDAN ERMNO RIAL (L)",
"descripcion" => "N STA OFRTA T DMOS 1 BMBO D REGLOOOOOOOOO (PAE DSCONOCIO) TTAL MNTE GRSTIISSSSSSS LOL WTF XD ",
"imagen" => "img/EMBARAZO.jpg",
"precio" => "3.216,67 ¥",
"precioOferta" => "2.953,99 ¥"
);

$ofertas[004] = array(
"nombre" => "KANI TUNIJ",
"introDescripcion" => "T ASJURAMS L COXE MS FLAMITA D TO EL BARRIO X LA RAZA",
"descripcion" => "ADMS SI T PILLS STE T RGALAMS SIEN LTRO GSOLNA PA K AGA L KANI KN EIA LO K KERA JJJAJAJAJALOL",
"imagen" => "img/TUNING.jpg",
"precio" => "20,00 ¥",
"precioOferta" => "19,99 ¥"
);

$ofertas[005] = array(
"nombre" => "KANI NALFABETO",
"introDescripcion" => "N L VIA ASTAO N LA SKUELA HULIO",
"descripcion" => "SI L K TU KERES S PDIR 1 LEURO STE S L TUIO I SI DISES 3 BZES VIVLIOTEK S DSMALLA",
"imagen" => "img/ANALFAB.jpg",
"precio" => "0,99 ¥",
"precioOferta" => "0,59 ¥"
);

$ofertas[006] = array(
"nombre" => "KANI GOLD",
"introDescripcion" => "SEL + XULIKO DL VRRIO XANELANDO",
"descripcion" => "KANI GOLD XPERTO N XULEARLE LS ORO A LS ABUS DL VRRIO - SI TENE - D VINTISETE COLIARE N L CUIEIO S TNGO LOKO",
"imagen" => "img/GOLD.jpg",
"precio" => "1.694¥",
"precioOferta" => "4.955 ¥"
);
?>
<?php 