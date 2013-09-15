<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dialog example - jQuery Mobile Demos</title>
	<link rel="stylesheet"  href="../../css/themes/default/jquery.mobile-1.3.1.min.css">
	<link rel="stylesheet" href="../../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../../favicon.ico">
	<script src="../../js/jquery.js"></script>
	<script src="../../_assets/js/index.js"></script>
	<script src="../../js/jquery.mobile-1.3.1.min.js"></script>
</head>
<body>
<div data-role="dialog">
		<script type="text/javascript">
		    $(document).ready(function() {
		    	$("#btn_login").click(function() {
		            var data = {
		                action: 'login',
		                usuario: $("#usuario").val(),
		                pass: $("#pass").val()
		            };
		            ajaxurl = 'http://www.nikerunclub.cl/web/wp-admin/admin-ajax.php';
		            $.post(ajaxurl, data, function(resp) {
		                if (resp == "correcto") {
		                	location.href = "http://www.nikerunclub.cl/web/";
		                }else{
		                	alert("error");
		                }
		            });
	        	});
	        });
		</script>
		<div data-role="header" data-theme="d">
			<h1>Iniciar Sesión</h1>
		</div>

		<div data-role="content">
			<h1>Socios Nike Run Club</h1>
				
            <div data-role="fieldcontain">
    			<label for="textinput-fc">Usuario:</label>
    			<input type="text" name="textinput-fc" id="usuario" placeholder="" value="">
			</div><!-- /nombre-html -->
            
            <div data-role="fieldcontain">
    			<label for="textinput-fc">Contraseña:</label>
    			<input type="text" name="textinput-fc" id="pass" placeholder="" value="">
			</div><!-- /rut-html -->    
                    
                    
                <input type="submit" id="btn_login" value="Enviar" data-iconpos="right" data-mini="false"  data-theme="a" />

			<a href="recuperar_pass.html" data-role="button" data-rel="dialog" data-transition="pop" data-theme="c">Olvidé mi Contraseña</a>    
		</div>
	</div>


</body>
</html>
