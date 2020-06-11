<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carouselimgs Controller
 *
 * @property \App\Model\Table\CarouselimgsTable $Carouselimgs
 * @method \App\Model\Entity\Carouselimg[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarouselimgsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $carouselimgs = $this->paginate($this->Carouselimgs);

        $this->set(compact('carouselimgs'));

    }

    /**
     * View method
     *
     * @param string|null $id Carouselimg id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carouselimg = $this->Carouselimgs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('carouselimg'));

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {    
        $carouselimg = $this->Carouselimgs->newEmptyEntity();
        if ($this->request->is('post')) {
            $carouselimg = $this->Carouselimgs->patchEntity($carouselimg, $this->request->getData());
            if ($this->Carouselimgs->save($carouselimg)) {
                $this->Flash->success(__('The carouselimg has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carouselimg could not be saved. Please, try again.'));
        }
        $this->set(compact('carouselimg'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carouselimg id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {     
            $carouselimg = $this->Carouselimgs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carouselimg = $this->Carouselimgs->patchEntity($carouselimg, $this->request->getData());
            if ($this->Carouselimgs->save($carouselimg)) {
                $this->Flash->success(__('The carouselimg has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carouselimg could not be saved. Please, try again.'));
        }
        $this->set(compact('carouselimg'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carouselimg id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {        
        $this->request->allowMethod(['post', 'delete']);
        $carouselimg = $this->Carouselimgs->get($id);
        if ($this->Carouselimgs->delete($carouselimg)) {
            $this->Flash->success(__('The carouselimg has been deleted.'));
        } else {
            $this->Flash->error(__('The carouselimg could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
