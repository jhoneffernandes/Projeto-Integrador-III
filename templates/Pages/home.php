<div class="text-danger text-center">
            <div class="container d-flex align-items-center flex-column">
      <img class="masthead-avatar my-3" src="img/gglogo.svg" alt="">
                <h1 class="my-3 mb-0 fontetema">Bem vindos ao site do Gela Guela!</h1>
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
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/promo1.png" class="img-fluid" alt="">
          <div class="carousel-caption d-none d-md-block">
           
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/promo2.png" class="img-fluid" alt="">
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

      <p class="text-center my-5 h4 font-weight-bold"> Vem que vem! Os novos lanches do Gela Guela são os melhores da cidade, nossa nova promoção vai te deixar com água na boca, X-Tudo por apenas R$ 12,90, não perca tempo, vem pro Gela! </p>
      <div class="container marketing my-5">
        <div class="row d-flex justify-content-center align-items-center">
          
        <div class="col my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
            <a href="/lanches" class="text-decoration-none text-danger citens">
            <h2 class="fontetema text-nowrap">Triplo bacon</h2>
              <img class="" src="img/lancheimg2.jpg" alt="">
            </a>
            </div>
      
          <div class="col my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
            <a href="/lanches" class="text-decoration-none text-danger citens">
            <h2 class="fontetema text-nowrap">X-tudo</h2>
              <img class="" src="img/lancheimg1.jpg" alt="">
            </a>
            </div>
      
      
                <div class="col my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
                <a href="/lanches" class="text-decoration-none text-danger citens">
                <h2 class="fontetema text-nowrap">X-costela</h2>
                  <img class="" src="img/lancheimg3.jpg" alt="">
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
          <a href="/lanches">
            <img class="petiscos" src="img/lanche.jpg" alt="lanches">
          <div class="caption post-content">
               <h3>Lanches</h3>            
          </div>
        </a>
  </div>

       <div class="thumbnail">
        <a href="/porcoes">
        <img class="petiscos" src="img/petisco2.jpg" alt="Porções">
            <div class="caption post-content">
                   <h3>Porções</h3>            
             </div>        
            </a>
     </div>

     <div class="thumbnail">
      <a href="/cervejas">
      <img class="petiscos" src="img/cerveja.webp" alt="Cervejas">
          <div class="caption post-content">
                 <h3>Cervejas</h3>            
           </div>
          </a>
   </div>

<div class="thumbnail">
  <a href="/bebidasna">
  <img class="petiscos" src="img/bebidasna.jpg" alt="Bebidas não-alcoólicas">
      <div class="caption post-content">
             <h3>Bebidas não-alcoólicas</h3>            
       </div>
      </a>
</div>
        </div>
        
       
    </div>

    <?php
$this->assign('title', 'Gela Guela - Ínicio');
?>