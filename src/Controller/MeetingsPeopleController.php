<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MeetingsPeople Controller
 *
 * @property \App\Model\Table\MeetingsPeopleTable $MeetingsPeople
 *
 * @method \App\Model\Entity\MeetingsPerson[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeetingsPeopleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Meetings', 'People']
        ];
        $meetingsPeople = $this->paginate($this->MeetingsPeople);

        $this->set(compact('meetingsPeople'));
    }

    /**
     * View method
     *
     * @param string|null $id Meetings Person id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $meetingsPerson = $this->MeetingsPeople->get($id, [
            'contain' => ['Meetings', 'People']
        ]);

        $this->set('meetingsPerson', $meetingsPerson);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $meetingsPerson = $this->MeetingsPeople->newEntity();
        if ($this->request->is('post')) {
            $meetingsPerson = $this->MeetingsPeople->patchEntity($meetingsPerson, $this->request->getData());
            debug($meetingsPerson);
            if ($this->MeetingsPeople->save($meetingsPerson)) {
                $this->Flash->success(__('The meetings person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meetings person could not be saved. Please, try again.'));
        }
        $meetings = $this->MeetingsPeople->Meetings->find('list', ['limit' => 200]);
        $people = $this->MeetingsPeople->People->find('list', ['limit' => 200]);
        $this->set(compact('meetingsPerson', 'meetings', 'people'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Meetings Person id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $meetingsPerson = $this->MeetingsPeople->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $meetingsPerson = $this->MeetingsPeople->patchEntity($meetingsPerson, $this->request->getData());
            if ($this->MeetingsPeople->save($meetingsPerson)) {
                $this->Flash->success(__('The meetings person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meetings person could not be saved. Please, try again.'));
        }
        $meetings = $this->MeetingsPeople->Meetings->find('list', ['limit' => 200]);
        $people = $this->MeetingsPeople->People->find('list', ['limit' => 200]);
        $this->set(compact('meetingsPerson', 'meetings', 'people'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Meetings Person id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $meetingsPerson = $this->MeetingsPeople->get($id);
        if ($this->MeetingsPeople->delete($meetingsPerson)) {
            $this->Flash->success(__('The meetings person has been deleted.'));
        } else {
            $this->Flash->error(__('The meetings person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
