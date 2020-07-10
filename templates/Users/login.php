<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container-fluid my-5">
    <div class="row text-center d-flex justify-content-center align-items-center flex-column">
        
    <div class="users form text-center d-flex justify-content-center align-items-center flex-column">
    <?= $this->Flash->render() ?>
    <h3 class="bg3 text-danger h2 font-weight-bold">Login do painel administrativo</h3>
    <div class="dividerzred mb-2 w-100"><hr></div>
    <?= $this->Form->create() ?>
    <fieldset class="d-flex align-items-center flex-column justify-content-center h3 font-weight-bold text-center">
        <legend class="my-5"><?= __('Digite seu nome de usuário e sua senha') ?></legend>
        <h3 class="bg3 text-danger font-weight-bold">Nome</h3>

        <?= $this->Form->control('username',['label'=>false],['class'=>'d-flex align-items-center flex-column w-100'],['required' => true]) ?>
        <h3 class="bg3 mt-4 text-danger font-weight-bold">Senha</h3>
        
        <?= $this->Form->control('password',['label'=>false],['class'=>'d-flex align-items-center flex-column w-100'],['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Entrar'),['class'=>'h3 rounded btn-warning my-3 mx-2 font-weight-bold']); ?>
    <?= $this->Form->end() ?>
</div>

        <div class="d-flex justify-content-between my-5 bg-warning rounded">
<h5 class="font-weight-bold my-5 mx-5"> Área exclusiva para o administrador, <a href="/clients/login" class="text-info">clique aqui para ir ao login de cliente</a></h5> 
        </div>

</div>
</div>

<?php
$this->assign('title', 'Gela Guela - Entrar na conta');
?>