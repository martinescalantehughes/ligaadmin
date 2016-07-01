<?php
App::uses('AppController', 'Controller');
/**
 * JugadoresPlantels Controller
 *
 * @property JugadoresPlantel $JugadoresPlantel
 * @property PaginatorComponent $Paginator
 */
class JugadoresPlantelsController extends AppController {

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
		$this->JugadoresPlantel->recursive = 0;
		$this->set('jugadoresPlantels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JugadoresPlantel->exists($id)) {
			throw new NotFoundException(__('Invalid jugadores plantel'));
		}
		$options = array('conditions' => array('JugadoresPlantel.' . $this->JugadoresPlantel->primaryKey => $id));
		$this->set('jugadoresPlantel', $this->JugadoresPlantel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JugadoresPlantel->create();
			if ($this->JugadoresPlantel->save($this->request->data)) {
				$this->Session->setFlash(__('The jugadores plantel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jugadores plantel could not be saved. Please, try again.'));
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
		if (!$this->JugadoresPlantel->exists($id)) {
			throw new NotFoundException(__('Invalid jugadores plantel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JugadoresPlantel->save($this->request->data)) {
				$this->Session->setFlash(__('The jugadores plantel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jugadores plantel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JugadoresPlantel.' . $this->JugadoresPlantel->primaryKey => $id));
			$this->request->data = $this->JugadoresPlantel->find('first', $options);
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
		$this->JugadoresPlantel->id = $id;
		if (!$this->JugadoresPlantel->exists()) {
			throw new NotFoundException(__('Invalid jugadores plantel'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JugadoresPlantel->delete()) {
			$this->Session->setFlash(__('The jugadores plantel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jugadores plantel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
