<nav class="navbar navbar-dark bg-danger">
<a class="navbar-brand logo" href="/paineladm">
<?= $this->Html->image('gglogo.svg', ['alt' => 'logo do site']); ?>

</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse h4" id="navbarsExample01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-warning font-weight-bold" href="/products">Gerenciar produtos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-warning font-weight-bold" href="/carts">Gerenciar reservas</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-warning font-weight-bold" href="/messages">Gerenciar mensagens</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-warning font-weight-bold" href="/clients">Gerenciar usuários</a>
          </li><li class="nav-item active">
            <a class="nav-link text-warning font-weight-bold" href="/carouselimgs">Gerenciar carrossel</a>
          </li><li class="nav-item active">
            <a class="nav-link text-warning font-weight-bold" href="/burgers">Gerenciar cards da página inicial</a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item active d-flex flex-nowrap justify-content-between">
            <a class="nav-link text-warning font-weight-bold" href="/">Voltar para a página inicial</a>
            <a class="nav-link text-warning font-weight-bold" href="/users/logout">Sair</a>

          </li>
        </ul>
    </div>
    </nav>