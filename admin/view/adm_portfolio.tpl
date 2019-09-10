<script src="tinymce/tinymce/js/tinymce/tinymce.min.js"></script>    
    
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Editar Página Portfólio</div>
        
        <div class="card-body">
            <form name="portfolioInsere" method="post" action="" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label>Categoria</label>
                    <select name="port_categoria" id="port_categoria" class="form-control" required >
                    
                        <option value=""> Escolha uma opção</option>
                        <option value="S"> Site </option>
                        <option value="V"> Vídeo </option>
                        <option value="D"> Design </option>
                    </select>
                </div>

                <div class="col-md-12">
                    <hr>
                    <label>Imagem Destaque</label>
                    <!--- campos para adicionar a imagem-->
                    <input type="file" name="img" class="form-control btn btn-success" id="img">
                    <!--pega o nome da imagem atual -->
                    {* <input type="hidden" name="port_img_atual" id="prod_img_atual" value="{}"> *}
                    <!--pega o caminho completo da imagem atual -->
                    {* <input type="hidden" name="port_img_arquivo" id="prod_img_arquivo" value="{}"> *}
                </div>

                <div class="form-group">
                    <label for="text">Nome</label>
                    <div class="form-label-group">
                        <input type="text" name="nome_img" id="nome_img" class="form-control" placeholder="Nome" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="text">Endereço URL</label>
                    <div class="form-label-group">
                        <input type="text" id="port_url" name="port_url" class="form-control" placeholder="URL">
                    </div>
                </div>
                <!--
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
                </div>-->
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