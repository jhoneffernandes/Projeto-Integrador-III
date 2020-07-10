<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Burger[]|\Cake\Collection\CollectionInterface $burgers
 */
?>
<div class="burgers index content">
<h3 class="text-center h2 font-weight-bold text-danger"><?= __('Cards da página inicial') ?></h3>
<?= $this->Html->link(__('Cadastrar novos cards'), ['action' => 'add'], ['class' => 'font-weight-bold btn my-4 btn-danger button float-left']) ?>
<a href="/paineladm"><button class="font-weight-bold btn my-4 btn-danger button float-right">Voltar para o painel</button></a>  
   
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nº do card') ?></th>
                    <th><?= $this->Paginator->sort('Título') ?></th>
                    <th><?= $this->Paginator->sort('Nome da imagem') ?></th>
                    <th class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($burgers as $burger): ?>
                <tr>
                    <td><?= $this->Number->format($burger->id) ?></td>
                    <td><?= h($burger->name) ?></td>
                    <td><?= h($burger->imgname) ?></td>
                    <td class="actions d-flex justify-content-around">
                        <?= $this->Html->link(__('Alterar informações'), ['action' => 'edit', $burger->id]) ?>
                        <?= $this->Form->postLink(__('Excluir card'), ['action' => 'delete', $burger->id], ['confirm' => __('Você tem certeza que deseja excluir o card {0}?', $burger->id)]) ?>
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
