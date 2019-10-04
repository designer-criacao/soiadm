<?php
/* Smarty version 3.1.33, created on 2019-10-03 20:38:33
  from 'C:\xampp\htdocs\soiAdmin\admin\view\adm_listaPortfolio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d968679409fc4_70571208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c3f3a6db82e98c9d020c3f4c8dd62a0434230af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soiAdmin\\admin\\view\\adm_listaPortfolio.tpl',
      1 => 1570074217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d968679409fc4_70571208 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <?php echo $_smarty_tpl->tpl_vars['PORTFOLIO']->value;?>
 - <span><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PORTFOLIO_ADM']->value;?>
"> Cadastrar Portfólio</a></span></div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th>Categoria</th>
                      <th>Nome da Imagem</th>
                      <th>URL</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Categoria</th>
                      <th>Nome da Imagem</th>
                      <th>URL</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PORT']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['port_categoria'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['nome_img'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['P']->value['port_url'];?>
</td>
                      <td>
                        <form name="clieditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['EDITAR_CLIENTES']->value;?>
">
                            <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
">
                            <button class="btn btn-success"> <i class="fa fa-edit"></i> </button>
                        </form> 
                      </td>
                      <!--<td><a href="<?php echo $_smarty_tpl->tpl_vars['EDITAR_CLIENTES']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" class="btn btn-warning btn-block"><i class="fa fa-check"></i>Editar</a></td>-->
                      <td>
                        <form name="frm_apagar" method="post" action="" enctype="multipart/form-data">
                          <!---botao que apaga o produto de uma vez -->
                          <!--<input type="hidden" name="cli_id" id="cli_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
">-->
                                                    <input type="hidden" name="id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
">
                          <input type="hidden" name="port_apagar">
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
