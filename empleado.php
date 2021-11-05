<?php include('header.php'); ?>


	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro para Empleados</h1>
			</div>

			<div class="articulo">
				<article>
				<form method="post" action="">
                        <h2>Si esta interesad@ en trabajar con nosotros,llene el siguiente formulario con sus
							datos correspondientes:<br><br></h2>
						<label for="lname">Apellido Paterno:</label>
                        <input type="text" id="lname" name="lname" ><br><br>

						<label for="lname">Apellido Materno:</label>
                        <input type="text" id="lname" name="lname" ><br><br>
						
						<label for="fname">Nombre(s):</label>
                        <input type="text" id="fname" name="fname"><br><br>

                        <label for="date">Fecha de Nacimiento:</label>
                        <input type="date" id="date" name="fecha" ><br><br>

                        <label for="genero">Género:</label>
                            <input class="rb" type="radio" name="genero" value="hombre">
                            <label for="html">Hombre</label>
                            <input class="rb" type="radio" name="genero" value="mujer">
                            <label for="css">Mujer</label>
							<input class="rb" type="radio" name="genero" value="otro">
							<label for="css">Otro</label><br><br>

                        <label for="curp">CURP:</label>
                        <input type="text" id="curp" name="curp"><br><br>
                        
						<label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="correo" ><br><br>
                        
						<label for="telefono">Teléfono:</label>
                        <input type="tel" id="tel" name="telefono"  ><br><br>
                        
						<label for="est">Estudios:</label>
                        <input type="text" id="estudios" name="est">
                        <br>  <br>  
                        <input class="boton" type="submit" value="Enviar" name="submit">
                       <br><br>
                                <h2>"Gracias por llenar nuestro registro para empleados,te 
                                llamaremos en caso de contratarte".</h2>
                         
                    </form>


				</article>
			</div>

			<?php include('sidebar.php'); ?>
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>