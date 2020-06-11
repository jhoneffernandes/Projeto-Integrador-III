<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carouselimg[]|\Cake\Collection\CollectionInterface $carouselimgs
 */
?>
<div class="carouselimgs index content">
    <?= $this->Html->link(__('New Carouselimg'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carouselimgs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('imgname') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carouselimgs as $carouselimg): ?>
                <tr>
                    <td><?= $this->Number->format($carouselimg->id) ?></td>
                    <td><?= h($carouselimg->imgname) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carouselimg->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carouselimg->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carouselimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carouselimg->id)]) ?>
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
