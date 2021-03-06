
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Soi Design - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="view/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="view/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading">Área Restrita</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" name="txt_user" id="inputUser" class="form-control" placeholder="Usuário" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-info btn-block" name="txt_logar" value="txt_logar">Acessar</button>
        
        
      </form>
      
    </div> <!-- /container -->
    {* <div class="container">
      <br>
        <a class="btn btn-lg btn-danger btn-block" name="esqueciSenha" href="{$PAG_ESQUECI_SENHA}">Esqueceu sua Senha</a>
        <button type="submit" class="btn btn-lg btn-info btn-block" name="lembrar" value="txt_logar">
          <a href="{$PAG_ESQUECI_SENHA}">Lembrar Senha</a>
        </button>
    </div> *}
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
