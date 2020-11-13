<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InstitutionsPeople Controller
 *
 * @property \App\Model\Table\InstitutionsPeopleTable $InstitutionsPeople
 *
 * @method \App\Model\Entity\InstitutionsPerson[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InstitutionsPeopleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Institutions']
        ];
        $institutionsPeople = $this->paginate($this->InstitutionsPeople);

        $this->set(compact('institutionsPeople'));
    }

    /**
     * View method
     *
     * @param string|null $id Institutions Person id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $institutionsPerson = $this->InstitutionsPeople->get($id, [
            'contain' => ['People', 'Institutions']
        ]);

        $this->set('institutionsPerson', $institutionsPerson);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $institutionsPerson = $this->InstitutionsPeople->newEntity();
        if ($this->request->is('post')) {
            debug($this->request->getData());
            $institutionsPerson = $this->InstitutionsPeople->patchEntity($institutionsPerson, $this->request->getData());
            if ($this->InstitutionsPeople->save($institutionsPerson)) {
                $this->Flash->success(__('The institutions person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The institutions person could not be saved. Please, try again.'));
        }
        $people = $this->InstitutionsPeople->People->find('list', ['limit' => 200]);
        $institutions = $this->InstitutionsPeople->Institutions->find('list', ['limit' => 200]);
        $this->set(compact('institutionsPerson', 'people', 'institutions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Institutions Person id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $institutionsPerson = $this->InstitutionsPeople->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $institutionsPerson = $this->InstitutionsPeople->patchEntity($institutionsPerson, $this->request->getData());
            if ($this->InstitutionsPeople->save($institutionsPerson)) {
                $this->Flash->success(__('The institutions person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The institutions person could not be saved. Please, try again.'));
        }
        $people = $this->InstitutionsPeople->People->find('list', ['limit' => 200]);
        $institutions = $this->InstitutionsPeople->Institutions->find('list', ['limit' => 200]);
        $this->set(compact('institutionsPerson', 'people', 'institutions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Institutions Person id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $institutionsPerson = $this->InstitutionsPeople->get($id);
        if ($this->InstitutionsPeople->delete($institutionsPerson)) {
            $this->Flash->success(__('The institutions person has been deleted.'));
        } else {
            $this->Flash->error(__('The institutions person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
