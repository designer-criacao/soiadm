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
                  {foreach from=$USUARIOS item=U}
                    <tr>
                      <td>{$U.user_nome}</td>
                      <td>{$U.user_email}</td>
                    </tr>
                  {/foreach}
                   
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>