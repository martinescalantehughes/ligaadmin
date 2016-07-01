<?php
App::uses('AppController', 'Controller');
/**
 * Personaltecnicos Controller
 *
 * @property Personaltecnico $Personaltecnico
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PersonaltecnicosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Search.Prg','RequestHandler');

	public function index() {
		$this->Personaltecnico->recursive = 2;
        $this->Prg->commonProcess();
        $this->Paginator->settings = array(
	        'conditions' => array($this->Personaltecnico->parseCriteria($this->Prg->parsedParams())),
	        'limit' => 15,
	        'order' => array('Personaltecnico.apellido' => 'asc')
	    	);
        $this->set('personaltecnicos', $this->Paginator->paginate());
	}



	public function view($id = null) {
		$this->Personaltecnico->recursive = 2;
		if (!$this->Personaltecnico->exists($id)) {
			throw new NotFoundException(__('Personal técnico no válido'));
		}
		$options = array('conditions' => array('Personaltecnico.' . $this->Personaltecnico->primaryKey => $id));
		$personaltecnico = $this->Personaltecnico->find('first', $options);
		$tecnicopases = $this->Personaltecnico->Tecnicopase->find('all', array('conditions'=>'personaltecnico_id ='.$personaltecnico['Personaltecnico']['id'], 'order' => (array('Tecnicopase.fechadesde desc'))));
		$this->set(compact('personaltecnico','tecnicopases'));
	}



	public function view_pdf($id = null) 
	{
		$this->Personaltecnico->recursive = 2;
		if (!$this->Personaltecnico->exists($id)) {
			throw new NotFoundException(__('Personal técnico no válido'));
		}
		$options = array('conditions' => array('Personaltecnico.' . $this->Personaltecnico->primaryKey => $id));
		$this->pdfConfig = array(
			'download' => true,
			'filename' => 'personaltecnico_' . $id .'.pdf'
		);
		$this->set('personaltecnico', $this->Personaltecnico->find('first', $options));
	}



	public function add() {
		$this->loadModel('Persona');
		$this->loadModel('Localidade');
		$this->loadModel('Provincia');
		if ($this->request->is('post') && !empty($this->request->data)){

			$this->Persona->create();
			$this->request->data['Persona']['p_personaltecnico'] = 1;
			
			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El Personal técnico ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
		  		return $this->redirect(array('action' => 'view',$this->Personaltecnico->getInsertID()));
			} else {
					$this->Session->setFlash ('El Persnal técnico no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
					}
		}
			
		   	
		   	$paises = $this->Persona->Paise->find('list',array('fields'=>'nombre'));
			$provincias = $this->Persona->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Persona->Localidade->find('list',array('fields'=>('nombre')));
			$ligachaquenias = $this->Persona->Personaltecnico->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias'));	

	}

	public function add2($id = null) {
		$this->loadModel('Persona');
	
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('La persona no existe'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Persona']['p_personaltecnico'] = 1;


			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El Personal Técnico ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
				return $this->redirect(array('action' => 'view',$this->Personaltecnico->getInsertID()));

			} else {
				$this->request->data['Persona']['p_personaltecnico'] = 0;
				$this->Session->setFlash ('El Personal Técnico no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
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
			
			
			
			$ligachaquenias = $this->Persona->Personaltecnico->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias','persona'));	
	}



	public function edit($id = null) {
		$this->loadModel('Persona');
	
		if (!$this->Personaltecnico->exists($id)) {
			throw new NotFoundException(__('Personal técnico no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Persona']['id'] = $this->request->data['Personaltecnico']['persona_id'];
			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Personaltecnico.' . $this->Personaltecnico->primaryKey => $id));
			$this->request->data = $this->Personaltecnico->find('first', $options);
		}
			$options = array('conditions' => array('Personaltecnico.' . $this->Personaltecnico->primaryKey => $id));
			$personaltecnico =   $this->Personaltecnico->find('first', $options);
		
			
			$paises = $this->Persona->Paise->find('list',array('fields'=>('nombre')));
			$provincias = $this->Persona->Paise->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Persona->Paise->Provincia->Localidade->find('list',array('fields'=>('nombre')));
			
			$ligachaquenias = $this->Persona->Personaltecnico->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias','personaltecnico'));	
	}




	public function delete($id = null) {
		$this->loadModel('Persona');
		$this->Personaltecnico->id = $id;
		$options = array('conditions' => array('Personaltecnico.' . $this->Personaltecnico->primaryKey => $id));
		$personaltecnico =   $this->Personaltecnico->find('first', $options);
		$this->Persona->id = $Personaltecnico['Personaltecnico']['persona_id'];

		if (!$this->Personaltecnico->exists()) {

			throw new NotFoundException(__('Personal técnico no válido'));
		}

		$this->request->allowMethod('post', 'delete');
		if ($this->Personaltecnico->delete($id,true)) {
			$this->Persona->saveField('p_personaltecnico', 0);
			$this->Session->setFlash('El Personal Técnico ha sido eliminado', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('El Personal técnico no pudo ser eliminado, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		return $this->redirect(array('action' => 'index'));
	}
}
