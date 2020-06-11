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
            <?= $this->Html->link(__('List Carouselimgs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carouselimgs form content">
            <?= $this->Form->create($carouselimg) ?>
            <fieldset>
                <legend><?= __('Add Carouselimg') ?></legend>
                <?php
                    echo $this->Form->control('imgname');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
