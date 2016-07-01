<?php
App::uses('AppController', 'Controller');
/**
 * Jugadores Controller
 *
 * @property Jugadore $Jugadore
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JugadoresController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Search.Prg','RequestHandler');
	var $paginate = array(
		'limit' => 10,
		'order'=>array('Club.nombrelargo' => 'asc'));



/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->Jugadore->recursive = 2;
        $this->Prg->commonProcess();
        $this->Paginator->settings = array(
	        'conditions' => array($this->Jugadore->parseCriteria($this->Prg->parsedParams())),
	        'limit' => 10,
	        'order' => array('Persona.apellido' => 'asc')
	    	);
        $this->set('jugadores', $this->Paginator->paginate());
		
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */


	public function isAuthorized($user)
	{
		if($user['role'] == 'user')
		{
			if(in_array($this->action, array('index', 'view', 'listaprovincias','listadepartamentos','listalocalidades')))
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

	public function view($id = null) {
		$this->Jugadore->recursive = 2;
		if (!$this->Jugadore->exists($id)) {
			throw new NotFoundException(__('Invalid jugadore'));
		}
		$options = array('conditions' => array('Jugadore.' . $this->Jugadore->primaryKey => $id));
		$jugadore = $this->Jugadore->find('first', $options);
		$pases = $this->Jugadore->Pase->find('all', array('conditions'=>'jugadore_id ='.$jugadore['Jugadore']['id'] ,'order' => (array('Pase.fechadesde desc'))));
		$this->set(compact('jugadore','pases'));

	}


	public function view_pdf($id = null) 
	{
		$this->Jugadore->recursive = 2;
		if (!$this->Jugadore->exists($id)) {
			throw new NotFoundException(__('Jugador no válido'));
		}
		$options = array('conditions' => array('Jugadore.' . $this->Jugadore->primaryKey => $id));
		$this->pdfConfig = array(
			'download' => true,
			'filename' => 'jugadore_' . $id .'.pdf'
		);
		//debería pasarle su último club
		$this->set('jugadore', $this->Jugadore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {		
		$this->loadModel('Persona');
		$this->loadModel('Localidade');
		$this->loadModel('Provincia');

		if ($this->request->is('post') && !empty($this->request->data)){

			$this->Persona->create();
			$this->request->data['Persona']['p_jugador'] = 1;
					
			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El Jugador ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
		  		return $this->redirect(array('action' => 'view',$this->Jugadore->getInsertID()));

			} else {
					$this->Session->setFlash ('El Jugador no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		}
			
		   	$paises = $this->Jugadore->Paise->find('list',array('fields'=>'nombre'));
		   	$provincias = $this->Jugadore->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Jugadore->Localidade->find('list',array('fields'=>('nombre')));
		   	$paisesp = $this->Persona->Paise->find('list',array('fields'=>'nombre'));
		   	$provincias = $this->Persona->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Persona->Localidade->find('list',array('fields'=>('nombre')));
			
			$ligachaquenias = $this->Persona->Jugadore->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','paisesp','ligachaquenias'));	

	}

	//registro pero cargando datos de persona, pues ya existe con otro perfil
	public function add2($id = null) {
		$this->loadModel('Persona');
	
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('La persona no existe'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Persona']['p_jugador'] = 1;


			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El Jugador ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
				return $this->redirect(array('action' => 'view',$this->Jugadore->getInsertID()));

			} else {
				$this->request->data['Persona']['p_jugador'] = 0;
				$this->Session->setFlash ('El Jugador no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
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

			$paises = $this->Jugadore->Paise->find('list',array('fields'=>('nombre')));
			$provincias = $this->Jugadore->Paise->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Jugadore->Paise->Provincia->Localidade->find('list',array('fields'=>('nombre')));
			
			
			$ligachaquenias = $this->Persona->Jugadore->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias','persona'));	
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->loadModel('Persona');
	
		if (!$this->Jugadore->exists($id)) {
			throw new NotFoundException(__('Invalid jugadore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Persona']['id'] = $this->request->data['Jugadore']['persona_id'];
			
			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Jugadore.' . $this->Jugadore->primaryKey => $id));
			$this->request->data = $this->Jugadore->find('first', $options);
		}
			$options = array('conditions' => array('Jugadore.' . $this->Jugadore->primaryKey => $id));
			$jugadore =   $this->Jugadore->find('first', $options);
		
			$paises = $this->Jugadore->Paise->find('list',array('fields'=>('nombre')));
			$provincias = $this->Jugadore->Paise->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Jugadore->Paise->Provincia->Localidade->find('list',array('fields'=>('nombre')));

			$paises = $this->Persona->Paise->find('list',array('fields'=>('nombre')));
			$provincias = $this->Persona->Paise->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Persona->Paise->Provincia->Localidade->find('list',array('fields'=>('nombre')));
			
			$ligachaquenias = $this->Persona->Jugadore->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias','jugadore'));	
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
 			
		
		
		
	
			
	public function delete($id = null) {
		$this->loadModel('Persona');
		$this->Jugadore->id = $id;
		$options = array('conditions' => array('Jugadore.' . $this->Jugadore->primaryKey => $id));
		$jugadore =   $this->Jugadore->find('first', $options);
		$this->Persona->id = $jugadore['Jugadore']['persona_id'];

		if (!$this->Jugadore->exists()) {

			throw new NotFoundException(__('Jugador no válido'));
		}

		$this->request->allowMethod('post', 'delete');
		if ($this->Jugadore->delete($id,true)) {
			$this->Persona->saveField('p_jugador', 0);
			$this->Session->setFlash('El Jugador ha sido eliminado', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('El Jugador no pudo ser eliminado, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	


	
	public function listaprovincias($id){
		Configure::write('debug','0');
		if ($this->request->is('ajax')) {
		$provincias= $this->Jugadore->Paise->Provincia->find('list',array('conditions'=>array('Provincia.paise_id'=>$id),'fields'=>'nombre'));
		$this->set('lista_provincias',$provincias);	
		$this->layout = 'ajax';}
	 
	}
	
	public function listalocalidades($id){
		Configure::write('debug','0');
		if ($this->request->is('ajax')) {
		$localidades= $this->Jugadore->Provincia->Localidade->find('list',array('conditions'=>array('Localidade.provincia_id'=>$id),'fields'=>'nombre'));
		$this->set('lista_localidades',$localidades);	
		$this->layout = 'ajax';}
	}
	


	
}
