<?php
App::uses('AppController', 'Controller');
/**
 * PersonaltecnicosPlantels Controller
 *
 * @property PersonaltecnicosPlantel $PersonaltecnicosPlantel
 * @property PaginatorComponent $Paginator
 */
class PersonaltecnicosPlantelsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonaltecnicosPlantel->recursive = 0;
		$this->set('personaltecnicosPlantels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PersonaltecnicosPlantel->exists($id)) {
			throw new NotFoundException(__('Invalid personaltecnicos plantel'));
		}
		$options = array('conditions' => array('PersonaltecnicosPlantel.' . $this->PersonaltecnicosPlantel->primaryKey => $id));
		$this->set('personaltecnicosPlantel', $this->PersonaltecnicosPlantel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonaltecnicosPlantel->create();
			if ($this->PersonaltecnicosPlantel->save($this->request->data)) {
				$this->Session->setFlash(__('The personaltecnicos plantel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personaltecnicos plantel could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PersonaltecnicosPlantel->exists($id)) {
			throw new NotFoundException(__('Invalid personaltecnicos plantel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PersonaltecnicosPlantel->save($this->request->data)) {
				$this->Session->setFlash(__('The personaltecnicos plantel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personaltecnicos plantel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PersonaltecnicosPlantel.' . $this->PersonaltecnicosPlantel->primaryKey => $id));
			$this->request->data = $this->PersonaltecnicosPlantel->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PersonaltecnicosPlantel->id = $id;
		if (!$this->PersonaltecnicosPlantel->exists()) {
			throw new NotFoundException(__('Invalid personaltecnicos plantel'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PersonaltecnicosPlantel->delete()) {
			$this->Session->setFlash(__('The personaltecnicos plantel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The personaltecnicos plantel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
