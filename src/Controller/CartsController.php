<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\I18n\FrozenTime;

/**
 * Carts Controller
 *
 * @property \App\Model\Table\CartsTable $Carts
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartsController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['addItem','removeItem','closeReservation','listReservations','viewReservations','cancelReservations']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients'],
        ];
        $carts = $this->paginate($this->Carts);

        $this->set(compact('carts'));
    }

    /**
     * View method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cart = $this->Carts->get($id, [
            'contain' => ['Clients', 'Products'],
        ]);

        $this->set(compact('cart'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cart = $this->Carts->newEmptyEntity();
        if ($this->request->is('post')) {
            $cart = $this->Carts->patchEntity($cart, $this->request->getData());
            if ($this->Carts->save($cart)) {
                $this->Flash->success(__('O carrinho foi salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O carrinho não foi salvo com sucesso, tente novamente mais tarde.'));
        }
        $clients = $this->Carts->Clients->find('list', ['limit' => 200]);
        $products = $this->Carts->Products->find('list', ['limit' => 200]);
        $this->set(compact('cart', 'clients', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cart = $this->Carts->get($id, [
            'contain' => ['Products'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cart = $this->Carts->patchEntity($cart, $this->request->getData());
            if ($this->Carts->save($cart)) {
                $this->Flash->success(__('O carrinho foi salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O carrinho não foi salvo com sucesso, tente novamente mais tarde.'));
        }
        $clients = $this->Carts->Clients->find('list', ['limit' => 200]);
        $products = $this->Carts->Products->find('list', ['limit' => 200]);
        $this->set(compact('cart', 'clients', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cart = $this->Carts->get($id);
        if ($this->Carts->delete($cart)) {
            $this->Flash->success(__('A reserva foi excluída com sucesso.'));
        } else {
            $this->Flash->error(__('A reserva não foi excluída com sucesso, tente novamente mais tarde.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function addItem() {
        //$this->request->allowMethod(['post']);
        
$sessao = $this->request->getSession();
$dados = $this->request->getData();
$produto = $this->Carts->Products->get($dados['product_id']);

if(is_null($sessao->read('client'))){
 return $this->redirect(['controller'=>'Clients','action'=>'login']);
}

if(is_null($sessao->read('cart'))) {
$cart = $this->Carts->newEmptyEntity();
$cart->total =  $produto->price * $dados['quantity'];
$cart->created_at = FrozenTime::now();
$cart->client = $this->Carts->Clients->get($sessao->read('client.id'));

$cart->products = [];
$cart->products[0] = $produto;
$cart->products[0]->_joinData = new \Cake\ORM\Entity;
$cart->products[0]->_joinData->quantity = $dados['quantity'];
$cart->products[0]->_joinData->price = $produto->price;
$cart->setDirty('products',true);


$ins = $this->Carts->save($cart);
$this->Flash->success(__('Produto adicionado no carrinho'));

$sessao->write('cart',$ins->id);
}

else {
$cart = $this->Carts->get($sessao->read('cart'),['contain'=>['Products']]);

$produto->_joinData = new \Cake\ORM\Entity;
$produto->_joinData->quantity = $dados['quantity'];
$produto->_joinData->price = $produto->price;

$cart->products[] = $produto;

$cart->setDirty('products',true);

$cart->total += $dados['quantity'] * $produto->price;

$ins = $this->Carts->save($cart);
$this->Flash->success(__('Produto adicionado no carrinho'));
}
return $this->redirect(['controller'=>'Products','action'=>'listProducts']);
                                }

public function removeItem() {
    //$this->request->allowMethod(['post','delete']);
    $sessao = $this->request->getSession();
    if(!is_null($sessao->read('cart'))) {
    $dados = $this->request->getData();

    $cart = $this->Carts->get($sessao->read('cart'),['contain'=>['Products']]);
    foreach($cart->products as $product) {
        if($product->id == $dados['product_id']){
            $this->Carts->Products->unlink($cart, [$product]);
            $cart->total -= $product->_joinData->quantity * $product->_joinData->price;
        }
    }
    $this->Carts->save($cart);
}

return $this->redirect(['controller'=>'Products','action'=>'listProducts']);

}

public function closeReservation() {

    $sessao = $this->request->getSession();
    if(!is_null($sessao->read('cart'))) { 
        $cart = $this->Carts->get($sessao->read('cart'));
        $cart->completed_at = FrozenTime::now();
        $this->getRequest()->getSession()->delete('cart');
        $this->Carts->save($cart);
        $this->Flash->success(__('Reserva efetuada com sucesso!'));
        return $this->redirect(['controller'=>'Products','action'=>'listProducts']);
    }

}

public function listReservations()
{ 

    $this->viewBuilder()->setLayout('user');

    $sessao = $this->request->getSession();
    if(!is_null($sessao->read('client'))){
    
          $carts = $this->Carts->find('all')->contain(['Clients','Products'])->where(['client_id'=>$sessao->read('client')->id])->all();
          $this->set(compact('carts'));
                                        }
    }
     
    
    public function cancelReservations($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cart = $this->Carts->get($id);
        if ($this->Carts->delete($cart)) {
            $this->Flash->success(__('A reserva foi cancelada com sucesso.'));
        } else {
            $this->Flash->error(__('A reserva não foi cancelada com sucesso, tente novamente mais tarde'));
        }

        return $this->redirect(['action' => 'listReservations']);
    }

    public function viewReservations($id = null) {
        $cart = $this->Carts->get($id, [
            'contain' => ['Clients', 'Products'],
        ]);

        $this->set(compact('cart'));
    }
  

}
