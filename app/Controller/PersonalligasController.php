<?php
App::uses('AppController', 'Controller');
/**
 * Personalligas Controller
 *
 * @property Personalliga $Personalliga
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PersonalligasController extends AppController {



	public $components = array('Paginator', 'Session', 'Search.Prg','RequestHandler');

	public function index() {
		$this->Personalliga->recursive = 2;
        $this->Prg->commonProcess();
        $this->Paginator->settings = array(
	        'conditions' => array($this->Personalliga->parseCriteria($this->Prg->parsedParams())),
	        'limit' => 15
	    	);
        $this->set('personalligas', $this->Paginator->paginate());
	}



	public function view($id = null) {
		$this->Personalliga->recursive = 2;
		if (!$this->Personalliga->exists($id)) {
			throw new NotFoundException(__('Personal no válido'));
		}
		$options = array('conditions' => array('Personalliga.' . $this->Personalliga->primaryKey => $id));
		$personalliga = $this->Personalliga->find('first', $options);
		$this->set(compact('personalliga'));
	}



	public function view_pdf($id = null) 
	{
		$this->Personalliga->recursive = 2;
		if (!$this->Personalliga->exists($id)) {
			throw new NotFoundException(__('Personal no válido'));
		}
		$options = array('conditions' => array('Personalliga.' . $this->Personalliga->primaryKey => $id));
		$this->pdfConfig = array(
			'download' => true,
			'filename' => 'personalliga_' . $id .'.pdf'
		);
		$this->set('Personalliga', $this->Personalliga->find('first', $options));
	}



	public function add() {
		$this->loadModel('Persona');
		$this->loadModel('Localidade');
		$this->loadModel('Provincia');
		if ($this->request->is('post') && !empty($this->request->data)){

			$this->Persona->create();
			$this->request->data['Persona']['p_personalliga'] = 1;
			
			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El Personal ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
		  		return $this->redirect(array('action' => 'view',$this->Personalliga->getInsertID()));
			} else {
					$this->Session->setFlash ('El Persnal no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
					}
		}
			
		   	
		   	$paises = $this->Persona->Paise->find('list',array('fields'=>'nombre'));
			$provincias = $this->Persona->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Persona->Localidade->find('list',array('fields'=>('nombre')));
			$ligachaquenias = $this->Persona->Personalliga->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias'));	

	}

	public function add2($id = null) {
		$this->loadModel('Persona');
	
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('La persona no existe'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Persona']['p_personalliga'] = 1;


			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El Personal de Liga ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
				return $this->redirect(array('action' => 'view',$this->Personalliga->getInsertID()));

			} else {
				$this->request->data['Persona']['p_personalliga'] = 0;
				$this->Session->setFlash ('El Personal de Liga no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
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
			
			
			
			$ligachaquenias = $this->Persona->Personalliga->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias','persona'));	
	}



	public function edit($id = null) {
		$this->loadModel('Persona');
	
		if (!$this->Personalliga->exists($id)) {
			throw new NotFoundException(__('Personal no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Persona']['id'] = $this->request->data['Personalliga']['persona_id'];
			if ($this->Persona->saveAssociated($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Personalliga.' . $this->Personalliga->primaryKey => $id));
			$this->request->data = $this->Personalliga->find('first', $options);
		}
			$options = array('conditions' => array('Personalliga.' . $this->Personalliga->primaryKey => $id));
			$personalliga =   $this->Personalliga->find('first', $options);
		
			
			$paises = $this->Persona->Paise->find('list',array('fields'=>('nombre')));
			$provincias = $this->Persona->Paise->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Persona->Paise->Provincia->Localidade->find('list',array('fields'=>('nombre')));
			
			$ligachaquenias = $this->Persona->Personalliga->Ligachaquenia->find('list');
			
			$this->set(compact('paises','provincias','localidades','ligachaquenias','personalliga'));	
	}




	public function delete($id = null) {
		$this->loadModel('Persona');
		$this->Personalliga->id = $id;
		$options = array('conditions' => array('Personalliga.' . $this->Personalliga->primaryKey => $id));
		$personalliga =   $this->Personalliga->find('first', $options);
		$this->Persona->id = $personalliga['Personalliga']['persona_id'];

		if (!$this->Personalliga->exists()) {

			throw new NotFoundException(__('Personal no válido'));
		}

		$this->request->allowMethod('post', 'delete');
		if ($this->Personalliga->delete($id,true)) {
			$this->Persona->saveField('p_personalliga', 0);
			$this->Session->setFlash('El Personal ha sido eliminado', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('El Personal no pudo ser eliminado, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
