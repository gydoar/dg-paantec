<?php
   if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = 'Por favor ingrese su nombre.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }
    if(trim($_POST['email']) === '')  {
        $emailError = 'Por favor ingrese su email.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'Dirreción de email invalida.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
     if(trim($_POST['telefono']) === '') {
        $telError = 'Por favor ingrese su teléfono.';
        $hasError = true;
    } else {
        $telefono = trim($_POST['telefono']);
    }
    if(trim($_POST['comments']) === '') {
        $commentError = 'Por favor ingresa un mensaje.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }
    if(!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo = 'info@paantec.com';
        }
        $subject = '[Contacto Paantec] From '.$name;
        $body = "Nombre: $name \n\nEmail: $email \n\nTeléfono: $telefono \n\nMensaje: $comments";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
} ?>

<?php get_header('inicio'); ?>

<div class="page__background">
	<div class="container color__content">
		

		<div class="content__admin">

			<iframe src="https://www.google.com/maps/d/embed?mid=z384l7joIJqs.kXUNaADppoqI" width="100%" height="450"></iframe>

			<div class="row direcciones__contacto">
				<div class="six columns">
					<h6><strong>Bogotá</strong></h6>
					<p>Oficinas administrativas</p>
					<p><?php echo of_get_option('dir_bogota'); ?></p>
					<p><?php echo of_get_option('tel_bogota'); ?></p>
                    <br>

					<h6><strong>Cali</strong></h6>
					<p><?php echo of_get_option('dir_cali'); ?></p>
					<p><?php echo of_get_option('tel_cali'); ?></p>
                    <br>
					<h6><strong>Costa Atlántica</strong></h6>
					<p><?php echo of_get_option('dir1_costa'); ?></p>
					<p><?php echo of_get_option('dir2_costa'); ?></p>
					<p><?php echo of_get_option('tel_costa'); ?></p>
				</div>

				<div class="six columns">
					<h6><strong>Planta de Producción</strong></h6>
					<p><?php echo of_get_option('dir_pro_bogota'); ?></p>
					<p><?php echo of_get_option('tel_pro_bogota'); ?></p>
                    <br>
					<h6><strong>Bucaramanga</strong></h6>
					<p><?php echo of_get_option('dir_bucara'); ?></p>
					<p><?php echo of_get_option('tel_bucara'); ?></p>
                    <br>
					<h6><strong>PANAMÁ</strong><br>
					<strong>Ciudad de Panamá</strong></h6>
					<p><?php echo of_get_option('dir_panama'); ?></p>
					<p><?php echo of_get_option('tel_panama'); ?></p>
				</div>
			</div>

			<!-- Form -->

            <?php if(isset($emailSent) && $emailSent == true) { ?>
            <div class="alert alert-success">
                <p>Gracias, su mensaje ha sido bien recibido.</p>
            </div>
            <?php } else { ?>

            <?php if(isset($hasError) || isset($captchaError)) { ?>
            <div class="alert alert-danger alert-dismissable">
                <a class="close" data-dismiss="alert">×</a>
                <h4 class="alert-heading">Disculpe, existen algunos errores.</h4>
                <p class="error">Por favor inténtalo de nuevo!<p>
                </div>
                <?php } ?>

                <div class="email_form">
                    <p>Escribenos a: <a href="mailto:info@paantec.com">info@paantec.com</a></p>
                </div>
                    
                <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                    <fieldset>

                        <div class="form-group">

                            <input class="form-control" type="text" name="contactName" id="contactName" value="" placeholder="Nombre" />
                            <span class="input-icon fui-check-inverted"></span>
                            <?php if(isset($nameError)) { ?>
                            <p><span class="error"><?=$nameError;?></span></p>
                            <?php } ?>
                             <br>

                        </div>
                        <div class="form-group">

                            <input class="form-control" type="text" name="email" id="email" value="" placeholder="Email" />
                            <span class="input-icon fui-check-inverted"></span>
                            <?php if(isset($emailError)) { ?>
                            <p><span class="error"><?=$emailError;?></span></p>
                            <?php } ?>

                             <br>
                        </div>
                        <div class="form-group">

                            <input class="form-control" type="text" name="telefono" id="telefono" value="" placeholder="Teléfono" />
                            <span class="input-icon fui-check-inverted"></span>
                            <?php if(isset($telError)) { ?>
                            <p><span class="error"><?=$telError;?></span></p>
                            <?php } ?>

                             <br>
                        </div>
                        <div class="form-group">

                            <textarea class="form-control" name="comments" id="commentsText" rows="100" cols="10" placeholder="Mensaje"></textarea>
                            <?php if(isset($commentError)) { ?>
                            <p><span class="error"><?=$commentError;?></span></p>
                            <?php } ?>
                             <br>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success button-primary">Enviar</button>
                        </div>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                    </fieldset>
                </form>
                <?php } ?>

			<!-- Form -->
			
		</div>

		
	</div>

	
</div>

<?php get_footer(); ?>