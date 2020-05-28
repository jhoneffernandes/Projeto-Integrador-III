<nav class="navbar navbar-dark bg-danger">
<a class="navbar-brand logo" href="/painel">
<?= $this->Html->image('gglogo.svg', ['alt' => 'Image']); ?>

</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-warning font-weight-bold" href="#">Gerenciar produtos<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-warning font-weight-bold" href="#">Gerenciar reservas</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-warning font-weight-bold" href="#">Gerenciar informações de perfil</a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item active d-flex flex-nowrap justify-content-between">
            <a class="nav-link text-warning font-weight-bold" href="#">Voltar para a página inicial</a>
            <a class="nav-link text-warning font-weight-bold" href="#">Sair</a>

          </li>
        </ul>
    </div>
    </nav>