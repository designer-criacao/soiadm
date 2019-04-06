<!-- DataTables Example -->
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
                  {foreach from=$CLIENTES item=C}
                    <tr>
                      <td>{$C.cli_nome}</td>
                      <td>{$C.cli_email}</td>
                      <td>{$C.cli_fone}</td>
                      <td>Raio de Sol</td>
                      <td>Sim</td>
                      <td>Diretora</td>
                      <td>
                        <form name="clieditar" method="post" action="{$EDITAR_CLIENTES}">
                            <input type="hidden" name="cli_id" id="cli_id" value="{$C.cli_id}">
                            <button class="btn btn-success"> <i class="fa fa-edit"></i> </button>
                        </form> 
                      </td>
                      <!--<td><a href="{$EDITAR_CLIENTES}/{$C.cli_id}" class="btn btn-warning btn-block"><i class="fa fa-check"></i>Editar</a></td>-->
                      <td>
                        <form name="frm_apagar" method="post" action="{$APAGAR}">
                          <!---botao que apaga o produto de uma vez -->
                          <!--<input type="hidden" name="cli_id" id="cli_id" value="{$C.cli_id}">-->
                          <input type="hidden" name="cli_id" id="cli_id">
                          <input type="hidden" name="cli_id_apagar" value="{$C.cli_id}">
                          <input type="hidden" name="cli_apagar">
                          <button class="btn btn-danger" name="btn_apagar"><i class="fa fa-remove"></i>Excluír</button>
                           <!--<a href="{$APAGAR}" class="btn btn-danger btn-block" name="btn_apagar"><i class="fa fa-remove"></i>Excluír</a>--> 
                        </form>
                      </td>

                    </tr>
                  {/foreach}
                   
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Atualizado hoje às 11:59 PM</div>
          </div>