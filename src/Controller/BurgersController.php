<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Burgers Controller
 *
 * @property \App\Model\Table\BurgersTable $Burgers
 * @method \App\Model\Entity\Burger[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BurgersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $burgers = $this->paginate($this->Burgers);

        $this->set(compact('burgers'));
    }

    /**
     * View method
     *
     * @param string|null $id Burger id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $burger = $this->Burgers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('burger'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {  
        $burger = $this->Burgers->newEmptyEntity();
        if ($this->request->is('post')) {
            $burger = $this->Burgers->patchEntity($burger, $this->request->getData());
            if ($this->Burgers->save($burger)) {
                $this->Flash->success(__('O card foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O card não foi salvo com sucesso, tente novamente mais tarde'));
        }
        $this->set(compact('burger'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Burger id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $burger = $this->Burgers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $burger = $this->Burgers->patchEntity($burger, $this->request->getData());
            if ($this->Burgers->save($burger)) {
                $this->Flash->success(__('O card foi salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O card não foi salvo com sucesso, tente novamente mais tarde'));
        }
        $this->set(compact('burger'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Burger id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $burger = $this->Burgers->get($id);
        if ($this->Burgers->delete($burger)) {
            $this->Flash->success(__('O card foi excluído com sucesso'));
        } else {
            $this->Flash->error(__('O card não foi excluído com sucesso, tente novamente mais tarde.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
