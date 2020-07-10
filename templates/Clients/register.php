<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>


    <div class="container-fluid my-5">
<div class="row text-center d-flex justify-content-center align-items-center flex-column"">
        <div class="clients form content text-center d-flex justify-content-center align-items-center flex-column">
           
        <p class="h2 mt-3 mx-5 text-center">Cadastrar conta - Cliente</p>
                <div class="dividerzyell mb-2 w-100"><hr></div>
        <?= $this->Form->create($client,['class'=>'']) ?>
            <fieldset class="d-flex align-items-center flex-column justify-content-center h3 font-weight-bold text-center">
               <div class="d-flex justify-content-center align-items-center flex-column">
                <h3 class="my-3 font-weight-bold text-danger text-danger">Nome</h3>
        <?= $this->Form->control('name',['label'=>false],['class'=>'d-flex align-items-center flex-column w-100'],['required' => true]) ?>

        <h3 class="my-3 font-weight-bold text-danger text-danger">E-mail</h3>
        <?= $this->Form->control('email',['label'=>false],['class'=>'d-flex align-items-center flex-column w-100'],['required' => true]) ?>

        <h3 class="my-3 font-weight-bold text-danger text-danger">Celular</h3>
        <?= $this->Form->control('phone',['label'=>false],['class'=>'d-flex align-items-center flex-column w-100'],['required' => true]) ?>

        <h3 class="my-3 font-weight-bold text-danger text-danger">CPF</h3>
        <?= $this->Form->control('cpf',['label'=>false],['class'=>'d-flex align-items-center flex-column w-100'],['required' => true]) ?>
        
        <h3 class="my-3 font-weight-bold text-danger text-danger">Senha</h3>
        <?= $this->Form->control('password',['label'=>false],['class'=>'d-flex align-items-center flex-column w-100'],['required' => true]) ?>
                </div>
            </fieldset>
            <div class=" d-flex justify-content-center align-items-center my-4">
            <?= $this->Form->button(__('Criar conta'),['class'=>'h3 rounded btn-warning my-3 mx-2 font-weight-bold']) ?>
            </div>
            <?= $this->Form->end() ?>
            <div class="d-flex justify-content-between mt-5 bg-warning rounded border border-danger">
<h5 class="font-weight-bold my-5 mx-5"> Já possui uma conta? <a href="/entrar" class="text-info">Clique aqui para entrar nela</a></h5> 
        </div>
        </div>
</div>
</div>
<script type="text/javascript">
    $("#phone").mask("(00)0000-0000");
    $("#cpf").mask("000.000.000-00");
    </script>
<?php
$this->assign('title', 'Gela Guela - Registrar conta');
?>