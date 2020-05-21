<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gela Guela - Página sobre nossa história</title>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body class="bg">

<?= $this->element('header'); ?>

<main class="mb-4 mt-n2">

    <div class="containercardapio mb-5">

        <img src="img/gelabanner.png" alt="">
        
        <div class="centralizartextobanner">
        
          <H1>Sobre o Gela Guela</H1>
        
        </div>
        
        </div>

        <div class="container-fluid marketing my-5">

            <div class="row d-flex justify-content-center align-items-center text-center my-5">
                  
                <div class="col-12">
                    <h3 class="font-weight-bold">NOSSA HISTÓRIA</h3>
                    <h5 class="my-5">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod provident, iusto numquam tempore consectetur odio aliquid inventore voluptas iure perspiciatis magni? Earum impedit ea voluptates excepturi vel deleniti, necessitatibus sit.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum quo aliquam libero inventore aut quasi asperiores molestias expedita, aperiam facilis sit et optio iure rerum at esse eos, cum non!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti doloribus quasi fugit, mollitia eos consectetur, alias iste suscipit enim atque est consequuntur vel! Debitis aliquid voluptatibus atque ipsa incidunt et!Lorem 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta eius tempora enim nulla sint quaerat autem. Illum illo dolores magni, temporibus a quae corrupti, sunt iste libero laboriosam corporis explicabo.
                </h4>

                </div>
               
              </div>

              <div class="dividerzred"><hr></div>


            <div class="row d-flex justify-content-center align-items-center text-center my-5">
                  
                <div class="col-12">
                  <h3 class="font-weight-bold">NOSSOS OBJETIVOS</h3>
                </div>
               
              </div>

            <div class="text-center row d-flex align-items-start justify-content-center">
               
              <div class="col-lg-3 col-md-6 col-sm-12 text-center my-5 mx-3">
                <i class="fas fa-thumbs-up mt-3" style="font-size: 4rem; color: red;"></i>          
                <h2 class="my-4 fontetema">Qualidade</h2>
                
                <p class="h5">Proporcionar produtos de qualidade para nossos clientes, além de proporcionar um local agrádavel para nossos clientes com otimos assentos, banheiros e outras instalações como televisões e climatização</p>
              </div>
          
              <div class="col-lg-3 col-md-6 col-sm-12 text-center my-5 mx-3">
                <i class="fas fa-utensils mt-3" style="font-size: 4rem; color: red;" ></i>         

                      <h2 class="my-4 fontetema">Receptividade</h2>
                
                      <p class="h5">Tratar nossos clientes da melhor forma possível, com nossos atendentes sempre dispostos a ajudar e servir da maneira mais respeitosa e carismática possível, que é a forma que eles merecem</p>
                    </div>
          
          
                    <div class="col-lg-3 col-md-6 col-sm-12 text-center my-5 mx-3">
                        <i class="fas fa-guitar mt-3" style="font-size: 4rem; color: red;"></i>          
                        
                            <h2 class="my-4 fontetema">Lazer</h2>
                      
                            <p class="h5">Também temos como meta dar a nossos clientes as melhores experiências atráves de shows e ensaios de bateria para nossos clientes aproveitarem o clima descontraido junto a boa música</p>
                          </div>

            </div>
            <div class="dividerzred"><hr></div>

           
          <div class="row d-flex justify-content-center align-items-center text-center my-5">
                  
            <div class="col-12">
              <h3 class="font-weight-bold">NOSSO VÍDEO PROMOCIONAL</h3>
            </div>
            <div class="my-5 container-fluid">

              <iframe width="40%" height="400px" src="https://www.youtube.com/embed/Ylwpvix9Cg0" frameborder="0" gesture="media" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

</main>

<?= $this->element('footer'); ?>

</body>
</html>