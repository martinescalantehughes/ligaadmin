<?php
App::uses('AppController', 'Controller');
/**
 * PlantelsTorneos Controller
 *
 * @property PlantelsTorneo $PlantelsTorneo
 * @property PaginatorComponent $Paginator
 */
class PlantelsTorneosController extends AppController {

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
		$this->PlantelsTorneo->recursive = 0;
		$this->set('plantelsTorneos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PlantelsTorneo->exists($id)) {
			throw new NotFoundException(__('Invalid plantels torneo'));
		}
		$options = array('conditions' => array('PlantelsTorneo.' . $this->PlantelsTorneo->primaryKey => $id));
		$this->set('plantelsTorneo', $this->PlantelsTorneo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlantelsTorneo->create();
			if ($this->PlantelsTorneo->save($this->request->data)) {
				$this->Session->setFlash(__('The plantels torneo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plantels torneo could not be saved. Please, try again.'));
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
		if (!$this->PlantelsTorneo->exists($id)) {
			throw new NotFoundException(__('Invalid plantels torneo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PlantelsTorneo->save($this->request->data)) {
				$this->Session->setFlash(__('The plantels torneo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plantels torneo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PlantelsTorneo.' . $this->PlantelsTorneo->primaryKey => $id));
			$this->request->data = $this->PlantelsTorneo->find('first', $options);
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
		$this->PlantelsTorneo->id = $id;
		if (!$this->PlantelsTorneo->exists()) {
			throw new NotFoundException(__('Invalid plantels torneo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PlantelsTorneo->delete()) {
			$this->Session->setFlash(__('The plantels torneo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The plantels torneo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
