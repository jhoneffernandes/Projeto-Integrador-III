<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gela Guela - Página da localização do estabelecimento</title>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg">

<?= $this->element('header'); ?>

<main class="mb-4 mt-n2">

    <div class="containercardapio mb-5">

        <img src="img/gelabanner.png" alt="">
        
        <div class="centralizartextobanner">
        
          <H1>Venha conhecer o Gela!</H1>
        
        </div>
        
        </div>

<div class="container-fluid">
 
        <div class="row d-flex justify-content-center align-items-center text-center">
          <div class="col-lg-6 col-md-12">
            <h3 class="font-weight-bold mb-5">VENHA NOS CONHECER!</h3>
            <h5>Endereço: Rua Tafarel Silva Nº 325 Taquaritinga-SP</h5>
          </div>
          <div class="col-md-6 col-sm-12 localizacaoimg">
           <img src="IMGS/gelaplace.png" alt="">
          </div>
        </div>
  
        <div class="dividerzred"><hr></div>

        <div class="row d-flex justify-content-center align-items-center text-center mt-5">
            <div class="col-lg-6 col-md-12">
              <h3 class="font-weight-bold mb-5">HORÁRIOS DE ATENDIMENTO</h3>
              <h5>De segunda a sábado das 18hrs as 00hrs</h5>
            </div>
            <div class="col-md-6 col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d14857.506362865732!2d-48.51402352031464!3d-21.414437872649938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-21.4043159!2d-48.4990039!4m5!1s0x94b93bac6e46b8cd%3A0xa898cbaa4c3c399d!2sgoogle%20maps%20gela%20guela%20taquaritinga!3m2!1d-21.424531599999998!2d-48.5115336!5e0!3m2!1spt-BR!2sbr!4v1586888174123!5m2!1spt-BR!2sbr" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
          </div>
        </div>
</main>

<?= $this->element('footer'); ?>

</body>
</html>