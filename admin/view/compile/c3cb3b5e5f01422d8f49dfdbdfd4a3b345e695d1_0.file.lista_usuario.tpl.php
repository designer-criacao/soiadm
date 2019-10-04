<?php
/* Smarty version 3.1.33, created on 2019-10-03 22:02:34
  from 'C:\xampp\htdocs\soiAdmin\admin\view\lista_usuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d969a2ac2d134_12896024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3cb3b5e5f01422d8f49dfdbdfd4a3b345e695d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\admin\\view\\lista_usuario.tpl',
      1 => 1570150952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d969a2ac2d134_12896024 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tabela de Usuários</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th>Usuário</th>
                      <th>E-mail</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Usuário</th>
                      <th>E-mail</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USUARIOS']->value, 'U');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['U']->value) {
?>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['U']->value['user_nome'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['U']->value['user_email'];?>
</td>
                    </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div><?php }
}
