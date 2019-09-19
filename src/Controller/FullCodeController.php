<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FullCode Controller
 *
 *
 * @method \App\Model\Entity\FullCode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FullCodeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $fullCode = "teste1";

       echo $fullCode->asXML();
    }

    /**
     * View method
     *
     * @param string|null $id Full Code id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fullCode = $this->FullCode->get($id, [
            'contain' => []
        ]);

        $this->set('fullCode', $fullCode);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fullCode = $this->FullCode->newEntity();
        if ($this->request->is('post')) {
            $fullCode = $this->FullCode->patchEntity($fullCode, $this->request->getData());
            if ($this->FullCode->save($fullCode)) {
                $this->Flash->success(__('The full code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The full code could not be saved. Please, try again.'));
        }
        $this->set(compact('fullCode'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Full Code id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fullCode = $this->FullCode->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fullCode = $this->FullCode->patchEntity($fullCode, $this->request->getData());
            if ($this->FullCode->save($fullCode)) {
                $this->Flash->success(__('The full code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The full code could not be saved. Please, try again.'));
        }
        $this->set(compact('fullCode'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Full Code id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fullCode = $this->FullCode->get($id);
        if ($this->FullCode->delete($fullCode)) {
            $this->Flash->success(__('The full code has been deleted.'));
        } else {
            $this->Flash->error(__('The full code could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
