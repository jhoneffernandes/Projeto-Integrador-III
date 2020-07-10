<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message[]|\Cake\Collection\CollectionInterface $messages
 */
?>
<div class="messages index content">
<h3 class="text-center h2 font-weight-bold text-danger"><?= __('Mensagens') ?></h3>
<a href="/paineladm"><button class="font-weight-bold btn my-4 btn-danger button float-right">Voltar para o painel</button></a>  
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('celular') ?></th>
                    <th class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $message): ?>
                <tr>
                    <td><?= $this->Number->format($message->id) ?></td>
                    <td><?= h($message->nome) ?></td>
                    <td><?= h($message->email) ?></td>
                    <td><?= h($message->celular) ?></td>
                    <td class="actions d-flex justify-content-around">
                        <?= $this->Html->link(__('Ver mensagem'), ['action' => 'view', $message->id]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $message->id], ['confirm' => __('Você tem certeza que deseja excluir a mensagem {0}?', $message->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira página')) ?>
            <?= $this->Paginator->prev('< ' . __('Página anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima página') . ' >') ?>
            <?= $this->Paginator->last(__('última página') . ' >>') ?>
        </ul>
        <p class="text-center font-weight-bold my-5"><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} resultados de um total de {{count}}')) ?></p>
    </div>
</div>
