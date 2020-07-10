<div class="container-fluid">
<h1 class="text-center h1 fontetema font-weight-bold text-danger">Nosso cardápio</h1>
<div class="dividerzred"><hr></div>

<?php $sessao = $this->request->getSession();
                  if (is_null($sessao->read('client'))): ?>
<div class="d-flex justify-content-center align-items-center mt-5 bg rounded border border-danger">
  <div class="col d-flex justify-content-center align-items-center flex-column my-5">
  <p class="h2 text-danger">Ainda não possui uma conta?</p>
  <a class="btn btn-warning font-weight-bold my-3" href="/registrar">Cadastrar conta</a>
</div>

<div class="col d-flex justify-content-center align-items-center flex-column my-5">
<p class="h2 text-danger">Já possui uma conta?</p>
<a class="btn btn-warning font-weight-bold my-3" href="/entrar">Entrar na conta</a>
</div>

</div>
            <?php endif; ?>


<div class="row mt-2 d-flex justify-content-center align-items-center">
<?php foreach($products as $product): ?>
<div class="card border imgcard border-warning text-center font-weight-bold mx-5 my-5" style="width: 18rem;">
  <img class="card-img-top border-bottom border-warning" src="../img/<?= $product->img_name ?>" alt="Imagem do produto">
  <div class="card-body">
    <h5 class="font-weight-bold text-danger"><?= $product->name ?></h5>
    <p class="card-text my-4"><?= $product->description ?></p> 
    <h6 class="card-subtitle mb-3 text-danger font-weight-bold h5">R$<?= $product->price ?></h6>

    <?= $this->Form->create($product,['method'=>'POST','url'=>['controller'=>'Carts','action'=>'addItem']]) ?>
  <?php 
  echo $this->Form->control('product_id', ['type'=>'hidden','value' => $product->id]);
  echo $this->Form->control('quantity',['value' => '1','label'=>['text'=>'Quantidade']]);
  ?>
    <?= $this->Form->button(__('Comprar'),['class'=>'btn mt-4 btn-warning font-weight-bold']) ?>
            <?= $this->Form->end() ?>

  </div>
</div>
<?php endforeach; ?>
</div>

<?php if(!is_null($cart)): ?>
  <div class="navbar fixed-bottom navbar-light bg-light">
<div class="row">
<div class="col-12">
  <h2>Carrinho (Total: R$ <?=$cart->total ?>)</h2>
</div>
<div class="col-12 my-3">
  <a class="btn btn-danger font-weight-bold" href="/carts/close-reservation">Fechar pedido</a>
</div>
<?php foreach($cart->products as $product): ?>
<div class="card border rounded-0 border-danger text-center" style="width: 10rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $product->name ?></h5>
    <h6 class="card-subtitle mb-2 font-weight-bold text-muted">(Quantidade: <?= $product->_joinData->quantity ?>)</h6>

    <?= $this->Form->create($product,['method'=>'POST','url'=>['controller'=>'Carts','action'=>'removeItem']]) ?>
  <?php 
  echo $this->Form->control('product_id', ['type'=>'hidden','value' => $product->id]);
  ?>
    <?= $this->Form->button(__('Remover'),['class'=>'btn btn-danger font-weight-bold']) ?>
            <?= $this->Form->end() ?>

  </div>
</div>
<?php endforeach; ?>
</div>
</div>
<?php endif; ?>

</div>

<?php
$this->assign('title', 'Gela Guela - Cardápio');
?>