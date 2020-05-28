<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>

<div class="container-fluid my-5">
<div class="row d-flex justify-content-center flex-column align-items-center">
    <div class="column">
        <div class="d-flex justify-content-between flex-column align-items-center">      
        <h4 class="h1 text-center"><?= __('Editar mensagem (teste)') ?></h4>
           
            <div class="d-flex justify-content-between my-4 font-weight-bold bg-white">

            <h4 class="mx-5 my-4">
            <?= $this->Form->postLink(
                __('Excluir esssa mensagem'),
                ['action' => 'delete', $message->id],
                ['confirm' => __('Você tem certeza que deseja excluir a mensagem {0}?', $message->nome), 'class' => '']
            ) ?>
            </h4>

<h4 class="mx-5 my-4">
            <?= $this->Html->link(__('Voltar para a lista das mensagens'), ['action' => 'index'], ['class' => '']) ?>
</h4>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="messages form content my-3 d-flex justify-content-center flex-column align-items-center text-center">
            <?= $this->Form->create($message) ?>
            <div class="container font-weight-bold">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <div class="col-md-12">
            <fieldset class="form font-weight-bold text-center d-flex justify-content-center">

            <div class="form-group d-flex justfy-content-center flex-column">
            <label class="text-danger" for="nome">Nome</label>
            <input class="form-control" name="nome" type="text" id="nome" value="<?= h($message->nome) ?>"/>
            </div>

            <div class="form-group email d-flex justfy-content-center flex-column">
            <label class="text-danger" for="email">E-mail</label>
            <input class="form-control" name="email" type="email" id="email" value="<?= h($message->email) ?>"/>
            </div>

            <div class="form-group d-flex justfy-content-center flex-column">
            <label class="text-danger" for="celular">Celular</label>
            <input class="form-control" name="celular" type="number" id="celular" value="<?= h($message->celular) ?>" />
            </div>

            <div class="form-group d-flex justfy-content-center flex-column">
            <label class="text-danger" for="mensagem">Mensagem</label>
            <textarea class="form-control" name="mensagem" type="textarea" id="mensagem"><?= h($message->mensagem) ?></textarea>
            </div>

            </fieldset>
            <button title="Salvar alterações" type="submit" class="btn text-danger font-weight-bold mx-2 btn-md bg-light" type="button">
                Salvar alterações
        </button>
        </div>
        </div>
        </div>
        </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
