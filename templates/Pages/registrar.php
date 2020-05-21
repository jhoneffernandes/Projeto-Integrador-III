<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gela Guela - Página do cadastro de registro de usuário</title>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg">

<?= $this->element('header'); ?>


<main class="mb-4 mt-n2">

    <div class="container register-form my-5">
        <div class="form">
            <div class="note d-flex justify-content-center align-items-center">
                <p class="h3 text-warning">Registrar conta</p>
            </div>

            <div class="form-content font-weight-bold">
                <div class="row d-flex justify-content-center align-items-center flex-wrap">
                        
                    <div class="form-group my-3 col-12">
                      <label for="username" class="text-danger">Nome</label><br>
                            <input type="text" class="form-control" placeholder="Nome completo*" value=""/>
                        </div>

                        <div class="form-group my-3 col-12">
                          <label for="username" class="text-danger">CPF</label><br>
                                <input type="text" class="form-control" placeholder="CPF válido*" value=""/>
                            </div>

                        <div class="form-group my-3 col-12">
                          <label for="username" class="text-danger">Telefone de contato</label><br>
                           <input type="text" class="form-control" placeholder="Celular (ou telefone) *" value=""/>
                        </div>

                        <div class="form-group my-3 col-12">
                          <label for="username" class="text-danger">Senha</label><br>
                            <input type="text" class="form-control" placeholder="Senha *" value=""/>
                        </div>

                        <div class="form-group my-3 col-12">
                          <label for="username" class="text-danger">Confirme a senha</label><br>
                            <input type="text" class="form-control" placeholder="Confirme sua senha *" value=""/>
                        </div>
                </div>

                <div class="d-flex justify-content-between mt-5">
                <a href="login"> <button class="btn text-warning font-weight-bold btn-md bg-danger" type="button">Enviar</button> </a>
                <a href="\"> <button class="btn text-warning font-weight-bold btn-md bg-secondary" type="button">Voltar</button> </a>
              </div>

            </div>
                <div class="text-warning d-flex justify-content-between mt-5 bg-danger">
                    <h5 class="font-weight-bold my-5 mx-5"> Já possui conta? <a href="login" class="text-info">Clique aqui para entrar nela.</a></h5> 
                   </div>
            </div>
        </div>
    </div>    
</main>

<?= $this->element('footer'); ?>

</body>
</html>