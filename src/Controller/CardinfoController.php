<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cardinfo Controller
 *
 * @property \App\Model\Table\CardinfoTable $Cardinfo
 *
 * @method \App\Model\Entity\Cardinfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CardinfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cardinfo = $this->paginate($this->Cardinfo);

        $this->set(compact('cardinfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Cardinfo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cardinfo = $this->Cardinfo->get($id, [
            'contain' => []
        ]);

        $this->set('cardinfo', $cardinfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cardinfo = $this->Cardinfo->newEntity();
        if ($this->request->is('post')) {
            $cardinfo = $this->Cardinfo->patchEntity($cardinfo, $this->request->getData());
            if ($this->Cardinfo->save($cardinfo)) {
                $this->Flash->success(__('The cardinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cardinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('cardinfo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cardinfo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cardinfo = $this->Cardinfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cardinfo = $this->Cardinfo->patchEntity($cardinfo, $this->request->getData());
            if ($this->Cardinfo->save($cardinfo)) {
                $this->Flash->success(__('The cardinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cardinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('cardinfo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cardinfo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cardinfo = $this->Cardinfo->get($id);
        if ($this->Cardinfo->delete($cardinfo)) {
            $this->Flash->success(__('The cardinfo has been deleted.'));
        } else {
            $this->Flash->error(__('The cardinfo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
