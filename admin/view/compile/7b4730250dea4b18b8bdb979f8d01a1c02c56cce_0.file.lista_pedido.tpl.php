<?php
/* Smarty version 3.1.33, created on 2019-10-03 21:27:55
  from 'C:\xampp\htdocs\soiAdmin\admin\view\lista_pedido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d96920b699909_64090580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b4730250dea4b18b8bdb979f8d01a1c02c56cce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\admin\\view\\lista_pedido.tpl',
      1 => 1570148873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d96920b699909_64090580 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Lista de Pedidos</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Razão Social</th>
                      <th>Telefone</th>
                      <th>Região</th>
                      <th>Tipo de Serviço</th>
                      <th>Descrição</th>
                      <th>Data do Pedido</th>
                      <th> X </th>
                    </tr>
                  </thead>
                  <tfoot class="thead-dark">
                    <tr>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Razão Social</th>
                      <th>Telefone</th>
                      <th>Região</th>
                      <th>Tipo de Serviço</th>
                      <th>Descrição</th>
                      <th>Data do Pedido</th>
                      <th> X </th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PED']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['nome'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['email'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['razao'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['telefone'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['regiao'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['servico'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['descricao'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['data_pedido'];?>
</td>

                      <td>
                        <form name="frm_apagar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['APAGAR']->value;?>
" enctype="multipart/form-data">
                          <!---botao que apaga o produto de uma vez -->
                          <!--<input type="hidden" name="cli_id" id="cli_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
">-->
                                                    <input type="hidden" name="id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
">
                          <input type="hidden" name="ped_apagar">
                          <button class="btn btn-outline-danger" name="btn_apagar"><i class="fa fa-remove"></i>Excluír</button>
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
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div><?php }
}
