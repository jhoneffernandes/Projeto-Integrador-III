<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gela Guela - Página para falar conosco</title>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body class="bg">

<?= $this->element('header'); ?>

<main class="mb-4 mt-n2">

    <div class="containercardapio mb-5">

        <img src="img/bannerteste.png" alt="">
        
        <div class="centralizartextobanner">
        
          <H1></H1>
        
        </div>
        
        </div>

        <div class="container">
        <div class="row d-flex justify-content-center align-items-center text-center mt-5">
            <div class="col-12">
              <h3 class="font-weight-bold mb-5">FALE CONOSCO</h5>
              <h5 class="my-3">(16) 3252-9999</h3>
              <h5 class="my-3">gelaguela@gmail.com</h5>

            </div>
            </div>
            <div class="dividerzred"><hr></div>

            <div class="row d-flex justify-content-center align-items-center text-center mb-3 mt-5">
                <div class="col-12">
                  <h3 class="font-weight-bold mb-5">ENVIE UMA MENSAGEM PRA GENTE</h5>
                  </div>
                </div>
            </div>


            <div class="container bg-danger register-form my-1 font-weight-bold">
              <div class="form">
                 
      
                  <div class="form-content">
                
                    <div class="row d-flex justify-content-center align-items-center flex-wrap">
                            <div class="form-group my-3 col-12">
                            <label for="username" class="text-warning">Nome</label><br>
                                  <input type="text" class="form-control" placeholder="Nome completo*" value=""/>
                              </div>
      
                              <div class="form-group my-3 col-12">
                                <label for="username" class="text-warning">E-mail</label><br>
                                 <input type="text" class="form-control" placeholder="E-mail *" value=""/>
                              </div>
      
                              <div class="form-group my-3 col-12">
                                <label for="username" class="text-warning">Celular</label><br>
                                  <input type="text" class="form-control" placeholder="Celular *" value=""/>
                              </div>
      
                              <div class="form-group my-3 col-12 d-flex justify-content-center flex-column align-items-center">
                                <label for="username" class="text-warning">Mensagem</label><br>
                                <textarea class="col-6" placeholder="Digite sua mensagem" rows="3"></textarea>
                              </div>
                      </div>
      
<hr class="bg-warning my-5">
                      <div class="d-flex justify-content-between mt-5">
                      <button class="btn text-danger font-weight-bold btn-md bg-warning" type="button">Enviar mensagem</button>
                      <button class="btn text-white font-weight-bold btn-md bg-secondary" type="button">Limpar campos</button>
                    </div>
      
                  </div>
                         </div>
                                </div>

</main>

<?= $this->element('footer'); ?>

</body>
</html>