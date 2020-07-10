<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>

<div class="bg border border-warning mb-3 d-flex justify-content-around">
<a class="mx-5 my-5 font-weight-bold btn btn-danger text-white" href="/messages">Voltar para a lista de mensagens</a>
    <a class="mx-5 my-5 font-weight-bold btn btn-warning" href="/paineladm">Voltar para o painel administrativo</a>
    <?= $this->Form->postLink(__('Excluir mensagem'), ['action' => 'delete', $message->id], ['confirm' => __('Você tem certeza que deseja excluir a mensagem {0}?', $message->id), 'class' => 'mx-5 my-5 font-weight-bold btn btn-danger text-white']) ?>

</div>

<div class="row d-flex justify-content-center align-items-center">
    <div class="column">
    <div class="messages view content">
            <h3><?= h($message->id) ?></h3>
            <table class="table table-striped table-bordered table-hover h4">
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($message->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($message->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($message->celular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nº da mensagem') ?></th>
                    <td><?= $this->Number->format($message->id) ?></td>
                </tr>
            </table>
            <div class="text h4 text-center mt-5">
                <strong><?= __('Mensagem:') ?></strong>
                <blockquote class="mt-3">
                    <?= $this->Text->autoParagraph(h($message->mensagem)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>