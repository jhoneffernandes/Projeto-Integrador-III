<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Burger $burger
 */
?>
<div class="bg border border-warning mb-3 d-flex justify-content-around">
    <?= $this->Html->link(__('Voltar para a lista de cards'), ['action' => 'index'], ['class' => 'text-white mx-5 my-5 font-weight-bold btn btn-danger']) ?>
    <a class="mx-5 my-5 font-weight-bold btn btn-warning" href="/paineladm">Voltar para o painel administrativo</a>
</div>
<div class="row d-flex justify-content-center align-items-center">
    
    <div class="column d-flex justify-content-center align-items-center">

    <div class="column-responsive column-80">
        <div class="burgers form content">
            <?= $this->Form->create($burger,['class'=>'d-flex text-danger align-items-center flex-column justify-content-center h3 font-weight-bold text-center']) ?>
            <fieldset>
            <legend class="text-center h2 text-danger font-weight-bold"><?= __('Cadastro de cards da página inicial') ?></legend>
            <div class="dividerzred"><hr></div>
            <?php
                    echo $this->Form->control('name',['label'=>['text'=>'Título do card','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                    echo $this->Form->control('imgname',['label'=>['text'=>'Imagem do card','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar'),['class'=>'font-weight-bold text-white btn btn-danger']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    </div>
</div>