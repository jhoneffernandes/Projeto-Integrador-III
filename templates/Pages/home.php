<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gela Guela - Página inicial</title>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body class="bg">


<?= $this->element('header'); ?>

<main class="mb-4 mt-n2">
     <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Novidade1.jpg" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
           
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/cardapioonline.png" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
          
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/promoção1.jpg" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


      <div class="mt-5" title="Lanches em destaque">
      <h1 class="text-center font-weight-bold my-5 fontetema">Novos lanches do Gela!</h1>
      <div class="dividerzred"><hr></div>

      <p class="text-center my-5 h5"> Vem que vem! Os novos lanches do Géla Guéla são os melhores da cidade, nossa nova promoção vai te deixar com água na boca, X-Tudo por apenas R$ 12,90, não perca tempo, vem pro Géla! </p>
      <div class="container marketing my-5">
        <div class="row d-flex justify-content-center align-items-center">
          
          <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
            <a href="lanches.html" class="text-decoration-none text-danger citens">
              <img class="" src="img/lancheimg2.jpg" alt="">
                  <h2 class="my-4 fontetema text-wrap">Triplo bacon cheddar</h2>
            </a>
            </div>
      
          <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
            <a href="lanches.html" class="text-decoration-none text-danger citens">
              <img class="" src="img/lancheimg1.jpg" alt="">
                   <h2 class="my-4 fontetema text-nowrap">X-tudo</h2>
            </a>
            </div>
      
      
                <div class="col-12 col-md-5 col-lg-3 my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
                <a href="lanches.html" class="text-decoration-none text-danger citens">
                  <img class="" src="img/lancheimg3.jpg" alt="">
                    <h2 class="my-4 fontetema text-nowrap">X-costela</h2>
                </a>
                </div>
              
        </div>
      </div>
    </div>
    <div class="dividerzred mt-5"><hr></div>

      <div class="mt-5" title="Produtos populares">
        <h1 class="text-center my-5 fontetema">Menu do Gela</h1>
        
        <div class="d-flex flex-wrap justify-content-center text-center">

  <div class="thumbnail">
          <a href="lanches.html">
            <img class="petiscos" src="img/lanche.jpg" alt="lanches">
          <div class="caption post-content">
               <h3>Lanches</h3>            
          </div>
        </a>
  </div>

       <div class="thumbnail">
        <a href="porcoes.html">
        <img class="petiscos" src="img/petisco2.jpg" alt="Porções">
            <div class="caption post-content">
                   <h3>Porções</h3>            
             </div>        
            </a>
     </div>

     <div class="thumbnail">
      <a href="cervejas.html">
      <img class="petiscos" src="img/cerveja.webp" alt="Cervejas">
          <div class="caption post-content">
                 <h3>Cervejas</h3>            
           </div>
          </a>
   </div>

<div class="thumbnail">
  <a href="bebidasna.html">
  <img class="petiscos" src="img/bebidasna.jpg" alt="Bebidas não-alcoólicas">
      <div class="caption post-content">
             <h3>Bebidas não-alcoólicas</h3>            
       </div>
      </a>
</div>
        </div>
        
       
    </div>

</main>

<?= $this->element('footer'); ?>



  
</body>
</html>