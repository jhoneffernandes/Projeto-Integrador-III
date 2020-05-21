<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gela Guela - Página para entrar na conta</title>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body class="bg">

<?= $this->element('header'); ?>

<main class="mb-4 mt-n2">

    <div>
        <h3 class="text-center text-danger my-5 pt-5">Digite suas informações para logar no site</h3>
        <div class="container font-weight-bold">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <form class="form" action="" method="post">
                            <div class="form-group">
                                <label for="username" class="text-danger">Nome</label><br>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-danger">Senha</label><br>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="form-group d-flex justify-content-between my-5">
                                <a href="edicaoperfil"> <button class="btn text-warning font-weight-bold btn-md bg-danger" type="button">Enviar</button> </a>
                                <a href="\"> <button class="btn text-warning font-weight-bold btn-md bg-secondary" type="button">Voltar</button> </a>

                            </div>
                            <div class="text-warning d-flex justify-content-between my-5 bg-danger">
                             <h5 class="font-weight-bold my-5 mx-5"> Não possui conta? <a href="registrar" class="text-info">Clique aqui para se registrar</a></h5> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    

</main>

<?= $this->element('footer'); ?>

</body>
</html>