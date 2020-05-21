<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gela Guela - Página de edição de informações de perfil</title>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg">

<?= $this->element('header'); ?>


<main class="mb-4 mt-n2">

    <div class="col my-5">
        <div class="row">
          <div class="col font-weight-bold mb-3">
            <div class="card">
              <div class="card-body bg-danger text-warning">
                <div class="e-profile">
                  <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                      <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                          <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">Foto de perfil do usuário</span>
                        </div>
                      </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                      <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">Usuário 1</h4>
                        <p class="mb-0">@usuario1</p>
                        <div class="mt-2">
                          <button class="btn btn-warning font-weight-bold text-danger" type="button">
                            <i class="fa fa-fw fa-camera"></i>
                            <span>Mudar foto</span>
                          </button>
                        </div>
                      </div>
                      <div class="text-center text-sm-right">
                        <span class="badge badge-secondary">Usuário</span>
                        <div class="text-muted"><small class="text-warning">Se registrou em 6 de maio de 2020</small></div>
                      </div>
                    </div>
                  </div>
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="active nav-link bg-warning text-danger">informações</a></li>
                  </ul>
                  <div class="tab-content pt-3">
                    <div class="tab-pane active">
                      <form class="form" novalidate="">
                        <div class="row">
                          <div class="col">
                            <div class="row">
                              <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                  <label>Nome completo</label>
                                  <input class="form-control" type="text" name="name" placeholder="Nome" value="Usuário 1">
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                  <label>Telefone</label>
                                  <input class="form-control" type="text" name="username" placeholder="Telefone" value="(16) 99263-0026">
                                </div>
                              </div>
                              <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                  <label>CPF</label>
                                  <input class="form-control" type="text" name="name" placeholder="Nome" value="999.999.999-99">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-sm-6 my-5">
                            <div class="mb-2"><b>Mudar senha</b></div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Senha atual</label>
                                  <input class="form-control" type="password" placeholder="••••••">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Nova senha</label>
                                  <input class="form-control" type="password" placeholder="••••••">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>Confirme sua nova senha</label>
                                  <input class="form-control" type="password" placeholder="••••••"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-sm-4 d-flex flex-column justify-content-center offset-sm-2  my-2">
                            <div class="mb-2"><b>Notificações no e-mail</b></div>
                            <div class="row">
                              <div class="col">
                                <div class="custom-controls-stacked px-2">
                                                                     <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <label class="custom-control-label"">Notificações sobre pedidos</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label">Notificações sobre promoções</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <label class="custom-control-label">Notificações sobre novidades</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col d-flex justify-content-end">
                            <button class="btn btn-warning font-weight-bold text-danger" type="submit">Salvar alterações</button>
                          </div>
                        </div>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>     

</main>

<?= $this->element('footer'); ?>

</body>
</html>