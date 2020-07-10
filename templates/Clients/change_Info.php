<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <div class="column">
     
    </div>
</div>


<div class="bg border border-warning mb-3 d-flex justify-content-center">
    <a class="mx-5 my-5 font-weight-bold btn btn-warning" href="/painelcliente">Voltar para o painel</a>
</div>

<div class="row d-flex justify-content-center align-items-center">

    <div class="column">
    <div class="clients form content">
            <?= $this->Form->create($client,['class'=>'d-flex text-danger align-items-center flex-column justify-content-center h3 font-weight-bold text-center']) ?>
            <fieldset>
                <legend class="text-center h2 text-danger font-weight-bold"><?= __('Mudar informações de perfil') ?></legend>
                <?php
                    echo $this->Form->control('email',['label'=>['text'=>'E-mail','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                    echo $this->Form->control('phone',['label'=>['text'=>'Celular','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                    echo $this->Form->control('password',['value' => '','label'=>['text'=>'Senha','class'=>'d-flex align-items-center flex-column justify-content-center mx-5 my-4']]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar alterações'),['class'=>'font-weight-bold h3 text-white btn btn-danger']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#phone").mask("(00)0000-0000");
    </script>