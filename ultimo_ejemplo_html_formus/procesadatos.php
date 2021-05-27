

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

	<link rel="stylesheet" href="css/estilosamiweb.css">

</head>

<body>

<div id="principal">
	<!-- <p>principal</p> -->
		<div id="cabecera">

					<img src="img/logo1portillo.jpeg" width="100" height="100" align="left" alt="mi_logo">
				 <h1 align="center">curso de programacion web</h1>
			<p align="center">Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Atque iste quasi temporibus consectetur aperiam wminus quis in beatae reprehenderit moglestiae, nostrum id nam ex ad, autem explicabo, laborum minima, sunt!</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A atque necessitatibus veritatis perferendis eum hic ad minus quod corporis veniam error optio, recusandae cum nemo, nulla illum in aspernatur soluta.</p>

		</div>


	<div id="menu2">
		<div id="menu">
			<ul>

				<li><a href="maquetacion.html">Inicio</a></li>

				<li><a href="quienes_somos.html">Quienes_Somos</a></li>

				<li><a href="servicios.html">servicios</a></li>

				<li><a href="contacto.html">Contacto</a></li>
			</ul>
	</div>
	</div>


	<div id="contenidoizq">
		<p><h4>TEST DE PROGRAMACION...</h4></p>

	<form name="fencuesta_frm" action="procesa-encuesta.php" method="GET">
	<label>SELECCIONA UNA OPCION:</label><br /><br />
	<label>1.-ES UN LENGUAJE DE PROGRAMACION:</label>
	<br /><br />
	<input type="radio" name="op1" value="java">JAVA<br />
	<input type="radio" name="op1" value="bien">HTML<br />
	<input type="radio" name="op1" value="deficiente">CSS<br />

	<label>2.-SE PROGRAMA DE EL LADO DEL CLIENTE:</label>
	<br /><br />
	<input type="radio" name="op2" value="bien">PHP<br />
	<input type="radio" name="op2" value="javascript">JAVA SCRIPT<br />
	<input type="radio" name="op2" value="deficiente">C++<br />
	A

	<label>3.-SE PROGRAMA DE EL LADO DEL SERVIDOR:</label>
	<br /><br />
	<input type="radio" name="op3" value="muy_bien">ANDROID<br />
	<input type="radio" name="op3" value="bien">HTML<br />
	<input type="radio" name="op3" value="php">PHP<br />

	<label>4.-ETIQUETA DE ENCABEZADO:</label>
	<br /><br />
	<input type="radio" name="op4" value="muy_bien">BODY<br />
	<input type="radio" name="op4" value="head">HEAD<br />
	<input type="radio" name="op4" value="deficiente">TITLE<br />

	<label>5.-LOS DATOS SE ENVIAN POR LA URL DEL NAVEGADOR:</label>
	<br /><br />
	<input type="radio" name="op5" value="muy_bien">ARCHIVO JS<br />
	<input type="radio" name="op5" value="get">METODO GET<br />
	<input type="radio" name="op5" value="deficiente">JPEG<br />

	<label>6.-SON ETIQUETAS QUE PUEDEN USARSE PARA LA MAQUETACION DE UNA PAGINA WEB:</label>
	<br /><br />
	<input type="radio" name="op6" value="muy_bien">CLASS<br />
	<input type="radio" name="op6" value="bien">P<br />
	<input type="radio" name="op6" value="div">DIV<br />

	<label>7.-ETIQUETA DONDE SE PONE EL CONTENIDO PRINCIPAL DE UNA PAGINA WEB:</label>
	<br /><br />
	<input type="radio" name="op7" value="muy_bien">CLASS<br />
	<input type="radio" name="op7" value="body">BODY<br />
	<input type="radio" name="op7" value="deficiente">CONTENT<br />

	<label>8.-ETIQUETA PARA LA CREACION DE FORMULARIOS</label>
	<br /><br />
	<input type="radio" name="op8" value="formulario">FORM<br />
	<input type="radio" name="op8" value="bien">CLASS<br />
	<input type="radio" name="op8" value="deficiente">DIV<br />

	<label>9.-PROPORCIONA ESTILOS A NUESTRA PAGINA:</label>
	<br /><br />
	<input type="radio" name="op9" value="muy_bien">ARCHIVO JS<br />
	<input type="radio" name="op9" value="bien">ARCHIVO PHP<br />
	<input type="radio" name="op9" value="archivocss">ARCHIVO CSS<br />

	<label>10.-METODO DE ENVIO DE DATOS EN UN FORMULARIO:</label>
	<br /><br />
	<input type="radio" name="op10" value="muy_bien">ENCRIPTADOS<br />
	<input type="radio" name="op10" value="post">POST<br />
	<input type="radio" name="op10" value="deficiente">POR URL<br />

	<br /><br />
	<input type="submit" name="preguntas" value="ENVIAR">

	<input type="reset" name="limpia" value="LIMPIAR FORMULARIO"><br />
	</form>




	</div>


	<div id="colder">

<?php

$nombre    = $_POST['nombre_txt'];
$apellido1 = $_POST['apellidop_txt'];
$apellido2 = $_POST['apellidom_txt'];
$edad      = $_POST['edad'];
$correo    = $_POST['mail'];
$sex       = $_POST['tusex'];
$comenta   = $_POST['comentarios'];

if (isset($_POST['submit'])) {
    // echo "<p>estamos dentro</p>";
    if (empty($nombre)) {
        echo "<p class='mensajes'>* DEBES INGRESAR TU NOMBRE...</p>";
    } elseif (strlen($nombre) > 15) {
        echo "NOMBRE MUY LARGO";
    }

    if (empty($apellido1)) {
        echo "<p class='mensajes'>* DEBES INGRESAR TU APELLIDO PATERNO...</p>";
    } elseif (strlen($apellido1) > 15) {
        echo "APELLIDO MUY LARGO";
    }

    if (empty($apellido2)) {
        echo "<p class='mensajes'>* DEBES INGRESAR TU APELLIDO MATERNO...</p>";
    } elseif (strlen($apellido2) > 15) {
        echo "APELLIDO MATERNO MUY LARGO";
    }

    if (empty($edad)) {
        echo "<p class='mensajes'>* DEBES INGRESAR TU EDAD...</p>";
    } elseif (!is_numeric($edad)) {
        echo "<p class='mensajes'>* EEROR LA EDAD DEBE SER CON NUMEROS...</p>";
    }

    if (empty($correo)) {
        echo "<p class='mensajes'>* DEBES INGRESAR TU CORREO...</p>";
    }

    if (empty($sex)) {
        echo "<p class='mensajes'>* INGRESA TU SEXO...</p>";
    }

    if (empty($comenta)) {
        echo "<p class='mensajes'>* DEBES INGRESAR TU COMENTARIOS...</p>";
    }

}
echo "<h3>tus datos ingresados...</h3>";
echo "<p>TU NOMBRE-->.$nombre</p>";
echo "<p>TU APELLIDO-->.$apellido1</p>";
echo "<p>TU APELLIDO MATERNO-->.$apellido2</p>";
echo "<p>TU EDAD-->.$edad</p>";
echo "<p>TU CORREO-->.$correo</p>";
echo "<p>TU SEXO-->.$sex</p>";
echo "<p>TUS COMENTARIOS-->.$comenta</p>";
?>

<br>
<a href = "contacto.html" > regresar </a>

	</div>

	<div class="clear">

	</div>

	<div id="pie">
			<!-- <p>pie de pagina</p> -->
						<div id="c1">col1...aqui derechos de autor....1991-2021 CEI ® </div>
						<div id="c2">col2... aqui sus redes sociales.</div>
						<div id="c3">col3...aqui direcciones ubicacion y telefonos.</div>

						<div class="clear">

							</div>

			<div id="colinf">colinf...| CENTRO DE FORMACIÓN OFICIAL DE HTML, JAVA y PHP| TODOS LOS DERECHOS RESERVADOS | AVISO LEGAL | CONDICIONES DE MATRICULACIÓN | POLÍTICA DE PRIVACIDAD | DERECHO A LA INFORMACIÓN DE ALUMNOS</div>
			</div>
				 	<!-- <div class="clear">

					</div>
  -->
</div>
</div>

</body>
</html>


<!-- <link rel="stylesheet" href="css/estilosamiweb.css">







