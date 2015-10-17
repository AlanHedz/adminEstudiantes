<?php namespace Views;

$template = new Template();

class Template
{
	public function __construct()
	{
		
	
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Administración de estudiantes</title>
		<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/main.css">
		<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/style.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>		
	</head>
	<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Administración de Estudiantes</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo URL; ?>">Inicio</a></li>
		        <li><a href="<?php echo URL; ?>estudiantes">Estudiantes</a></li>
		        <li><a href="<?php echo URL; ?>secciones">Secciones</a></li
		      </ul>
		    </div>
		  </div>
		 </nav>
<?php
	}
	public function __destruct()
	{
?>
	<footer class="navbar-fixed-bottom">
	</footer>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
	</body>
		<script>
		$('.dropdown-toggle').dropdown();
		</script>
	</html>
<?php
	}
}

?>