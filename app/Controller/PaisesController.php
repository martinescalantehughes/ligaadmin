<?php
App::uses('AppController', 'Controller');
/**
 * Paises Controller
 *
 * @property Paise $Paise
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PaisesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');


    

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Paise->recursive = 0;
		$this->set('paises', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Paise->exists($id)) {
			throw new NotFoundException(__('Invalid paise'));
		}
		$options = array('conditions' => array('Paise.' . $this->Paise->primaryKey => $id));
		$this->set('paise', $this->Paise->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paise->create();
			if ($this->Paise->save($this->request->data)) {
				$this->Session->setFlash(__('The paise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paise could not be saved. Please, try again.'));
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
		if (!$this->Paise->exists($id)) {
			throw new NotFoundException(__('Invalid paise'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Paise->save($this->request->data)) {
				$this->Session->setFlash(__('The paise has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paise could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Paise.' . $this->Paise->primaryKey => $id));
			$this->request->data = $this->Paise->find('first', $options);
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
		$this->Paise->id = $id;
		if (!$this->Paise->exists()) {
			throw new NotFoundException(__('Invalid paise'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Paise->delete()) {
			$this->Session->setFlash(__('The paise has been deleted.'));
		} else {
			$this->Session->setFlash(__('The paise could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
}
