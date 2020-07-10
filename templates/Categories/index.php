<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="categories index content">
<h3 class="text-center h2 font-weight-bold text-danger"><?= __('Categorias') ?></h3>
<?= $this->Html->link(__('Cadastrar nova categoria'), ['action' => 'add'], ['class' => 'font-weight-bold btn my-4 btn-danger button float-left']) ?>
<a href="/paineladm"><button class="font-weight-bold btn my-4 btn-danger button float-right">Voltar para o painel</button></a>  
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nº da categoria') ?></th>
                    <th><?= $this->Paginator->sort('Categoria') ?></th>
                    <th class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $this->Number->format($category->id) ?></td>
                    <td><?= h($category->name) ?></td>
                    <td class="actions d-flex justify-content-around">
                        <?= $this->Html->link(__('Alterar categoria'), ['action' => 'edit', $category->id]) ?>
                        <?= $this->Form->postLink(__('Excluir categoria'), ['action' => 'delete', $category->id], ['confirm' => __('Você tem certeza que deseja excluir a categoria  {0}?', $category->id)]) ?>
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
