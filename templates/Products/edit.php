<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="bg border border-warning mb-3 d-flex justify-content-center">
    <?= $this->Html->link(__('Voltar para a lista de produtos'), ['action' => 'index'], ['class' => 'text-white mx-5 my-5 font-weight-bold btn btn-danger']) ?>
    <a class="mx-5 my-5 font-weight-bold btn btn-warning" href="/paineladm">Voltar para o painel administrativo</a>
    <?= $this->Form->postLink(__('Excluir produto'),['action' => 'delete', $product->id],['confirm' => __('Você tem certeza que deseja excluir o produto {0}?', $product->id), 'class' => 'text-white mx-5 my-5 font-weight-bold btn btn-danger']
            ) ?>
</div>

<div class="row d-flex justify-content-center align-items-center">

    <div class="column">
        <div class="products form content">
            <?= $this->Form->create($product,['class'=>'d-flex text-danger align-items-center flex-column justify-content-center h3 font-weight-bold text-center']) ?>
            <fieldset>
                <legend class="text-center h2 text-danger font-weight-bold"><?= __('Editar informações do produto') ?></legend>
                <div class="dividerzred"><hr></div>

                <?php
                    echo $this->Form->control('name',['label'=>['text'=>'Nome','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                    echo $this->Form->control('price',['label'=>['text'=>'Preço','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                    echo $this->Form->control('description',['label'=>['text'=>'Informações','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                    echo $this->Form->control('category_id',['label'=>['text'=>'Categoria','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                    echo $this->Form->control('img_name',['label'=>['text'=>'Nome da imagem','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar alterações'),['class'=>'font-weight-bold h3 text-white btn btn-danger']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
