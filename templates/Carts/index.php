<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart[]|\Cake\Collection\CollectionInterface $carts
 */
?>
<div class="carts index content">
<h3 class="text-center h2 font-weight-bold text-danger"><?= __('Reservas') ?></h3>
<a href="/paineladm"><button class="font-weight-bold btn my-4 btn-danger button float-right">Voltar para o painel</button></a>  
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('Iniciada em') ?></th>
                    <th><?= $this->Paginator->sort('Finalizada em') ?></th>
                    <th><?= $this->Paginator->sort('Cliente') ?></th>
                    <th class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carts as $cart): ?>
                <tr>
                    <td><?= $this->Number->format($cart->id) ?></td>
                    <td><?= $this->Number->format($cart->total) ?></td>
                    <td><?= h($cart->created_at) ?></td>
                    <td><?= h($cart->completed_at) ?></td>
                    <td><?= $cart->has('client') ? $this->Html->link($cart->client->name, ['controller' => 'Clients', 'action' => 'view', $cart->client->id]) : '' ?></td>
                    <td class="actions d-flex- justify-content-center">
                        <?= $this->Html->link(__('Ver reserva'), ['action' => 'view', $cart->id]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $cart->id], ['confirm' => __('Você tem certeza que deseja cancelar a reserva {0}?', $cart->id)]) ?>
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
