<?php

	add_action('wp_ajax_login', 'login');
	function login(){
		$user = $_POST["usuario"];
		$password = $_POST["pass"];

		$creds = array();
		$creds['user_login'] = $user;
		$creds['user_password'] = $password;
		$creds['remember'] = true;
		$user = wp_signon( $creds, false );
		if ( is_wp_error($user) ){
			echo $user->get_error_message();
		}else{
			echo "correcto";
		}
	}

	add_action('wp_ajax_form_registro', 'form_registro');
	function form_registro() {

		$variables = $_POST['variables'];
		$array = explode('&',$variables);

		for ($i=0;$i <= count($array);$i++){
		$var = explode('=',$array[$i]); 
		$value = urldecode($var[1]);
		$value = str_replace("\"",'',$value);
		$value = str_replace("'",'',$value);
		
			if (!empty($var[0])) {
			$asignacion = "\$".$var[0]."='".$value."';";
			@eval($asignacion);
			}
		}

		$user_id = wp_create_user( $email, $rut, $email ); //username,pass,email
		// check error
		if ( is_wp_error($user_id) ){
			echo "existe";
		} else {
			echo "gracias";
		}
		$fecha_nacimiento = $date;
		add_user_meta( $user_id, 'rut', $rut);
		add_user_meta( $user_id, 'fecha_nacimiento',$fecha_nacimiento);
		add_user_meta( $user_id, 'telefono', $tel);
		add_user_meta( $user_id, 'pto_entrenamiento', $pto_entrenamiento);
		add_user_meta( $user_id, 'distancia', $distancia);
		add_user_meta( $user_id, 'comentarios', $textarea);

		///////////////////////////////////////////////////////////////////
		$site_url		= "http://www.nikerunclub.cl/";
		$site			= "www.nikerunclub.cl/";
		$site_name		= "Nikerunclub";
		$fromaddress	= "noreply@nikerunclub.cl";
		$fromname		= utf8_encode("Formulario de inscripción");
		
		date_default_timezone_set('America/Santiago');
		$date			= date('d/m/Y H:m');
		
		$subject		= "Formulario de inscripción";
		$eol = "\r\n";

		$msg_body = '
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Untitled Document</title>
			<style type="text/css">
			body,td,th {
				font-size: 12px;
				font-family:Arial, Helvetica, sans-serif;
				line-height:15px;
			}
			table {
				font-size: 12px;
				font-family:Arial, Helvetica, sans-serif;
				padding:5px;
			}
			</style>
			</head>

			<body>

			<table width="600" border="0" cellpadding="5" cellspacing="0" class="table">
			  <tr>
			    <td colspan="2" bgcolor="#000000" style=" color:#fff; font-size:24px; padding: 20px 5px" >Inscripción Nike Run Club</td>
			  </tr>
			  <tr>
			    <td colspan="2"><strong><br />
			      Estimado(a): '.$nombre.'</strong><br />
			    Tu Inscripción ha sido recibida con éxito. Pronto te contactaremos para continuar con tu proceso de inscripción.<br /><br /></td>
			  </tr>
			  <tr>
			    <td colspan="2" bgcolor="#ddd" style=" color:#60a725; font-size:14px"><strong>
			    Datos Personales</strong></td>
			  </tr>
			  <tr>
			    <td width="161"><strong>Nombre y apellidos</strong></td>
			    <td width="372">: '.$nombre.'</td>
			  </tr>
			  <tr>
			    <td height="25"><strong>Rut</strong></td>
			    <td>: '.$rut.'</td>
			  </tr>
			  <tr>
			    <td><strong>Fecha de nacimiento</strong></td>
			    <td>: '.$date.'</td>
			  </tr>
			  <tr>
			    <td><strong>Email </strong></td>
			    <td>: '.$email.'</td>
			  </tr>
			  <tr>
			    <td><strong>Teléfono</strong></td>
			    <td>: '.$tel.'</td>
			  </tr>
			  <tr>
			    <td colspan="2" bgcolor="#ddd" style=" color:#60a725; font-size:14px"><strong>
			    Entrenamientos</strong></td>
			  </tr>
			  <tr>
			    <td><strong>Punto de Entrenamiento</strong></td>
			    <td>: '.$pto_entrenamiento.'</td>
			  </tr>
			  <tr>
			    <td><strong>Distancia </strong></td>
			    <td>: '.$distancia.'</td>
			  </tr>
			  <tr>
			    <td style="border-bottom:#ddd solid 1px;"><strong>Comentarios</strong></td>
			    <td style="border-bottom:#ddd solid 1px;">: '.$textarea.'</td>
			  </tr>
			</table>
			<p><strong>www.nikerunclub.cl</strong><br />
			<strong>Facebook:</strong> Nike+ Run Club Chile<br /> 
			<strong>Twitter:</strong> @NikeRunClubChi<br />
			<strong>Instagram:</strong> NIKERUNCLUBCHILE </p>
			</body>
			</html>
		';	
		
		$body 		= utf8_decode($msg_body);
		$fromname	= utf8_decode($fromname);
		$to         = "pablo.stuardo.diaz@gmail.com";		
		$concopia_email = "karinapet@gmail.com,luis.montenegro@nikerunclub.cl,franvarela@gmail.com";
		$concopia = "BCC: ".$concopia_email."".$eol;

		send_mail($to, $body, $subject, $fromaddress, $fromname, $concopia);

	}

	/* ENVIO DE EMAILS */
	function send_mail($to, $body, $subject, $fromaddress, $fromname, $concopia)
	{
		$eol="\r\n";
		$mime_boundary=md5(time());
		
		$headers .= "MIME-Version: 1.0".$eol;
		$headers .= "Content-Type: multipart/alternative; boundary=\"".$mime_boundary."\"".$eol;
		$headers .= "From: ".$fromname." <".$fromaddress.">".$eol;
		
		if(!empty($concopia)){
		$headers .= $concopia.$eol;		
		}

		$headers .= "Reply-To: ".$fromaddress."".$eol;
		$headers .= "Return-Path: ".$fromname." <".$fromaddress.">".$eol;
		/*$headers .= "Date: ".date("l j F Y, G:i").$eol;*/
		$headers .= "Date: ".date("D, d M Y H:i:s O").$eol;
		$headers .= "Message-ID: <".time()."-".$fromaddress.">".$eol;
		$headers .= "X-Sender: ".$fromaddress."".$eol;
		$headers .= "X-Mailer: ".phpversion().$eol;
		$headers .= "X-Priority: 3".$eol;
		$headers .= "X-MSMail-Priority: Normal".$eol;
		$headers .= "Errors-To: ".$fromaddress."".$eol;
		$headers .= "Sender: ".$fromaddress."".$eol;
		
		$msg = "--$mime_boundary"."\r\n";
		$msg .= "Content-Type: text/plain; charset=\"iso-8859-1\"".$eol;
		$msg .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
		$msg .= strip_tags(str_replace("<br />", "\n", substr($body, (strpos($body, "<body>")+6)))).$eol.$eol;
		
		$msg .= "--$mime_boundary"."\r\n";
		$msg .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
		$msg .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
		$msg .= $body.$eol.$eol;
	  
	  $msg .= "--".$mime_boundary."--".$eol.$eol;
	  $mail_sent = mail($to, $subject, $msg, $headers);

	  return $mail_sent;
	}
?>