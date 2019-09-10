<?php
/* Smarty version 3.1.33, created on 2019-09-10 13:52:02
  from 'C:\xampp\htdocs\soiAdmin\admin\view\adm_portfolio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d77d4b2abd615_14829909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49b573a53ffd3e7aa77f15e83220492f18d3469b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\admin\\view\\adm_portfolio.tpl',
      1 => 1568134294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d77d4b2abd615_14829909 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="tinymce/tinymce/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>    
    
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
                                        <!--pega o caminho completo da imagem atual -->
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
</div><?php }
}
