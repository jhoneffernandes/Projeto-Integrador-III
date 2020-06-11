<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carouselimg $carouselimg
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Carouselimg'), ['action' => 'edit', $carouselimg->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carouselimg'), ['action' => 'delete', $carouselimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carouselimg->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carouselimgs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carouselimg'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carouselimgs view content">
            <h3><?= h($carouselimg->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Imgname') ?></th>
                    <td><?= h($carouselimg->imgname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carouselimg->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
