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
            <?= $this->Html->link(__('List Burgers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="burgers form content">
            <?= $this->Form->create($burger) ?>
            <fieldset>
                <legend><?= __('Add Burger') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('imgname');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
