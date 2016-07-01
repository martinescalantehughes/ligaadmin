<?php
App::uses('AppController', 'Controller');
/**
 * Visitantes Controller
 *
 * @property Visitante $Visitante
 * @property PaginatorComponent $Paginator
 */
class VisitantesController extends AppController {

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
		$this->Visitante->recursive = 0;
		$this->set('visitantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Visitante->exists($id)) {
			throw new NotFoundException(__('Invalid visitante'));
		}
		$options = array('conditions' => array('Visitante.' . $this->Visitante->primaryKey => $id));
		$this->set('visitante', $this->Visitante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Visitante->create();
			if ($this->Visitante->save($this->request->data)) {
				$this->Session->setFlash(__('The visitante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visitante could not be saved. Please, try again.'));
			}
		}
		$plantels = $this->Visitante->Plantel->find('list');
		$this->set(compact('plantels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Visitante->exists($id)) {
			throw new NotFoundException(__('Invalid visitante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Visitante->save($this->request->data)) {
				$this->Session->setFlash(__('The visitante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The visitante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Visitante.' . $this->Visitante->primaryKey => $id));
			$this->request->data = $this->Visitante->find('first', $options);
		}
		$plantels = $this->Visitante->Plantel->find('list');
		$this->set(compact('plantels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Visitante->id = $id;
		if (!$this->Visitante->exists()) {
			throw new NotFoundException(__('Invalid visitante'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Visitante->delete()) {
			$this->Session->setFlash(__('The visitante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The visitante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
