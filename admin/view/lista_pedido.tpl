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
                      <th>Data do Pedido</th>
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
                      <th>Data do Pedido</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  {foreach from=$PED item=P}
                    <tr>
                      <td>{$P.nome}</td>
                      <td>{$P.email}</td>
                      <td>{$P.razao_social}</td>
                      <td>{$P.telefone}</td>
                      <td>{$P.regiao_sampa}</td>
                      <td>{$P.tipo_servico}</td>
                      <td>{$P.data_pedido}</td>
                    </tr>
                  {/foreach}
                   
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>