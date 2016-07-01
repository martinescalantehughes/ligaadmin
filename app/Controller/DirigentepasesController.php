<?php
App::uses('AppController', 'Controller');
/**
 * Dirigentepases Controller
 *
 * @property Dirigentepase $Dirigentepase
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DirigentepasesController extends AppController {

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
	public function isAuthorized($user)
	{
		if($user['role'] == 'user')
		{
			if(in_array($this->action, array('index', 'view')))
			{
				return true;
			}
			else
			{
				if($this->Auth->user('id'))
				{
					$this->Session->setFlash('No puede acceder', 'default', array('class' => 'alert alert-danger'));
					$this->redirect($this->Auth->redirect());
				}
			}
		}
		
		return parent::isAuthorized($user);
	}




	public function index() {
		$this->Dirigentepase->recursive = 0;
		$this->set('dirigentepases', $this->Paginator->paginate());
	}


	public function lista_de_pases($id = null) {
		$this->Dirigentepase->recursive = 2;
		$this->Paginator->settings = array(
        'conditions' => array('Dirigentepase.club_id' => $id, '(Dirigentepase.fechadesde) <= (CURDATE())', '(Dirigentepase.fechahasta) >= (CURDATE())'),
        'limit' => 10,
        'order' => array('Dirigentepase.fechadesde' => 'desc')
    	);
    	$dirigentepases = $this->Paginator->paginate('Dirigentepase');

    	$options = array('conditions' => array('Club.id' => $id));
		$club= $this->Dirigentepase->Club->find('first', $options);
    	$this->set(compact('dirigentepases','club'));
	}

	public function historicopases($id = null) {
		$this->Dirigentepase->recursive = 2;
		$this->Paginator->settings = array(
        'conditions' => array('Dirigentepase.club_id' => $id),
        'limit' => 10,
        'order' => array('Dirigentepase.fechadesde' => 'desc')
    	);
    	$dirigentepases = $this->Paginator->paginate('Dirigentepase');

    	$options = array('conditions' => array('Club.id' => $id));
		$club= $this->Dirigentepase->Club->find('first', $options);
    	$this->set(compact('dirigentepases','club'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dirigentepase->exists($id)) {
			throw new NotFoundException(__('Invalid dirigentepase'));
		}
		$options = array('conditions' => array('Dirigentepase.' . $this->Dirigentepase->primaryKey => $id));
		$this->set('dirigentepase', $this->Dirigentepase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		$this->loadModel('Dirigenteclub');
		if (!$this->Dirigenteclub->exists($id)) {
			throw new NotFoundException(__('Dirigente no válido'));
		}

		if ($this->request->is('post')) {
			$this->Dirigentepase->create();
			$this->request->data['Dirigentepase']['dirigenteclub_id'] = $id;
			if ($this->Dirigentepase->save($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El pase ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
				return $this->redirect(array('controller'=>'dirigenteclubs','action' => 'view',$id));
			} else {
				$this->Session->setFlash ('El pase no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		}
		
		$clubs = $this->Dirigentepase->Club->find('list');
		$this->set(compact('clubs','id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dirigentepase->exists($id)) {
			throw new NotFoundException(__('Invalid dirigentepase'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dirigentepase->save($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Dirigentepase.' . $this->Dirigentepase->primaryKey => $id));
			$this->request->data = $this->Dirigentepase->find('first', $options);
		}
		$options = array('conditions' => array('Dirigentepase.' . $this->Dirigentepase->primaryKey => $id));
		$dirigentepase =  $this->Dirigentepase->find('first', $options);
		$clubs = $this->Dirigentepase->Club->find('list');
		$this->set(compact('dirigentepase', 'clubs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dirigentepase->id = $id;
		if (!$this->Dirigentepase->exists()) {
			throw new NotFoundException(__('Pase no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dirigentepase->delete()) {
			$this->Session->setFlash('El Pase ha sido eliminado', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('El Pase no pudo ser eliminado, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
