<div class="text-danger text-center">
            <div class="container d-flex align-items-center flex-column">
      <img class="masthead-avatar my-3" src="../img/gglogo.svg" alt="">
                <h1 class="my-3 mb-0 fontetema">Bem vindo de volta!</h1>
                <div>
                    <div>
                    <i class="fas fa-2x fa-hamburger my-3"></i>
                      <i class="fas fa-2x fa-hamburger my-3 text-warning"></i>
                      <i class="fas fa-2x fa-hamburger my-3"></i>
                      <i class="fas fa-2x fa-hamburger my-3 text-warning"></i>
                      <i class="fas fa-2x fa-hamburger my-3"></i>

                    </div>
                </div>
                <p class="font-weight-bold mb-3 h4">Conteúdo da página - Gerenciamento das reservas e mudar informações de perfil</p>
            </div>
        </div>
        <div class="dividerzyell"><hr></div>


<div class="mb-5 border border-warning bg-white d-flex justify-content-between align-items-center container-fluid">
<a href="/" class="btn col-5"><i class="fas bg- fa-2x fa-home" style="color:blue"></i> <h4 class="font-weight-bold" style="color: blue ;">Voltar a página inicial</h4></a>
<a href="/clients/logout" class="btn col-5"><i class="fas fa-2x fa-sign-out-alt" style="color:red"></i><h4 class="text-danger font-weight-bold">Sair</h4></a>
</div>

<div class="container-fluid">
<div class="row d-flex justify-content-center">

            <div class="col-xl-6 col-md-12 mb-8">
              <div class="card border-left-primary shadow h-100 py-2 border border-warning">
                <a class="text-decoration-none text-warning" href="/reservas">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 font-weight-bold text-danger text-uppercase mb-1">Gerenciar reservas</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-hamburger fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>

            <div class="col-xl-6 col-md-12 mb-8">
              <div class="card border-left-warning shadow h-100 py-2 border border-warning">
              <a class="text-decoration-none text-warning" href="/mudarinformacoes">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 font-weight-bold text-danger text-uppercase mb-1">Mudar informações de perfil</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
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