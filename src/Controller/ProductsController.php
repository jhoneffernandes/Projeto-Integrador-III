<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['listProducts']);
    }

    public function listProducts()
    {
        $this->viewBuilder()->setLayout('gela');
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $products = $this->paginate($this->Products);
        $sessao = $this->request->getSession();
        $cart = null;

        if(!is_null($sessao->read('cart'))) {
    $cart = $this->Products->Carts->get($sessao->read('cart'),['contain'=>['Products']]);
        }

        $this->set(compact('products','cart'));
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Categories', 'Reservations'],
        ]);

        $this->set(compact('product'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('O produto foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O produto foi não salvo com sucesso, tente novamente mais tarde.'));
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $reservations = $this->Products->Reservations->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories', 'reservations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Reservations'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('O produto foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O produto foi não salvo com sucesso, tente novamente mais tarde.'));
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $reservations = $this->Products->Reservations->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories', 'reservations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('O produto foi excluído'));
        } else {
            $this->Flash->error(__('O produto não foi excluído, tente novamente mais tarde'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
