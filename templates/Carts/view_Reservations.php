<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 */
?>
<div class="row">
        <div class="">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cart'), ['action' => 'edit', $cart->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cart'), ['action' => 'delete', $cart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cart'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    <div class="column">
        <div class="carts view content table-responsive">
            <h1>Informações da reserva</h1>
            <h3>Nº da reserva: <?= h($cart->id) ?></h3>
            <table class="table table-striped table-bordered table-hover">
                 <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($cart->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iniciada em') ?></th>
                    <td><?= h($cart->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Finalizada em') ?></th>
                    <td><?= h($cart->completed_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($cart->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Img Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cart->products as $products) : ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->name) ?></td>
                            <td><?= h($products->price) ?></td>
                            <td><?= h($products->description) ?></td>
                            <td><?= h($products->category_id) ?></td>
                            <td><?= h($products->img_name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
