<?php
/* Smarty version 3.1.33, created on 2018-11-03 21:31:31
  from 'C:\xampp\htdocs\soiAdmin\admin\view\lista_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bde3de3414174_49749431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '407b73c4d695621f3f9da005695fd2a2948874d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\admin\\view\\lista_clientes.tpl',
      1 => 1541291475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bde3de3414174_49749431 (Smarty_Internal_Template $_smarty_tpl) {
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
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Telefone</th>
                      <th>Empresa</th>
                      <th>Pago</th>
                      <th>Função</th>
                      <th>Editar</th>
                      <th>Excluír</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Telefone</th>
                      <th>Empresa</th>
                      <th>Pago</th>
                      <th>Função</th>
                      <th>Editar</th>
                      <th>Excluír</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_fone'];?>
</td>
                      <td>Raio de Sol</td>
                      <td>Sim</td>
                      <td>Diretora</td>
                      <td>
                        <form name="clieditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['EDITAR_CLIENTES']->value;?>
">
                            <input type="hidden" name="cli_id" id="cli_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
">
                            <button class="btn btn-success"> <i class="fa fa-edit"></i> </button>
                        </form> 
                      </td>
                      <!--<td><a href="<?php echo $_smarty_tpl->tpl_vars['EDITAR_CLIENTES']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" class="btn btn-warning btn-block"><i class="fa fa-check"></i>Editar</a></td>-->
                      <td>
                        <form name="frm_apagar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['APAGAR']->value;?>
">
                          <!---botao que apaga o produto de uma vez -->
                          <!--<input type="hidden" name="cli_id" id="cli_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
">-->
                          <input type="hidden" name="cli_id" id="cli_id">
                          <input type="hidden" name="cli_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
">
                          <input type="hidden" name="cli_apagar">
                          <button class="btn btn-danger" name="btn_apagar"><i class="fa fa-remove"></i>Excluír</button>
                           <!--<a href="<?php echo $_smarty_tpl->tpl_vars['APAGAR']->value;?>
" class="btn btn-danger btn-block" name="btn_apagar"><i class="fa fa-remove"></i>Excluír</a>--> 
                        </form>
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
            <div class="card-footer small text-muted">Atualizado hoje às 11:59 PM</div>
          </div><?php }
}
