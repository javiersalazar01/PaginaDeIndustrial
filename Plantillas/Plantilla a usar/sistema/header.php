<head>
	<title>Noticias Depatarmento Industrial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">
 <script type="text/javascript"  language="javascript"  src="assets/js/modificar.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
  <script type="text/javascript">
$("#upfile1").click(function () {
    $("#file1").trigger('click');
});

  </script>
</head>
<body>

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav"> 
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Agregar
        <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="agregarnoticias.php">Noticias</a></li>
            <li><a href="agregareventos.php">Eventos</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Ver
        <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="vernoticias.php">Noticias</a></li>
            <li><a href="vereventos.php">Eventos</a></li>
          </ul>
        </li>
        <li><a href="cerrarsesion.php">Cerrar Sesión</a></li>
      </ul>
    </div>
  </div>
</nav>