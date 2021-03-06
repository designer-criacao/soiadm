<?php
/* Smarty version 3.1.33, created on 2019-10-10 23:29:14
  from 'C:\xampp\htdocs\soiAdmin\admin\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9fe8fa335160_83109893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9637f0d4596e4f17a9bafe32b565a7c169b64cc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\admin\\view\\adm_index.tpl',
      1 => 1570758844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9fe8fa335160_83109893 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
 - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="view/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="view/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
              </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
                        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#"><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</a>
                        <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

  <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Páginas</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Telas do Site:</h6>
            <a class="dropdown-item" href="">Home</a>
            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_EMPRESA_ADM']->value;?>
">Empresa</a>
            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_LISTAPORT']->value;?>
">Portifólio</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Outras Páginas:</h6>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_GRAFICO']->value;?>
">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Gráficos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Pedidos</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user"></i>
            <span>Clientes:</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Clientes da SOI Design</h6>
            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CAD_CLIENTES']->value;?>
">Cadastrar Clientes</a>
            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_LISTAR_CLIENTES']->value;?>
">Lista de Clientes</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_USUARIOS']->value;?>
">
            <i class="fas fa-fw fa-users"></i>
            <span>Usuários</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-life-ring"></i>
            <span>Configurações</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_REGISTRAR_LOGIN']->value;?>
">Registrar</a>
                        <div class="dropdown-divider"></div>
                      </div>
        </li>
      </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

        <!--
        ************************************************
        CONTEUDO DA DASHBOARD
        ************************************************
        Colocar a ligação para página de conteúdo....
        -->
            <?php 
                Rotas::get_Pagina();
            ?>

        </div><!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © <?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['DATA2']->value;?>
</span>
            </div>
          </div>
        </footer>

    </div><!-- /.content-wrapper -->

  </div><!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo sair <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione Sair para finalizar sua sessão atual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
">Sair</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php echo '<script'; ?>
 src="view/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

    <!-- Core plugin JavaScript-->
    <?php echo '<script'; ?>
 src="view//vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

    <!-- Page level plugin JavaScript-->
    <?php echo '<script'; ?>
 src="view/vendor/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="view/vendor/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="view/vendor/datatables/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>

    <!-- Custom scripts for all pages-->
    <?php echo '<script'; ?>
 src="view/js/sb-admin.min.js"><?php echo '</script'; ?>
>

    <!-- Demo scripts for this page-->
    <?php echo '<script'; ?>
 src="view/js/demo/datatables-demo.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="view/js/demo/chart-area-demo.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="view/js/demo/chart-bar-demo.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="view/js/demo/chart-pie-demo.js"><?php echo '</script'; ?>
>

  </body>

</html>


<?php }
}
