<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
<div class="container-fluid">

<div class="text-danger text-center">
            <div class="d-flex align-items-center flex-column">
      <img class="masthead-avatar my-3" src="../img/gglogo.svg" alt="">
                <h1 class="my-3 mb-0 fontetema">Fale conosco</h1>
                <div>
                    <div>
                    <i class="fas fa-2x fa-hamburger my-3"></i>
                      <i class="fas fa-2x fa-hamburger my-3 text-warning"></i>
                      <i class="fas fa-2x fa-hamburger my-3"></i>
                      <i class="fas fa-2x fa-hamburger my-3 text-warning"></i>
                      <i class="fas fa-2x fa-hamburger my-3"></i>

                    </div>
                </div>
                <p class="font-weight-bold mb-3 h4">Conteúdo da página - Nosso e-mail, telefone e formulário de contato</p>
            </div>
        </div>
        <div class="dividerzyell"><hr></div>

        <div class="row d-flex justify-content-center align-items-center text-center mt-5">
            <div class="col-12">
              <p class="h4 font-weight-bold my-3">Celular: (16) 98824-2568</p>
              <p class="h4 font-weight-bold my-3">E-mail de contato: murylo2015taqua@gmail.com</p>

            </div>
            </div>
            
            <div class="dividerzyell mt-5"><hr></div>

            <div class="row d-flex justify-content-center align-items-center text-center mb-3 mt-5">
                <div class="col-12">
                  <p class="h2 font-weight-bold mb-5 text-danger">ENVIE UMA MENSAGEM PRA GENTE</p>
                  </div>
                </div>


<div class="row d-flex align-items-center flex-column">

    <div class="column bg-warning">
        <div class="messages form content">
            <?= $this->Form->create($message,['class'=>'d-flex text-danger align-items-center flex-column justify-content-center h3 font-weight-bold text-center']) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('nome',['class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']);
                    echo $this->Form->control('email',['class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']);
                    echo $this->Form->control('celular',['class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']);
                    echo $this->Form->control('mensagem',['class'=>'d-flex align-items-center justify-content-around mx-5 my-4 w-75']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('ENVIAR'),['class'=>'bg-warning btn font-weight-bold mb-3']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    $("#celular").mask("(00)0000-0000");
    </script>
<?php
$this->assign('title', 'Gela Guela - Fale Conosco');
?>