<?php
App::uses('AppController', 'Controller');
/**
 * Locales Controller
 *
 * @property Locale $Locale
 * @property PaginatorComponent $Paginator
 */
class LocalesController extends AppController {

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
		$this->Locale->recursive = 0;
		$this->set('locales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Locale->exists($id)) {
			throw new NotFoundException(__('Invalid locale'));
		}
		$options = array('conditions' => array('Locale.' . $this->Locale->primaryKey => $id));
		$this->set('locale', $this->Locale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Locale->create();
			if ($this->Locale->save($this->request->data)) {
				$this->Session->setFlash(__('The locale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locale could not be saved. Please, try again.'));
			}
		}
		$plantels = $this->Locale->Plantel->find('list');
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
		if (!$this->Locale->exists($id)) {
			throw new NotFoundException(__('Invalid locale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Locale->save($this->request->data)) {
				$this->Session->setFlash(__('The locale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Locale.' . $this->Locale->primaryKey => $id));
			$this->request->data = $this->Locale->find('first', $options);
		}
		$plantels = $this->Locale->Plantel->find('list');
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
		$this->Locale->id = $id;
		if (!$this->Locale->exists()) {
			throw new NotFoundException(__('Invalid locale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Locale->delete()) {
			$this->Session->setFlash(__('The locale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The locale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
