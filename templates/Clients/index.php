<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<div class="clients index content">
<h3 class="text-center h2 font-weight-bold text-danger"><?= __('Usuários') ?></h3>
<a href="/paineladm"><button class="font-weight-bold btn my-4 btn-danger button float-right">Voltar para o painel</button></a>  
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nº do usuário') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('E-mail') ?></th>
                    <th><?= $this->Paginator->sort('Celular') ?></th>
                    <th><?= $this->Paginator->sort('CPF') ?></th>
                    <th class="actions"><?= __('') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= $this->Number->format($client->id) ?></td>
                    <td><?= h($client->name) ?></td>
                    <td><?= h($client->email) ?></td>
                    <td><?= h($client->phone) ?></td>
                    <td><?= h($client->cpf) ?></td>
                    <td class="actions d-flex justify-content-around">
                        <?= $this->Form->postLink(__('Excluir usuário'), ['action' => 'delete', $client->id], ['confirm' => __('Você tem certeza que deseja excluir o usuário {0}?', $client->id)]) ?>
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
