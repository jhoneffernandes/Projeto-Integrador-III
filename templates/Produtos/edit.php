<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gela Guela - Página do painel administrativo</title>
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body class="bg bg-warning">
<?= $this->element('header2'); ?>

<main class="mb-4 mt-n2">

<div class="container-fluid my-5">
<div class="row d-flex justify-content-center flex-column align-items-center">
    <aside class="column">
        <div class="d-flex justify-content-between flex-column align-items-center">
            <h4 class="h1 text-center"><?= __('Editar informações do produto') ?></h4>
           
            <div class="d-flex justify-content-between my-4">
            <button class="btn text-warning font-weight-bold mx-2 btn-md bg-light" type="button">

            <?= $this->Form->postLink(
                __('Excluir esse produto'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Você tem certeza que deseja excluir o produto {0}?', $produto->nome), 'class' => '']
            ) ?>

            </button>

            <button class="btn text-warning font-weight-bold mx-2 btn-md bg-light" type="button">

            <?= $this->Html->link(__('Voltar a lista dos produtos'), ['action' => 'index'], ['class' => '']) ?>

            </button>
            </div>
        </div>
    </aside>
    <div class="column">
        <div class="produtos form content my-3 d-flex justify-content-center flex-column align-items-center text-center">
            <?= $this->Form->create($produto) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('preço');
                    echo $this->Form->control('descrição');
                ?>
            </fieldset>
            <button class="btn text-warning font-weight-bold mx-2 btn-md bg-light" type="button">
            <?= $this->Form->button(__('Salvar alterações')) ?>
            </button>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>

</main>

<?= $this->element('footer'); ?>

</body>
</html>



