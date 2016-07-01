<?php
App::uses('AppController', 'Controller');
/**
 * Pases Controller
 *
 * @property Pase $Pase
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PasesController extends AppController {

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
			if(in_array($this->action, array('index', 'view', 'lista_de_pases')))
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
		$this->Pase->recursive = 0;
		$this->set('pases', $this->Paginator->paginate());
	}

	public function lista_de_pases($id = null) {
		$this->Pase->recursive = 2;
		$this->Paginator->settings = array(
        'conditions' => array('Pase.club_id' => $id, '(Pase.fechadesde) <= (CURDATE())', '(Pase.fechahasta) >= (CURDATE())'),
        'limit' => 10,
        'order' => array('Pase.fechadesde' => 'desc')
    	);
    	$pases = $this->Paginator->paginate('Pase');
    	
    	$options = array('conditions' => array('Club.id' => $id));
		$club= $this->Pase->Club->find('first', $options);
    	$this->set(compact('pases','club'));
	}

	public function historicopases($id = null) {
		$this->Pase->recursive = 2;
		$this->Paginator->settings = array(
        'conditions' => array('Pase.club_id' => $id),
        'limit' => 10,
        'order' => array('Pase.fechadesde' => 'desc')
    	);
    	$pases = $this->Paginator->paginate('Pase');
    
    	$options = array('conditions' => array('Club.id' => $id));
		$club= $this->Pase->Club->find('first', $options);
    	$this->set(compact('pases','club'));
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pase->exists($id)) {
			throw new NotFoundException(__('Invalid pase'));
		}
		$options = array('conditions' => array('Pase.' . $this->Pase->primaryKey => $id));
		$this->set('pase', $this->Pase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	//me debe pasar el id de jugador jeje 
	public function add($id = null) {
		$this->loadModel('Jugadore');
		if (!$this->Jugadore->exists($id)) {
			throw new NotFoundException(__('Jugador no válido'));
		}

		if ($this->request->is('post')) {
			$this->Pase->create();
			$this->request->data['Pase']['jugadore_id'] = $id;
			if ($this->Pase->save($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El pase ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
				return $this->redirect(array('controller'=>'jugadores','action' => 'view',$id));
			} else {
				$this->Session->setFlash ('El pase no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		}
		
		$clubs = $this->Pase->Club->find('list');
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

		if (!$this->Pase->exists($id)) {
			throw new NotFoundException(__('Pase no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pase->save($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('controller'=>'jugadores','action' => 'view',$this->request->data['Pase']['jugadore_id']));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Pase.' . $this->Pase->primaryKey => $id));
			$this->request->data = $this->Pase->find('first', $options);
			
		}
		$pase=$this->Pase->find('first', $options);
		$clubs = $this->Pase->Club->find('list');
		$this->set(compact('clubs','pase'));	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pase->id = $id;
		if (!$this->Pase->exists()) {
			throw new NotFoundException(__('Pase no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pase->delete()) {
			$this->Session->setFlash('El Pase ha sido eliminado', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('El Pase no pudo ser eliminado, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
