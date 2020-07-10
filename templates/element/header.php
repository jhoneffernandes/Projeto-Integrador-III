<header class="bg2">
    <nav class="d-flex justify-content-between navbar h4 navbar-expand-lg navbar-light font-weight-bold">
        <a class="navbar-brand logo" href="/"><img src="../img/gglogo.svg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link text-warning" href="/produtos">Cardápio</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-warning" href="/localizacao">Localização</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="/contato">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="/sobre">Sobre</a>
            </li>
          
          </ul>
          <div class="dropdown-divider bg text-warning"></div>

          <form class="form-inline">
            
            <?php $sessao = $this->request->getSession();
                  if (!is_null($sessao->read('client'))): ?>
            <a href="/painelcliente" class="btn mx-3"><i class="fas fa-2x fa-user" style="color:yellow"></i><h4 class="text-warning font-weight-bold">Perfil</h4></a>
            <a href="/clients/logout" class="btn mx-3"><i class="fas fa-2x fa-sign-out-alt" style="color:yellow"></i><h4 class="text-warning font-weight-bold">Sair</h4></a>
            
            <?php endif; ?>
            
            <?php $sessao = $this->request->getSession();
                  if (is_null($sessao->read('client'))): ?>
            
            <a href="/registrar"><button class="btn bg-warning my-3 mx-2 font-weight-bold" type="button"><p class="h5 mt-1 font-weight-bold">Registrar</p></button></a>
            <a href="/entrar"><button class="btn bg-warning my-3 mx-2 font-weight-bold" type="button"><p class="h5 mt-1 font-weight-bold">Entrar</p></button></a>
            
            <?php endif; ?>
                      </form>
         </div>
       </nav>
</header>
