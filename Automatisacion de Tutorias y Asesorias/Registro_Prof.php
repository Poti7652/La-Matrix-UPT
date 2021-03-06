<?php 
	ini_set('date.timezone', 'America/Mexico_City');
	$TiempoFecha = date('Y-m-d', time());
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
</head>
<body onload="mueveReloj()">
<div class="container-fluid" style="background-color: #FFC300;">
	<div class="row">
		<div class="col-md-5">
			<img src="imgs/logo-uni.png" width="100px" height="100px" class="media">
		</div>
		<div class="col">
			<br>
			<h1 class="page-header">Tutores / Asesores</h1>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <!--Menu desplegable de Tutorias Individuales-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorias Individuales</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Tutoria_Ind.php">Registrar Tutoria</a>
            <a class="dropdown-item" href="phpregister/MostrarTutInd.php">Mostrar Tutorias</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <!--Menu despegable Tutorias Grupaes-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tutorias Grupales</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Tutoria_Grup.php">Insertar Tutoria</a>
          <a class="dropdown-item" href="phpregister/MostrarTutGrup.php">Mostrar Tutorias</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <!--Menu despegable Encuestas de Satisfaccion-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Encuestas de Satisfaccion</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Encuestas_Sat.php">Registrar Encuesta</a>
            <a class="dropdown-item" href="phpregister/MostrarEncuestas.php">Mostrar Encuestas</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <!--Menu despegable Asesoria-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Asesorias</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Asesorias.php">Registrar Asesoria</a>
            <a class="dropdown-item" href="phpregister/MostrarAseso.php">Mostrar Asesoriass</a>
        </div>
      </li>
      <!--Final de el Menu despegable-->
      <li class="nav-item active">
        <a class="nav-link" href="Reportes.php">Reportes<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Registro_Alum.php">Alumnos<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="Registro_Prof.php">Profesor<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Registro_Tut.php">Tutores<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href=""><?php echo $TiempoFecha;?></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" name="form_reloj">
      <input type="text" name="reloj" size="10" class="form-control"> 
    </form>
  </div>
</nav>
<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<div class="card card-body">
				<form class="form" action="phpregister/registro_Prof.php" method="post">
					<div class="form-group">
						<h6>Registro Profesor</h6>
						<input class="form-control" type="text" name="prof" placeholder="Nombre del Profesor" autocomplete="off" id="Nom">
					</div>
					<br>
					<div class="form-group">
						<h6>No. de Seguro Social</h6>
						<input class="form-control" type="text" name="no_seg" placeholder="Numero de seguro social" autocomplete="off" id="nu-seg">
					</div>
					<br>
					<div class="form-group">
						<h6>Correo Electronico</h6>
						<input class="form-control" type="text" name="corre" placeholder="Correo Electronico" autocomplete="off" id="correo">
					</div>
					<br>
					<div class="form-group">
						<h6>Telefono</h6>
						<input class="form-control" type="text" name="telef" placeholder="Telefono celular/casa" autocomplete="off" id="tel">
					</div>
					<br>
					<div class="form-group">
						<h6>Grupo</h6>
						<input class="form-control" type="text" name="grupo" placeholder="Grupo" autocomplete="off" id="Grupo">
					</div>
					<br>
					<div class="form-group">
						<h6>Horario</h6>
						<input class="form-control" type="text" name="hora" placeholder="Horario escolar" autocomplete="off" id="Hor">
					</div>
					<br>
					<div class="form-group">
						<input type="submit" value="Registrar" class="btn btn-primary">
						<input type="reset" value="Limpiar" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<br>
<div class="container-fluid" style="background-color: gray;">
	<br>
	<br>
	<br>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--SCRIPT DEL RELOJ-->
<script language="JavaScript"> 
function mueveReloj(){ 
   	momentoActual = new Date() 
   	hora = momentoActual.getHours() 
   	minuto = momentoActual.getMinutes() 
   	segundo = momentoActual.getSeconds() 

   	horaImprimible = hora + " : " + minuto + " : " + segundo 

   	document.form_reloj.reloj.value = horaImprimible 

   	setTimeout("mueveReloj()",1000) 
} 
</script>
<!--FIN DEL SCRIPT DEL RELOJ-->
<script type="text/javascript" src="js/bootstrap-validate.js"></script>
<script type="text/javascript">
	bootstrapValidate('#Nom', 'require:Este campo es necesario')
	bootstrapValidate('#Nom', 'alpha:Solo caracteres')
	bootstrapValidate('#Grupo', 'min:6:Introdusca minimo 6 caracteres')
	bootstrapValidate('#Grupo', 'max:7:Introdusca maximo 6 caracteres')
	bootstrapValidate('#tel', 'numeric:Solo Numeros Para el Numero de Telefono')
	bootstrapValidate('#correo', 'email:Introdusca un Correo Electronico Valido')
</script>
</body>
</html>