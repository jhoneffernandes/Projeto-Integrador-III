<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation[]|\Cake\Collection\CollectionInterface $reservations
 */
?>
<div class="reservations index content">
    <?= $this->Html->link(__('New Reservation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reservations') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?= $this->Number->format($reservation->total) ?></td>
                    <td><?= h($reservation->created_at) ?></td>
                    <td><?= $reservation->has('client') ? $this->Html->link($reservation->client->name, ['controller' => 'Clients', 'action' => 'view', $reservation->client->id]) : '' ?></td>
                    <td><?= $this->Number->format($reservation->id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reservation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reservation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
