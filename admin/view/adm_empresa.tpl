<script src="tinymce/tinymce/js/tinymce/tinymce.min.js"></script>    
    
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Editar Página Empresa</div>
        <div class="card-body">
          <form name="empresainsere" method="post" action="">
            <div class="form-group">
                <label for="inputEmail">Sobre</label>
              <div class="form-label-group">
                <!--<input type="email" id="inputEmail" class="form-control" placeholder="Sobre" required="required" autofocus="autofocus">-->
                <textarea name="sobre" id="sobre" rows="5" class="form-control" ></textarea>
                <script> 
                    tinymce.init({ selector:'textarea'  });
                </script>
              </div>
            </div>
            <div class="form-group">
              <label for="text">VISÃO</label>
              <div class="form-label-group">
                <input type="text" name="visao" id="visao" class="form-control" placeholder="VISÃO" required="required">
              </div>
            </div>
            <div class="form-group">
              <label for="text">VALORES</label>
              <div class="form-label-group">
                <input type="text" id="valores" name="valores" class="form-control" placeholder="VALORES" required="required">
              </div>
            </div>
            <div class="form-group">
              <label for="text">MISSÃO</label>
              <div class="form-label-group">
                <input type="text" id="missao" name="missao" class="form-control" placeholder="MISSÃO" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <!--<a class="btn btn-primary btn-block" href="index.html">Cadastrar</a>-->
            <button class="btn btn-primary btn-block btn-lg" name="btn_gravar" value="btn_gravar"> Gravar </button>
          </form>
          <!--<div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>-->
        </div>
      </div>
    </div>