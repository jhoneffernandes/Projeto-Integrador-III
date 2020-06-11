<div class="containercardapio mb-5">

<img src="img/gelabanner.png" alt="">

<div class="centralizartextobanner">

  <H1>Painel administrativo</H1>

</div>

</div>


<div class="mt-n5 mb-5 bg-white d-flex justify-content-between align-items-center container-fluid">
<a href="#" class="btn col-5"><i class="fas bg- fa-2x fa-home" style="color:blue"></i> <h4 style="color: blue ;">Voltar a página inicial</h4></a>
<a href="#" class="btn col-5"><i class="fas fa-2x fa-sign-out-alt" style="color:red"></i><h4 class="text-danger">Sair</h4></a>
</div>

<div class="container-fluid">
<div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <a class="text-decoration-none text-danger" href="/produtos">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cadastrar produtos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0 produtos cadastrados</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-hamburger fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
              <a class="text-decoration-none text-danger" href="/reservas">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Gerenciar reservas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0 reservas não-atendidas</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
              <a class="text-decoration-none text-danger" href="/messages">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Mensagens enviadas pelo formulário de contato</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
              <a class="text-decoration-none text-danger" href="/usuarios">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Gerenciar usuários</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0 usuários cadastrados</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
              <a class="text-decoration-none text-danger" href="/carrossel">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Editar carrossel de promoções</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">O carrossel contém 3 imagens atualmente</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-images fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
              <a class="text-decoration-none text-danger" href="/cards">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Editar lanches nos cards da página inicial</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Os cards contém 3 lanches atualmente</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-image fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>


          </div>
          </div>

          <?php
$this->assign('title', 'Gela Guela - Painel Administrativo');
?>