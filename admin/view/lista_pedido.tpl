<!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Lista de Pedidos</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                  <tfoot>
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
                  {foreach from=$PED item=P}
                    <tr>
                      <td>{$P.nome}</td>
                      <td>{$P.email}</td>
                      <td>{$P.razao}</td>
                      <td>{$P.telefone}</td>
                      <td>{$P.regiao}</td>
                      <td>{$P.servico}</td>
                      <td>{$P.descricao}</td>
                      <td>{$P.data_pedido}</td>

                      <td>
                        <form name="frm_apagar" method="post" action="{$APAGAR}" enctype="multipart/form-data">
                          <!---botao que apaga o produto de uma vez -->
                          <!--<input type="hidden" name="cli_id" id="cli_id" value="{$C.cli_id}">-->
                          {* <input type="hidden" name="id" id="id"> *}
                          <input type="hidden" name="id_apagar" value="{$P.id}">
                          <input type="hidden" name="ped_apagar">
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
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>