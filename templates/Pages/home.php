<div class="text-danger text-center">
            <div class="container d-flex align-items-center flex-column">
      <img class="masthead-avatar my-3" src="img/gglogo.svg" alt="">
                <h1 class="my-3 mb-0 fontetema">Bem vindos ao Gela Guela</h1>
                <div>
                    <div>
                    <i class="fas fa-2x fa-hamburger my-3"></i>
                      <i class="fas fa-2x fa-hamburger my-3 text-warning"></i>
                      <i class="fas fa-2x fa-hamburger my-3"></i>
                      <i class="fas fa-2x fa-hamburger my-3 text-warning"></i>
                      <i class="fas fa-2x fa-hamburger my-3"></i>

                    </div>
                </div>
                <p class="font-weight-bold mb-3 h4">Conteúdo da página - Nossas promoções, os lanches mais pedidos da semana, e menu para ver nossos produtos</p>
            </div>
        </div>
        <div class="dividerzyell"><hr></div>
       
     <div id="carouselExampleCaptions" class="carousel slide mt-n3" data-ride="carousel">

      <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="img/bannerfixoPequeno.png" class="img-fluid d-block d-md-none d-lg-none d-xl-none" alt="">
        <img src="img/bannerfixoMedio.png" class="img-fluid d-none d-md-block d-lg-block d-xl-none" alt="">
        <img src="img/bannerfixoGrande.png" class="img-fluid d-none d-xl-block d-lg-none" alt="">
      </div>
      
      <?php foreach ($carouselimgs as $carouselimg): ?>
        <div class="carousel-item">
        <img src="img/<?= ($carouselimg->img_sm_name)?>" class="img-fluid d-block d-md-none d-lg-none d-xl-none" alt="">
        <img src="img/<?= ($carouselimg->img_md_name)?>" class="img-fluid d-none d-md-block d-lg-block d-xl-none" alt="">
        <img src="img/<?= ($carouselimg->img_lg_name)?>" class="img-fluid d-none d-xl-block d-lg-none" alt="">
      </div>
                <?php endforeach; ?>

     
      
       <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
     </div>

      <div class="mt-5" title="Lanches em destaque">
      <h1 class="text-center font-weight-bold my-5 fontetema">Novos lanches do Gela!</h1>
      <div class="dividerzred"><hr></div>

      <p class="text-center my-5 h4 font-weight-bold"> Vem que vem! Os novos lanches do Gela Guela são os melhores da cidade, nossa nova promoção vai te deixar com água na boca, X-Tudo por apenas R$ 12,90, não perca tempo, vem pro Gela! </p>
      <div class="container marketing my-5">
        <div class="row d-flex justify-content-center align-items-center">
          
                        <?php foreach ($burgers as $burger): ?>
                       <div class="col my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
                <a href="/produtos" class="text-decoration-none text-danger citens">
                <h2 class="fontetema text-nowrap"><?= ($burger->name) ?></h2>
                  <img class="" src="img/<?= ($burger->imgname) ?>" alt="">
                </a>
                </div>
                <?php endforeach; ?>

        </div>
      </div>
    </div>
    <div class="dividerzred mt-5"><hr></div>

      <div class="mt-5" title="Menu do Gela">
        <h1 class="text-center my-5 fontetema">Menu do Gela</h1>
        
    <div class="container">
      <img class="imgbanner rounded  border border-danger" src="img/banner1.png" alt="">

    </div>
    <p class="text-center my-5 h4 font-weight-bold"> No Gela Guela você vai encontrar os melhores lanches junto das melhores bebidas do mercado, clique no botão abaixo para ver o nosso cardápio: </p>
    <div class="d-flex align-items-center justify-content-center">
    <a href="/produtos"><button class="btn bg-warning my-3 mx-2 font-weight-bold" type="button"><p class="h5 mt-1 font-weight-bold">Clique aqui para conhecer o cardápio</p></button></a>
    </div>
    </div>
    <div class="dividerzred mt-5"><hr></div>

<div class="mt-5" title="Mais sobre o gela">
  <h1 class="text-center my-5 fontetema">Mais sobre o Gela</h1>
  
<div class="container">
<img class="imgbanner rounded  border border-danger" src="img/testeinfogela.png" alt="">

</div>
<p class="text-center my-5 h4 font-weight-bold"> No Gela Guela você também vai encontrar as melhores bebidas do mercado, além da poder também alugar cadeiras, clique no botão abaixo para entrar em contato com a gente </p>
<div class="d-flex align-items-center justify-content-center">
<a href="/contato"><button class="btn bg-warning my-3 mx-2 font-weight-bold" type="button"><p class="h5 mt-1 font-weight-bold">Clique aqui para ver formas de nos contatar</p></button></a>
</div>
</div>
    <div class="dividerzyell mt-5"><hr></div>

    

    <?php
$this->assign('title', 'Gela Guela - Ínicio');
?>