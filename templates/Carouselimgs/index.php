<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carouselimg[]|\Cake\Collection\CollectionInterface $carouselimgs
 */
?>
<div class="carouselimgs index content">
<h3 class="text-center h2 font-weight-bold text-danger"><?= __('Imagens do carrossel') ?></h3>
<?= $this->Html->link(__('Cadastrar novas imagens'), ['action' => 'add'], ['class' => 'font-weight-bold btn my-4 btn-danger button float-left']) ?>
<a href="/paineladm"><button class="font-weight-bold btn my-4 btn-danger button float-right">Voltar para o painel</button></a>  
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nº do cadastro') ?></th>
                    <th><?= $this->Paginator->sort('Imagem pequena') ?></th>
                    <th><?= $this->Paginator->sort('Imagem média') ?></th>
                    <th><?= $this->Paginator->sort('Imagem grande') ?></th>
                    <th class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carouselimgs as $carouselimg): ?>
                <tr>
                    <td><?= $this->Number->format($carouselimg->id) ?></td>
                    <td><?= h($carouselimg->img_sm_name) ?></td>
                    <td><?= h($carouselimg->img_md_name) ?></td>
                    <td><?= h($carouselimg->img_lg_name) ?></td>
                    <td class="actions d-flex justify-content-around">
                        <?= $this->Html->link(__('Alterar links das imagens'), ['action' => 'edit', $carouselimg->id]) ?>
                        <?= $this->Form->postLink(__('Excluir seção de imagens'), ['action' => 'delete', $carouselimg->id], ['confirm' => __('Você tem certeza que deseja excluir o cadastro {0}?', $carouselimg->id)]) ?>
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
