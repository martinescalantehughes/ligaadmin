<?php
App::uses('AppController', 'Controller');
/**
 * Torneos Controller
 *
 * @property Torneo $Torneo
 * @property PaginatorComponent $Paginator
 */
class TorneosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Search.Prg');

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
		

			$this->Torneo->recursive = 2;
            $this->Prg->commonProcess();
            $this->Paginator->settings = array(
	        'conditions' => array($this->Torneo->parseCriteria($this->Prg->parsedParams())),
	        'limit' => 10,
	        'order' => array('Torneo.fechadesde' => 'desc')
	    	);
            $this->set('torneos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Torneo->recursive=2;
		if (!$this->Torneo->exists($id)) {
			throw new NotFoundException(__('Torneo no válido'));
		}
		$options = array('conditions' => array('Torneo.' . $this->Torneo->primaryKey => $id));
		$this->set('torneo', $this->Torneo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function add() {
		if ($this->request->is('post')) {
			$this->Torneo->create();
			if ($this->Torneo->save($this->request->data)) {
				$this->Session->setFlash(__('El torneo ha sido guardado.'), 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El torneo no pudo se guardado, intentelo de nuevo.'), 'default', array('class'=>'alert alert-warning'));
			}
		}
		$this->set(compact('plantels'));
	}

	/*
	public function findPlantelConcatWithClubName()
	{
		$this->virtualFields['nombrecompletito'] = "SELECT  CONCAT (Club.nombrecorto,' - ',Plantel.nombre)
						FROM plantels as Plantel INNER JOIN clubs as Club ON (Plantel.club_id = Club.id)";
											
		return $this->find('list', array(
                    'fields' => array(
                        'Plantel.id', 'Plantel.nombrecompletito'
                    )
                ));
	}
	*/
	
	public function asociarplantel($id=null) {

		$this->loadModel('Plantel');
		$this->loadModel('Club');
		$this->Plantel->recursive = 2;
		$this->Club->recursive = 2;


		if (!$this->Torneo->exists($id)) {
			throw new NotFoundException(__('Torneo no válido'));
		}

		$options = array('conditions' => array('Torneo.' . $this->Torneo->primaryKey => $id));
		$this->set('torneo', $this->Torneo->find('first', $options));
		$this->Torneo->id = $id;

		$torneo = $this->Torneo->find('first',$options);


		if ($this->request->is(array('post', 'put'))) {		
			if ($this->Torneo->save($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El plantel ha sido registrado y asociado correctamente al Torneo', 'default', array('class'=>'alert alert-success') );
		  		return $this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash ('No pudo ser asociado el plantel al torneo. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Torneo.' . $this->Torneo->primaryKey => $id));
			$this->request->data = $this->Torneo->find('first', $options);
		}

		$list= $this->Torneo->Plantel->query('SELECT Plantel.id,  CONCAT (Club.nombrecorto," - ",Plantel.nombre) as nombreentero
			FROM plantels as Plantel INNER JOIN clubs as Club ON (Plantel.club_id = Club.id);');
		
		$plantels = array();
		
		foreach($list as $row) {
		    $id = $row['Plantel']['id'];
		    $nombreentero = $row[0]['nombreentero'];
		    $plantels[$id] = $nombreentero;
		}
		
		$this->set(compact('plantels', 'torneo',$plantels, $torneo));

	}


	

	public function asociarfecha($id=null)
	{		
		$this->loadModel('Fecha');
		if (!$this->Torneo->exists($id)) {
			throw new NotFoundException(__('Torneo no válido'));
		}

		$options = array('conditions' => array('Torneo.' . $this->Torneo->primaryKey => $id));
		$this->set('torneo', $this->Torneo->find('first', $options));
		$this->Torneo->id = $id;
		$torneo= $this->Torneo->find('first', $options);

		if ($this->request->is(array('post', 'put'))) {		
			$this->request->data['Fecha']['torneo_id'] = $id;
			if (!empty($this->Torneo->Fecha->save( $this->request->data ))) {
				$this->Session->setFlash( 'Éxito! La fecha ha sido registrada y asociada correctamente al Torneo', 'default', array('class'=>'alert alert-success') );
		  		return $this->redirect(array('action' => 'view', $id));
			}
			else {
				$this->Session->setFlash ('No pudo ser registrada la fecha. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Torneo.' . $this->Torneo->primaryKey => $id));
			$this->request->data = $this->Torneo->find('first', $options);
		}
		$this->set(compact('torneo'));
	}



/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Torneo->exists($id)) {
			throw new NotFoundException(__('Torneo no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Torneo->save($this->request->data)) {
				$this->Session->setFlash(__('Las modificaciones han sido guardadas'), 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('No se han podido guardar los cambios. Por favor, intente nuevamente'), 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Torneo.' . $this->Torneo->primaryKey => $id));
			$this->request->data = $this->Torneo->find('first', $options);
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
		$this->Torneo->id = $id;
		if (!$this->Torneo->exists()) {
			throw new NotFoundException(__('Torneo no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Torneo->delete($id,true)) {
			$this->Session->setFlash(__('El torneo ha sido eliminado.'), 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash(__('El torneo no pudo ser eliminado. Por favor, intente nuevaente.'), 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
