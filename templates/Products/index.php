<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="products index content">
<h3 class="text-center h2 font-weight-bold text-danger"><?= __('Produtos') ?></h3>
<?= $this->Html->link(__('Cadastrar novo produto'), ['action' => 'add'], ['class' => 'font-weight-bold btn my-4 btn-danger button float-left']) ?>
<a href="/paineladm"><button class="font-weight-bold btn my-4 btn-danger button float-right">Voltar para o painel</button></a>  
<div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('preço') ?></th>
                    <th><?= $this->Paginator->sort('informações') ?></th>
                    <th><?= $this->Paginator->sort('categoria') ?></th>
                    <th><?= $this->Paginator->sort('arquivo de imagem') ?></th>
                    <th class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= h($product->name) ?></td>
                    <td>R$ <?= $this->Number->format($product->price) ?></td>
                    <td><?= h($product->description) ?></td>
                    <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                    <td><?= h($product->img_name) ?></td>
                    <td class="actions d-flex justify-content-around">
                        <?= $this->Html->link(__('Editar informações'), ['action' => 'edit', $product->id]) ?>
                        <?= $this->Form->postLink(__('Excluir produto'), ['action' => 'delete', $product->id], ['confirm' => __('Você tem certeza que deseja excluir o produto  {0}?', $product->id)]) ?>
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
