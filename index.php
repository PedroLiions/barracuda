<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema - Login</title>
	<!-- bulma -->
        <link rel="stylesheet" href="/bower_components/bulma/css/bulma.css" />
</head>
<body>
	<div class="container">
    	<form class="form-signin" method="post" action="php/realizarLogin.php">
    		<h2 class="form-signin-heading">Realize login</h2>
			<label for="inputEmail" class="sr-only">Email</label>
        	<input type="text" id="inputEmail" name="email" class="form-control" placeholder="Endereço de email" required autofocus>
        	<label for="inputPassword" class="sr-only">Senha</label>
        	<input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
        	<div class="checkbox">
          		<label>
            		<input type="checkbox" value="remember-me"> Me lembrar
          		</label>
        	</div>
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      	</form>
	</div>
</body>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- css -->
<link rel="stylesheet" href="/assets/css/style.css">
</html>