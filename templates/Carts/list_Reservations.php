<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart[]|\Cake\Collection\CollectionInterface $carts
 */
?>
<div class="table-responsive bg-white">
<a href="/painelcliente"><button class="font-weight-bold btn btn-danger mt-4 mx-5">Voltar ao painel</button></a>

    <a href="/produtos"><button class="font-weight-bold btn btn-danger mt-4 mx-5">Criar nova reserva</button></a>
        <table class="table my-3 table-striped table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nº da reserva') ?></th>
                    <th><?= $this->Paginator->sort('Total') ?></th>
                    <th><?= $this->Paginator->sort('Iniciada em') ?></th>
                    <th><?= $this->Paginator->sort('Finalizada em') ?></th>
                    <th class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carts as $cart): ?>
                <tr>
                    <td><?= $this->Number->format($cart->id) ?></td>
                    <td>R$ <?= $this->Number->format($cart->total) ?></td>
                    <td><?= h($cart->created_at) ?></td>
                    <td><?= h($cart->completed_at) ?></td>
                    <td class="actions d-flex justify-content-around">
                        <?= $this->Html->link(__('Ver a reserva'), ['action' => 'viewReservations', $cart->id]) ?>
                        <?= $this->Form->postLink(__('Cancelar reserva'), ['action' => 'cancelReservations', $cart->id], ['confirm' => __('Você tem certeza que deseja cancelar a reserva número {0}?', $cart->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        