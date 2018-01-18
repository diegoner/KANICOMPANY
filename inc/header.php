
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html">
        <title><?php echo $tituloPagina; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
                background: #ff33ff;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">kANiIPrImOoOh</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if ($pagina == "inicio") {echo "class='active'";}?>><a href="index.php">INISIO</a></li>
            <li <?php if ($pagina == "nosotros") {echo "class='active'";}?>><a href="nosotros.php">LAPENIITIA</a></li>

            <li <?php if ($pagina == "contacto") {echo "class='active'";}?>><a href="contacto.php">CNTKTO</a></li>
            <li <?php if ($pagina == "contacto") {echo "class='active'";}?>><a href="registrate.php">REJISTRTEeee</a></li>
          </ul>
            <form action="revisar.php" method="post" class="navbar-form navbar-right" role="form">
            <div class="form-group">
                <input name="usuario" type="text" placeholder="KoRrEOoO" class="form-control">
            </div>
            <div class="form-group">
                <input name="clave" type="password" placeholder="CNTRaA" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">XANELA</button>
          </form>
            
            
            
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
