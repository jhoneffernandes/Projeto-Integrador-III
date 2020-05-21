<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gela Guela - Página do cardápio de lanches</title>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg">

<?= $this->element('header'); ?>


<main class="mb-4 mt-n2">



<div class="containercardapio">

<img src="img/bannerlanches.jpg" alt="">

<div class="centralizartextobanner text-nowrap">

  <H1>Lanches</H1>

</div>

</div>

<div class="container marketing my-5">
  <div class="row d-flex justify-content-center align-items-center">
    
    <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
<img class="circuloitens" src="img/xtudo.jpeg" alt="">

      <h2 class="my-4 fontetema text-nowrap">X-tudo</h2>
      <h4 class="my-4 text-danger">Por R$14,99</h4>

      <p class="h5">Hambúrguer, bacon, ovo, presunto, mussarela, alface, tomate e maionese.</p>
      <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
    </div>

    <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
      <img class="circuloitens" src="img/xfrango.jpg" alt="">
      
            <h2 class="my-4 fontetema text-nowrap">X-frango</h2>
            <h4 class="my-4 text-danger">Por R$11,99</h4>
      
            <p class="h5">Filé de frango grelhado, queijo mussarela, tomate e maionese.</p>
            <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
          </div>


          <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
            <img class="circuloitens" src="img/cachorroquente.jpg" alt="">
            
                  <h2 class="my-4 fontetema text-nowrap">Cachorro-quente</h2>
                  <h4 class="my-4 text-danger">Por R$7,00</h4>
            
                  <p class="h5">Salsicha, maionese, alface, cebola, molho de tomate e batata palha.</p>
                  <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
                </div>

                <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
                  <img class="circuloitens" src="img/xtudo.jpeg" alt="">
                  
                        <h2 class="my-4 fontetema text-nowrap">X-tudo</h2>
                        <h4 class="my-4 text-danger">Por R$14,99</h4>
                  
                        <p class="h5">Hambúrguer, bacon, ovo, presunto, mussarela, alface, tomate e maionese.</p>
                        <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
                      </div>
                  
                      <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
                        <img class="circuloitens" src="img/xfrango.jpg" alt="">
                        
                              <h2 class="my-4 fontetema text-nowrap">X-frango</h2>
                              <h4 class="my-4 text-danger">Por R$11,99</h4>
                        
                              <p class="h5">Filé de frango grelhado, queijo mussarela, tomate e maionese.</p>
                              <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
                            </div>
                  
                  
                            <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
                              <img class="circuloitens" src="img/cachorroquente.jpg" alt="">
                              
                                    <h2 class="my-4 fontetema text-nowrap">Cachorro-quente</h2>
                                    <h4 class="my-4 text-danger">Por R$7,00</h4>
                              
                                    <p class="h5">Salsicha, maionese, batata palha, alface, cebola e molho de tomate.</p>
                                    <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
                                  </div>

  </div>
</div>


</main>

<?= $this->element('footer'); ?>

</body>
</html>