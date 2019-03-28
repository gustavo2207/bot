<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
	
	<div class = "container">
	<h1>Aula DDW</h1>

	
	<div class = "row">
		<div class = "col-md-6 offset-md-3 text-center">
			<img src = 'avatar.jpg' class = "img-thumbnail">
			<form>
			  <div class="form-group">
				<label for="inputMensagem">Mensagem</label>
				<input type="text" class="form-control" id="inputMensagem" placeholder="Digite sua mensagem...">				
			  </div>
			  <button type="button" id = "enviar" class="btn btn-primary">Enviar</button>
			</form>
			
			<br>			
			<div class="collapse" id="conversa">
			  <div class="card card-body" id="mensagens">
				
			  </div>
			</div>
			<br>			
		</div>	
	</div>	

	</div>
		
	<script src="js/jquery-3.3.1.min.js"></script>	
    <script src="js/bootstrap.min.js"></script>
	
	<script>

	$('#conversa').show();
	var enviar = $('#enviar');
	var mensagens = $('#mensagens');

	enviar.click(function(){
		var inputMensagem = $('#inputMensagem').val();
		mensagens.append("Eu: "+inputMensagem+"<br>");
		
		chatbot(inputMensagem);

    	$('#inputMensagem').val("");
	});
	

	function chatbot(message){

	}
	</script>
  </body>
</html>