<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message[]|\Cake\Collection\CollectionInterface $messages
 */
?>
<div class="messages index content bg-danger my-5 index content d-flex justify-content-center flex-column align-items-center">
    <h3 class="text-warning"><?= __('Mensagens') ?></h3>

    <div class="table-responsive">
        <table class="table table-light table-striped table-bordered table-hover">
            <thead>
                <tr>
                <button class="btn text-warning font-weight-bold mx-2 btn-md bg-light my-1" type="button">    <?= $this->Html->link(__('Nova mensagem'), ['action' => 'add']) ?> </button>

                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('celular') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $message): ?>
                <tr>
                    <td><?= $this->Number->format($message->id) ?></td>
                    <td><?= h($message->nome) ?></td>
                    <td><?= h($message->email) ?></td>
                    <td><?= $this->Number->format($message->celular) ?></td>
                    <td class="actions d-flex justify-content-around">
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $message->id]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id)]) ?>
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
        <p class="text-warning h5"><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} mensagens de um total de {{count}}')) ?></p>
    </div>
</div>
