<?php
App::uses('AppController', 'Controller');
/**
 * Ligachaquenias Controller
 *
 * @property Ligachaquenia $Ligachaquenia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LigachaqueniasController extends AppController {

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
		$this->Ligachaquenia->recursive = 0;
		$this->set('ligachaquenias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ligachaquenia->exists($id)) {
			throw new NotFoundException(__('Invalid ligachaquenia'));
		}
		$options = array('conditions' => array('Ligachaquenia.' . $this->Ligachaquenia->primaryKey => $id));
		$this->set('ligachaquenia', $this->Ligachaquenia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ligachaquenia->create();
			if ($this->Ligachaquenia->save($this->request->data)) {
				$this->Session->setFlash(__('The ligachaquenia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ligachaquenia could not be saved. Please, try again.'));
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
		if (!$this->Ligachaquenia->exists($id)) {
			throw new NotFoundException(__('Invalid ligachaquenia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ligachaquenia->save($this->request->data)) {
				$this->Session->setFlash(__('The ligachaquenia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ligachaquenia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ligachaquenia.' . $this->Ligachaquenia->primaryKey => $id));
			$this->request->data = $this->Ligachaquenia->find('first', $options);
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
		$this->Ligachaquenia->id = $id;
		if (!$this->Ligachaquenia->exists()) {
			throw new NotFoundException(__('Invalid ligachaquenia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ligachaquenia->delete()) {
			$this->Session->setFlash(__('The ligachaquenia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ligachaquenia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
