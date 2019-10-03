<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              {$PORTFOLIO} - <span><a href="{$PAG_PORTFOLIO_ADM}"> Cadastrar Portfólio</a></span></div>
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
                  {foreach from=$PORT item=P}
                    <tr>
                      <td>{$P.port_categoria}</td>
                      <td>{$P.nome_img}</td>
                      <td>{$P.port_url}</td>
                      <td>
                        <form name="clieditar" method="post" action="{$EDITAR_CLIENTES}">
                            <input type="hidden" name="id" id="id" value="{$P.id}">
                            <button class="btn btn-success"> <i class="fa fa-edit"></i> </button>
                        </form> 
                      </td>
                      <!--<td><a href="{$EDITAR_CLIENTES}/{$C.cli_id}" class="btn btn-warning btn-block"><i class="fa fa-check"></i>Editar</a></td>-->
                      <td>
                        <form name="frm_apagar" method="post" action="" enctype="multipart/form-data">
                          <!---botao que apaga o produto de uma vez -->
                          <!--<input type="hidden" name="cli_id" id="cli_id" value="{$C.cli_id}">-->
                          {* <input type="hidden" name="id" id="id"> *}
                          <input type="hidden" name="id_apagar" value="{$P.id}">
                          <input type="hidden" name="port_apagar">
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