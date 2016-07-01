<?php
App::uses('AppController', 'Controller');
/**
 * Dirigenteclubs Controller
 *
 * @property Dirigenteclub $Dirigenteclub
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DirigenteclubsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Search.Prg','RequestHandler');

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
		$this->Dirigenteclub->recursive = 2;
        $this->Prg->commonProcess();
        $this->Paginator->settings = array(
	        'conditions' => array($this->Dirigenteclub->parseCriteria($this->Prg->parsedParams())),
	        'limit' => 15,
	        'order' => array('Dirigenteclub.apellido' => 'asc')
	    	);
        $this->set('dirigenteclubs', $this->Paginator->paginate());
	}



	public function view($id = null) {
		$this->Dirigenteclub->recursive = 2;
		if (!$this->Dirigenteclub->exists($id)) {
			throw new NotFoundException(__('Dirigente no válido'));
		}
		$options = array('conditions' => array('Dirigenteclub.' . $this->Dirigenteclub->primaryKey => $id));
		$dirigenteclub = $this->Dirigenteclub->find('first', $options);
		$dirigentepases = $this->Dirigenteclub->Dirigentepase->find('all', array('conditions'=>'dirigenteclub_id ='.$dirigenteclub['Dirigenteclub']['id'], 'order' => (array('Dirigentepase.fechadesde desc'))));
		$this->set(compact('dirigenteclub','dirigentepases'));
	}



	public function view_pdf($id = null) 
	{
		$this->Dirigenteclub->recursive = 2;
		if (!$this->Dirigenteclub->exists($id)) {
			throw new NotFoundException(__('Dirigente no válido'));
		}
		$options = array('conditions' => array('Dirigenteclub.' . $this->Dirigenteclub->primaryKey => $id));
		$this->pdfConfig = array(
			'download' => true,
			'filename' => 'dirigenteclub_' . $id .'.pdf'
		);
		$this->set('dirigenteclub', $this->Dirigenteclub->find('first', $options));
	}



	public function add() {
		$this->loadModel('Persona');
		$this->loadModel('Localidade');
		$this->loadModel('Provincia');
		if ($this->request->is('post') && !empty($this->request->data)){

			$this->Persona->create();
			$this->request->data['Persona']['p_dirigente'] = 1;
			
			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El Dirigente ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
		  		return $this->redirect(array('action' => 'view',$this->Dirigenteclub->getInsertID()));
			} else {
					$this->Session->setFlash ('El Dirigente no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
					}
		}
			
		   	
		   	$paises = $this->Persona->Paise->find('list',array('fields'=>'nombre'));
		   	$provincias = $this->Persona->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Persona->Localidade->find('list',array('fields'=>('nombre')));
			
			$ligachaquenias = $this->Persona->Dirigenteclub->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias'));	

	}


	public function add2($id = null) {
		$this->loadModel('Persona');
	
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('La persona no existe'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Persona']['p_dirigente'] = 1;


			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El Dirigente ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
				return $this->redirect(array('action' => 'view',$this->Dirigenteclub->getInsertID()));

			} else {
				$this->request->data['Persona']['p_dirigente'] = 0;
				$this->Session->setFlash ('El Dirigente no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);
		} 
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$persona =   $this->Persona->find('first', $options);
		
			$paises = $this->Persona->Paise->find('list',array('fields'=>('nombre')));
			$provincias = $this->Persona->Paise->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Persona->Paise->Provincia->Localidade->find('list',array('fields'=>('nombre')));
			
			
			$ligachaquenias = $this->Persona->Dirigenteclub->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias','persona'));	
	}




	public function edit($id = null) {
		$this->loadModel('Persona');
	
		if (!$this->Dirigenteclub->exists($id)) {
			throw new NotFoundException(__('Dirigente no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Persona']['id'] = $this->request->data['Dirigenteclub']['persona_id'];
			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Dirigenteclub.' . $this->Dirigenteclub->primaryKey => $id));
			$this->request->data = $this->Dirigenteclub->find('first', $options);
		}
			$options = array('conditions' => array('Dirigenteclub.' . $this->Dirigenteclub->primaryKey => $id));
			
			$dirigenteclub =   $this->Dirigenteclub->find('first', $options);
		
			
			$paises = $this->Persona->Paise->find('list',array('fields'=>('nombre')));
			$provincias = $this->Persona->Paise->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Persona->Paise->Provincia->Localidade->find('list',array('fields'=>('nombre')));
			
			$ligachaquenias = $this->Persona->Dirigenteclub->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias','dirigenteclub'));	
	}




	public function delete($id = null) {
		$this->loadModel('Persona');
		$this->Dirigenteclub->id = $id;
		$options = array('conditions' => array('Dirigenteclub.' . $this->Dirigenteclub->primaryKey => $id));
		$dirigenteclub =   $this->Dirigenteclub->find('first', $options);
		$this->Persona->id = $dirigenteclub['Dirigenteclub']['persona_id'];

		if (!$this->Dirigenteclub->exists()) {

			throw new NotFoundException(__('Dirigente no válido'));
		}

		$this->request->allowMethod('post', 'delete');
		if ($this->Dirigenteclub->delete($id,true)) {
			$this->Persona->saveField('p_dirigente', 0);
			$this->Session->setFlash('El Dirigente ha sido eliminado', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('El Dirigente no pudo ser eliminado, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
