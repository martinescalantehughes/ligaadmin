<?php
App::uses('AppController', 'Controller');
/**
 * Personas Controller
 *
 * @property Persona $Persona
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PersonasController extends AppController {
	
	
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Search.Prg');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->loadModel('Jugadore');
		$this->Persona->recursive = 2;
		
		$this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Persona->parseCriteria($this->Prg->parsedParams());
        $this->set('personas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->loadModel('Jugadore');
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
		$this->set('persona', $this->Persona->find('first', $options));
		
		
		$this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Persona->parseCriteria($this->Prg->parsedParams());
        $this->set('personas', $this->Paginator->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
			$this->loadModel('Jugadore');

		if( !empty( $this->data ) ) {

		 // Save Content
		 $this->Persona->create();
		 $persona = $this->Persona->save( $this->data );
		 // Save Meta
		 if( !empty( $persona ) ) {
		  $this->request->data['Jugadore']['persona_id'] = $this->Persona->getLastInsertID();;
		  $this->Persona->Jugadore->save( $this->request->data );
		  $this->Session->setFlash( 'Content has been saved.' );
		  return $this->redirect(array('action' => 'index'));
		 }
		}
	
		

		$paises = $this->Persona->Paise->find('list',array('fields'=>('nombre')));
		$provincias = $this->Persona->Provincia->find('list');
	    $departamentos = $this->Persona->Departamento->find('list');
	    $localidades = $this->Persona->Localidade->find('list');	

		$ligachaquenias = $this->Persona->Jugadore->Ligachaquenia->find('list');
		$this->set(compact('paises','provincias','departamentos','localidades','ligachaquenias'));	
    }
    
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->loadModel('Jugadore');
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('The persona has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The persona could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);
		}
		$provincias = $this->Persona->Provincia->find('list');
		$departamentos = $this->Persona->Departamento->find('list');
		$localidades = $this->Persona->Localidade->find('list');
		$paises = $this->Persona->Paise->find('list');
		
		$this->set(compact('provincias', 'departamentos', 'localidades', 'paises','ligachaquenias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->loadModel('Jugadore');
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Persona->delete($id,true)) {
			$this->Session->setFlash(__('The persona has been deleted.'));
		} else {
			$this->Session->setFlash(__('The persona could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function borrarTodo(){
		$this->Persona->deleteAll(true);

		if ($this->Persona->deleteAll(true)) {
			$this->Session->setFlash ('Todos los registros han sido borrados', 'default', array('class'=>'alert alert-success'));
		} else {
			
			$this->Session->setFlash ('No se pudieron borrar los registros. Por favor, intente nuevamente.', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function listaprovincias($id){
		Configure::write('debug','0');
		if ($this->request->is('ajax')) {
		$provincias= $this->Persona->Paise->Provincia->find('list',array('conditions'=>array('Provincia.paise_id'=>$id),'fields'=>'nombre'));
		$this->set('lista_provincias',$provincias);	
		$this->layout = 'ajax';}
	 
	}
	
	public function listalocalidades($id){
		Configure::write('debug','0');
		if ($this->request->is('ajax')) {
		$localidades= $this->Persona->Provincia->Localidade->find('list',array('conditions'=>array('Localidade.provincia_id'=>$id),'fields'=>'nombre'));
		$this->set('lista_localidades',$localidades);	
		$this->layout = 'ajax';}
	}
}
