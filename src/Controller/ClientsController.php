<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientsController extends AppController
{ public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['register','login','logout','changeInfo']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $clients = $this->paginate($this->Clients);

        $this->set(compact('clients'));
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('client'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $client = $this->Clients->newEmptyEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('A conta foi cadastrada com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível cadastrar o cliente, tente novamente mais tarde'));
        }
        $this->set(compact('client'));
    }


    public function register()
    {
        $this->viewBuilder()->setLayout('gela');

        $client = $this->Clients->newEmptyEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('A conta foi cadastrada com sucesso'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Não foi possível cadastrar o cliente, tente novamente mais tarde'));
        }
        $this->set(compact('client'));
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('gela');
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            $cliente = $this->Clients->find('all')->where(['email'=>$dados['email']]);

            $cliente = $cliente->first();

            if($cliente != null){
                if(password_verify($dados['password'],$cliente->password)){
                    $this->getRequest()->getSession()->write('client',$cliente);
                    return $this->redirect(['controller'=>'Pages','action'=>'display','painelcliente']);
                } else {
                    $this->Flash->error(__('Senha errada.'));    
                }
            } else {
                $this->Flash->error(__('E-mail não encontrado.'));
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('O cliente foi alterado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao tentar as informações, tente novamente mais tarde.'));
        }
        $this->set(compact('client'));
    }

    public function changeInfo() {
        $sessao = $this->request->getSession();
if(!is_null($sessao->read('client'))){

    $client = $this->Clients->get($sessao->read('client')->id, [
        'contain' => [],
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
        $client = $this->Clients->patchEntity($client, $this->request->getData());
        if ($this->Clients->save($client)) {
            $this->Flash->success(__('Suas informações foram alteradas com sucesso.'));

            return $this->redirect('/painelcliente');
        }
        $this->Flash->error(__('Ocorreu um erro ao tentar mudar a senha, tente novamente mais tarde.'));
    }
    $this->set(compact('client'));
}
       
    }

    public function logout(){
        $this->getRequest()->getSession()->delete('client');
        $this->getRequest()->getSession()->delete('cart');

        return $this->redirect('/');
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->get($id);
        if ($this->Clients->delete($client)) {
            $this->Flash->success(__('O cliente foi excluido com sucesso.'));
        } else {
            $this->Flash->error(__('O cliente não foi excluido com sucesso, tente novamente mais tarde'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
