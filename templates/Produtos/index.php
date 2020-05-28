<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produtos
 */
?>
<div class="produtos bg-danger my-5 index content d-flex justify-content-center flex-column align-items-center">

    <h3 class="text-warning"><?= __('Produtos') ?></h3>


    <div class="table-responsive">
        <table class="table table-light table-striped table-bordered table-hover">
            <thead>
                <tr>
                <button class="btn text-warning font-weight-bold mx-2 btn-md bg-light my-1" type="button">    <?= $this->Html->link(__('Novo produto'), ['action' => 'add']) ?> </button>

                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('preço') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('descrição') ?></th>
                    <th class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $this->Number->format($produto->id) ?></td>
                    <td><?= h($produto->nome) ?></td>
                    <td><?= h($produto->preço) ?></td>
                    <td><?= h($produto->descrição) ?></td>
                    <td class="actions d-flex justify-content-around">
                                <?= $this->Html->link(__('   Editar   '), ['action' => 'edit', $produto->id]) ?>
                        <?= $this->Form->postLink(__('   Excluir   '), ['action' => 'delete', $produto->id], ['confirm' => __('Você tem certeza que deseja excluir esse produto? # {0}?', $produto->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination d-flex align-items-center justify-content-center">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <button class="btn text-warning font-weight-bold mx-2 btn-md bg-light" type="button"> <?= $this->Paginator->prev('< ' . __('Página anterior')) ?> </button>
            <?= $this->Paginator->numbers() ?>
            <button class="btn text-warning font-weight-bold mx-2 btn-md bg-light" type="button"> <?= $this->Paginator->next(__('Próxima página') . ' >') ?> </button>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p class="text-warning h5"><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} produtos de um total de {{count}}')) ?></p>
    </div>
</div>