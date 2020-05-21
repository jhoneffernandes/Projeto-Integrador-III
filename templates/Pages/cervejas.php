<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gela Guela - Página do cardápio de cervejas</title>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body class="bg">

<?= $this->element('header'); ?>


<main class="mb-4 mt-n2">

<div class="containercardapio">

<img src="img/cervejas.jpg" alt="">

<div class="centralizartextobanner text-nowrap">

  <H1>Cervejas</H1>

</div>

</div>

<div class="container marketing my-5">
  <div class="row d-flex justify-content-center align-items-center">
    
    <div class="col-12 col-md-5 col-lg-3 mx-4 my-5 text-center d-flex justify-content-center align-items-center flex-column">
<img class="circuloitens" src="img/brahma.jpg" alt="">

      <h2 class="my-4 fontetema text-nowrap">Brahma Lata</h2>
      <h4 class="my-4 text-danger">Por R$2,60</h4>

      <p class="h5">350 ml</p>
      <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
    </div>

    <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
      <img class="circuloitens" src="img/skol.jpg" alt="">
      
            <h2 class="my-4 fontetema text-nowrap">Skol Lata</h2>
            <h4 class="my-4 text-danger">Por R$2,99</h4>
      
            <p class="h5">473 ml</p>
            <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
          </div>


          <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
            <img class="circuloitens" src="img/antartica.jpg" alt="">
            
                  <h2 class="my-4 fontetema text-nowrap">Antartica Lata</h2>
                  <h4 class="my-4 text-danger">Por R$2,69</h4>
            
                  <p class="h5">350 ml</p>
                  <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
                </div>

                <div class="col-12 col-md-5 col-lg-3 mx-4 my-5 text-center d-flex justify-content-center align-items-center flex-column">
                  <img class="circuloitens" src="img/brahma.jpg" alt="">
                  
                        <h2 class="my-4 fontetema text-nowrap">Brahma Lata</h2>
                        <h4 class="my-4 text-danger">Por R$2,60</h4>
                  
                        <p class="h5">350 ml</p>
                        <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
                      </div>
                  
                      <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
                        <img class="circuloitens" src="img/skol.jpg" alt="">
                        
                              <h2 class="my-4 fontetema text-nowrap">Skol Lata</h2>
                              <h4 class="my-4 text-danger">Por R$2,99</h4>
                        
                              <p class="h5">473 ml</p>
                              <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
                            </div>
                  
                  
                            <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
                              <img class="circuloitens" src="img/antartica.jpg" alt="">
                              
                                    <h2 class="my-4 fontetema text-nowrap">Antartica Lata</h2>
                                    <h4 class="my-4 text-danger">Por R$2,69</h4>
                              
                                    <p class="h5">350 ml</p>
                                    <a class="my-4 btn btn-danger text-warning" href="#" role="button"><p class="h4">Clique aqui para encomendar</p></a>
                                  </div>

  </div>
</div>
</main>

<?= $this->element('footer'); ?>

</body>
</html>