
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

      <form class="form-signin" method="POST" action="" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Recuperação de Senha</h2>
        <label for="inputEmail" name="inputEmail" class="sr-only">Email</label>
        <input type="email" name="txt_user" id="inputUser" class="form-control" placeholder="E-mail" required autofocus>
        <br>
        <button class="btn btn-lg btn-info btn-block" name="enviar" value="txt_logar">
          <i class="fa fa-check"></i>Recuperar
        </button>
        
        
      </form>
    </div> <!-- /container -->

    {* <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Resetar Senha</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Esqueceu sua senha?</h4>
            <p>Enter your email address and we will send you instructions on how to reset your password.</p>
          </div>
          <form name="recuperarsenha" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Enter email address</label>
              </div>
            </div> *}
            {* <a class="btn btn-primary btn-block" href="login.html">Reset Password</a> *}
            {* <div class="col-md-12">
              <button type="submit" name="enviar" class="btn btn-info btn-block"> <i class="fa fa-check"></i> Gravar </button>
            </div>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="login.html">Login Page</a>
          </div>
        </div>
      </div>
    </div> *}
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>    
    
    
    