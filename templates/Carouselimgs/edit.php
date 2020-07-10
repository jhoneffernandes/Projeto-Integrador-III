<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carouselimg $carouselimg
 */
?>

    <div class="bg border border-warning mb-3 d-flex justify-content-center">
    <?= $this->Html->link(__('Voltar para a lista de imagens do carrossel'), ['action' => 'index'], ['class' => 'text-white mx-5 my-5 font-weight-bold btn btn-danger']) ?>
    <a class="mx-5 my-5 font-weight-bold btn btn-warning" href="/paineladm">Voltar para o painel administrativo</a>
    <?= $this->Form->postLink(__('Excluir seção de imagens'),['action' => 'delete', $carouselimg->id],['confirm' => __('Você tem certeza que deseja excluir a seção {0}?', $carouselimg->id), 'class' => 'text-white mx-5 my-5 font-weight-bold btn btn-danger']) ?>
</div>

<div class="row d-flex justify-content-center align-items-center">
 
    <div class="column">
        <div class="carouselimgs form content">
            <?= $this->Form->create($carouselimg,['class'=>'d-flex text-danger align-items-center flex-column justify-content-center h3 font-weight-bold text-center']) ?>
            <fieldset>
                <legend class="text-center h2 text-danger font-weight-bold"><?= __('Editar seção de imagens do carrossel') ?></legend>
                <div class="dividerzred"><hr></div>
                <?php
                    echo $this->Form->control('img_sm_name',['label'=>['text'=>'Imagem pequena','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                    echo $this->Form->control('img_md_name',['label'=>['text'=>'Imagem média','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                    echo $this->Form->control('img_lg_name',['label'=>['text'=>'Imagem grande','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar alterações'),['class'=>'font-weight-bold h3 text-white btn btn-danger']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
