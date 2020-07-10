<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 */
?>
<div class="bg border border-warning mb-3 d-flex justify-content-around">
<a class="mx-5 my-5 font-weight-bold btn btn-danger text-white" href="/carts">Voltar para a lista de reservas</a>
    <a class="mx-5 my-5 font-weight-bold btn btn-warning" href="/paineladm">Voltar para o painel administrativo</a>
    <?= $this->Form->postLink(__('Excluir reserva'), ['action' => 'delete', $cart->id], ['confirm' => __('Você tem certeza que deseja excluir a reserva {0}?', $cart->id), 'class' => 'mx-5 my-5 font-weight-bold btn btn-danger text-white']) ?>

</div>

<div class="row d-flex justify-content-center align-items-center">
    <div class="column">
        <div class="carts view content">
            <h3 class="text-center h2 text-danger font-weight-bold mb-4">Reserva Nº <?= h($cart->id) ?></h3>
            <table class="table table-striped table-bordered table-hover h4">
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $cart->has('client') ? $this->Html->link($cart->client->name, ['controller' => 'Clients', 'action' => 'view', $cart->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nº da reserva') ?></th>
                    <td><?= $this->Number->format($cart->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td>R$ <?= $this->Number->format($cart->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criada em') ?></th>
                    <td><?= h($cart->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Finalizada em') ?></th>
                    <td><?= h($cart->completed_at) ?></td>
                </tr>
            </table>
            <div class="related h4 mt-5">
                <h3 class="text-center font-weight-bold mb-5"><?= __('Produtos na reserva') ?></h3>
                <?php if (!empty($cart->products)) : ?>
                <div class="table">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th class="mx-5"><?= __('Nome') ?></th>
                            <th class="mx-5"><?= __('Preço') ?></th>
                            <th class="mx-5"><?= __('Nº da categoria') ?></th>
                        </tr>
                        <?php foreach ($cart->products as $products) : ?>
                        <tr>
                            <td class="mx-5"><?= h($products->name) ?></td>
                            <td class="mx-5"><?= h($products->price) ?></td>
                            <td class="mx-5"><?= h($products->category_id) ?></td>
                               </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
