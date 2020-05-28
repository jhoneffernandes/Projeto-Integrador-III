<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>

<div class="container-fluid my-5">
<div class="row d-flex justify-content-center flex-column align-items-center">
    <div class="column">
        <div class="d-flex justify-content-between flex-column align-items-center">
            <h4 class="h1 text-center"><?= __('Editar informações do produto') ?></h4>
           
            <div class="d-flex justify-content-between my-4 font-weight-bold bg-white">

            <h4 class="mx-5 my-4">
            <?= $this->Form->postLink(
                __('Excluir esse produto'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Você tem certeza que deseja excluir o produto {0}?', $produto->nome), 'class' => '']
            ) ?>
            </h4>

<h4 class="mx-5 my-4">
            <?= $this->Html->link(__('Voltar para a lista dos produtos'), ['action' => 'index'], ['class' => '']) ?>
</h4>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="produtos form content my-3 d-flex justify-content-center flex-column align-items-center text-center">
            <?= $this->Form->create($produto) ?>
            <div class="container font-weight-bold">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <div class="col-md-12">
            <fieldset class="form font-weight-bold text-center d-flex justify-content-center">

            <div class="form-group d-flex justfy-content-center flex-column">
            <label class="text-danger" for="nome">Nome</label>
            <input class="form-control" name="nome" type="text" value="<?= h($produto->nome) ?>" id="nome" />
            </div>

            <div class="form-group d-flex justfy-content-center flex-column">
            <label class="text-danger" for="preço">Preço</label>
            <input class="form-control" name="preço" type="text" value="<?= h($produto->preço) ?>" id="preço" />
            </div>

            <div class="form-group d-flex justfy-content-center flex-column">
            <label class="text-danger" for="descrição">Descrição</label>
            <textarea class="form-control" name="descrição" type="text" id="descrição"><?= h($produto->descrição) ?></textarea>
            </div>

            </fieldset>
            <button title="Salvar alterações" type="submit" class="btn text-danger font-weight-bold mx-2 btn-md bg-light" type="button">
                Salvar
        </button>
        </div>
        </div>
        </div>
        </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>



