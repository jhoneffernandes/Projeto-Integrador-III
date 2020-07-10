<div class="text-danger text-center">
            <div class="container d-flex align-items-center flex-column">
      <img class="masthead-avatar my-3" src="img/gglogo.svg" alt="">
                <h1 class="my-3 mb-0 fontetema">Painel Administrativo</h1>
                <div>
                    <div>
                    <i class="fas fa-2x fa-hamburger my-3"></i>
                      <i class="fas fa-2x fa-hamburger my-3 text-warning"></i>
                      <i class="fas fa-2x fa-hamburger my-3"></i>
                      <i class="fas fa-2x fa-hamburger my-3 text-warning"></i>
                      <i class="fas fa-2x fa-hamburger my-3"></i>

                    </div>
                </div>
                <p class="font-weight-bold mb-3 h4">Conteúdo da página - Gerenciamento dos conteúdos e usuários do site</p>
            </div>
        </div>
        <div class="dividerzyell"><hr></div>


<div class="mb-5 bg-white d-flex justify-content-between align-items-center container-fluid border border-warning">
<a href="/" class="btn col-5"><i class="fas bg- fa-2x fa-home" style="color:blue"></i> <h4 class="font-weight-bold" style="color: blue ;">Voltar a página inicial</h4></a>
<a href="users/logout" class="btn col-5"><i class="fas fa-2x fa-sign-out-alt" style="color:red"></i><h4 class="text-danger font-weight-bold">Sair</h4></a>
</div>

<div class="container-fluid">
<div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2 border border-warning">
                <a class="text-decoration-none text-warning" href="/products">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Gerenciar produtos</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-hamburger fa-2x"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2 border border-warning">
              <a class="text-decoration-none text-warning" href="/carts">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Gerenciar reservas</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2 border border-warning">
              <a class="text-decoration-none text-warning" href="/messages">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Gerenciar mensagens</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2 border border-warning">
              <a class="text-decoration-none text-warning" href="/clients">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Gerenciar usuários</div>
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
              <div class="card border-left-warning shadow h-100 py-2 border border-warning">
              <a class="text-decoration-none text-warning" href="/carouselimgs">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Editar imagens docarrossel de promoções</div>
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
              <div class="card border-left-warning shadow h-100 py-2 border border-warning">
              <a class="text-decoration-none text-warning" href="/burgers">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Editar lanches nos cards da página inicial</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-image fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2 border border-warning">
              <a class="text-decoration-none text-warning" href="/categories">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Gerenciar categorias dos produtos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
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