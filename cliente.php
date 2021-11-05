<?php include('header.php'); ?>


	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro para Clientes</h1>
			</div>

			<div class="articulo">
				<article>
				<form method="post" action="">
                        <h2>Si necesitas ayuda o tienes dudas sobre el cuidado de tu mascota
							por favor llena el siguiente formulario para poder atenderte y responder
							tus dudas,también puedes solicitar agendar una cita con el veterinario.<br><br></h2>

                        <label for="lname">Apellido Paterno:</label>
                        <input type="text" id="lname" name="lname"><br><br>
                        
						<label for="lname">Apellido Materno:</label>
                        <input type="text" id="lname" name="lname"><br><br>

						<label for="fname">Nombres:</label>
                        <input type="text" id="fname" name="fname"><br><br>
							
                        <label for="date">Fecha de Nacimiento:</label>
                        <input type="date" id="date" name="date" ><br><br>

                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" ><br><br>

                        <label for="telefono">Teléfono:</label>
                        <input type="telefono" id="telefono" name="telefono" ><br><br>

                        <input class="boton" type="submit" value="Enviar" name="submit">
						<br><br>
                                <h2>"Cuando el formulario haya sido enviado te responderemos en un lapso de 24hrs,si no,
								vuelve a enviar el formulario o contactanos via telefonica".</h2>
                    </form>
				</article>
			</div>

			<?php include('sidebar.php'); ?>
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>