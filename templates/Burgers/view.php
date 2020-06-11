<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Burger $burger
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Burger'), ['action' => 'edit', $burger->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Burger'), ['action' => 'delete', $burger->id], ['confirm' => __('Are you sure you want to delete # {0}?', $burger->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Burgers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Burger'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="burgers view content">
            <h3><?= h($burger->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($burger->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imgname') ?></th>
                    <td><?= h($burger->imgname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($burger->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
