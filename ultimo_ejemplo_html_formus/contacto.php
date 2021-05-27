

<?php

?>




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

				<li><a href="#">Contacto</a></li>
			</ul>
	</div>
	</div>


	<div id="contenidoizq">
	<!-- <p>columna izquierda contenido...</p>
 -->
	<p><h3>TEST DE PROGRAMACION...</h3></p>



	</div>





	<div id="colder">

	<!-- <h2><p align="center"><a href="#temario">Informacion</a></p></h2>


	<form> action="registrardatos.php" method="post">
	  <fieldset>
		    <legend>Datos personales</legend>
		    Apellido y nombre:
		    <input type="text" name="nombre" size="30"><br>
		    Documento de identidad:
		    <input type="text" name="dni" size="8"><br>
		    Fecha de nacimiento:
		    <input type="text" name="fechanacimiento" size="12"><br>
		    Dirección:
		    <input type="text" name="direccionpersona" size="30"><br>
		  </fieldset>
	  <fieldset>
	    <legend>Datos Laborales</legend>
	    Nombre de la empresa:
	    <input type="text" name="nombreempresa" size="30"><br>
	    Actividad:
	    <input type="text" name="actividad" size="50"><br>
	    Dirección:
	    <input type="text" name="direccionempresa" size="30"><br>
	  </fieldset>
	  <fieldset>
	    <legend>Pedir Informacion</legend>
	    correo electronico:
	    <input type="text" name="correo" size="30"><br>
	   <textarea name="comentarios" rows="5" cols="40">Ingrese
  aqui sus comentarios</textarea><br>
	  </fieldset>
	  <input type="submit" value="Enviar">
</form>

 -->


<!--  <h1>formulario de datos por el metodo POST</h1><br /> -->
<h2></h2>
<form name="form_frm" method="post" action="procesadatos.php" enctype="aplication/x-www-form-urlencoded">

 <fieldset>
    <legend>Datos personales...ingresa tus datos:</legend>
		<!-- ingresa tus datos:<br /><br /> -->
			nombre:<input type="text" name="nombre_txt"><br /><br />

			apellido:<input type="text" name="apellido_txt"><br /><br />

			correo:<input type="text" name="mail"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"><br /><br />
</fieldset>
<fieldset>
    <legend>comentarios:</legend>

			<textarea name="comentarios" rows="5" cols="60">Ingrese  aqui sus comentarios</textarea><br>

			<input type="radio" name="pass_rdo" value="masculino">
			masculino
			<input type="radio" name="pass_rdo" value="femenino">
			femenino
			<br /><br /><input type="submit" name="submit" value="submit">
			<input type="reset" value="borrar">
		</fieldset>
</form>



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