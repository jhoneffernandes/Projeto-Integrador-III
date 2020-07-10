<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="container-fluid my-5">
    <div class="row text-center d-flex justify-content-center align-items-center flex-column">
        
<div class="clients form text-center d-flex justify-content-center align-items-center flex-column">
    <?= $this->Flash->render() ?>
    <h3 class="bg3 text-danger h2 font-weight-bold">Login - Cliente</h3>
    <div class="dividerzred mb-2 w-100"><hr></div>
    <?= $this->Form->create() ?>
    <fieldset class="d-flex align-items-center flex-column justify-content-center h3 font-weight-bold text-center">
        <legend class="my-5"><?= __('Por favor digite seu e-mail e sua senha nos respectivos campos abaixo:') ?></legend>
        <div class="d-flex justify-content-center flex-column">
            <h3 class="bg3 text-danger font-weight-bold">E-mail</h3>
        <?= $this->Form->control('email',['label'=>false],['class'=>'d-flex align-items-center flex-column w-100'],['required' => true]) ?>
        <h3 class="bg3 mt-4 text-danger font-weight-bold">Senha</h3>
        <?= $this->Form->control('password', ['label'=>false],['class'=>'d-flex align-items-center flex-column w-100'],['required' => true]) ?>
        </div>
    </fieldset>
    <?= $this->Form->submit(__('Entrar'),['class'=>'h3 rounded btn-warning my-3 mx-2 font-weight-bold']); ?>
    <?= $this->Form->end() ?>

</div>

        <div class="d-flex justify-content-between my-5 bg-warning rounded">
<h5 class="font-weight-bold my-5 mx-5"> Não possui conta? <a href="/registrar" class="text-info">Clique aqui para se registrar</a></h5> 
        </div>

</div>

<div class="d-flex justify-content-center">
    <a href="/users/login"><button class="btn font-weight-bold btn-secondary">Entrar na área administrativa</button></a>
</div>
</div>

<?php
$this->assign('title', 'Gela Guela - Entrar na conta');
?>