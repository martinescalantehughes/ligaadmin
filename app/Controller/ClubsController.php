<?php
App::uses('AppController', 'Controller');
/**
 * Clubs Controller
 *
 * @property Club $Club
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ClubsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','Search.Prg','RequestHandler');
	public $helpers = array('Js');
	var $paginate = array(
		'limit' => 10,
		'order'=>array('Club.nombrelargo' => 'asc'));

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
	
    	


    		$this->Club->recursive = 2;
            $this->Prg->commonProcess();
            $this->Paginator->settings = array(
	        'conditions' => array($this->Club->parseCriteria($this->Prg->parsedParams())),
	        'limit' => 10,
	        'order' => array('Club.nombrelargo' => 'asc')
	    	);
            $this->set('clubs', $this->Paginator->paginate());

	}


	
public function view_pdf($id = null) 
	{
		if (!$this->Club->exists($id)) {
			throw new NotFoundException(__('Invalid club'));
		}
		$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
		$this->pdfConfig = array(
			'download' => true,
			'filename' => 'club_' . $id .'.pdf'
		);
		$this->set('club', $this->Club->find('first', $options));
	}

/**
 * index method
 *
 * @return void
 */


	
	public function registrar_plantel($id = null) {
		$this->loadModel('Plantel');
		if (!$this->Club->exists($id)) {
			throw new NotFoundException(__('Club no válido'));
		}

		$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
		$this->set('club', $this->Club->find('first', $options));
		$this->Club->id = $id;
		$club= $this->Club->find('first', $options);

		if ($this->request->is(array('post', 'put'))) {		
			$this->request->data['Plantel']['club_id'] = $id;
			if (!empty($this->Club->Plantel->save( $this->request->data ))) {
				
				$this->Plantel->Visitante->create();
				$this->Plantel->Locale->create();
				
				$this->Plantel->Visitante->set(array('plantel_id'=>$this->Plantel->getLastInsertID()));
				$this->Plantel->Locale->set(array('plantel_id'=>$this->Plantel->getLastInsertID()));
				
				$this->Plantel->Visitante->save();
				$this->Plantel->Locale->save();
				
				$this->Session->setFlash( 'Éxito! El plantel ha sido registrado y asociado correctamente al Club', 'default', array('class'=>'alert alert-success') );

		  		return $this->redirect(array('controller'=>'plantels','action' => 'lista_de_planteles', $id));
			}
			else {
				$this->Session->setFlash ('No pudo ser registrado el Plantel. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
			$this->request->data = $this->Club->find('first', $options);
		}
		$this->set(compact('club'));
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Club->exists($id)) {
			throw new NotFoundException(__('Club no válido'));
		}
		

		$options = array('Club.' . $this->Club->primaryKey => $id);

		$club = $this->Club->find('all', array(
		   'contain'=>array(
		      	'Dirigentepase'=> array(
		      		'conditions' => array("Dirigentepase.fechadesde <= CURDATE()","Dirigentepase.fechahasta >= CURDATE()"),
		      		'Dirigenteclub' => array(
		      			'Persona' =>array('fields'=>array('id','nombre','apellido','dni'))
		      			)
		      	),
		      	'Pase'=> array(
		      		'conditions' => array("Pase.fechadesde <= CURDATE()","PASE.fechahasta >= CURDATE()"),
		      		'order' => array('Pase.fechadesde DESC'),
		      		'limit' => 10,
		      		'Jugadore' => array(
		      			'Persona' =>array('fields'=>array('id','nombre','apellido','dni'))
		      		)

		      	),
		      	'Plantel'=>array(
		      		'order'=>array('Plantel.created DESC')
		      	),
		      	'Paise',
		      	'Provincia',
		      	'Localidade'


			),
		   	'conditions' => $options
		));
		//debería pasarle su último club
		$this->set('club',$club);
	}


	
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Club->create();
			
			if ($this->Club->save($this->request->data)) {
				$this->Session->setFlash('Éxito! El Club ha sido registrado correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Club no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		}
		$paises = $this->Club->Paise->find('list',array('fields'=>('nombre')));
		$provincias = $this->Club->Provincia->find('list',array('fields'=>('nombre')));
		$localidades = $this->Club->Localidade->find('list',array('fields'=>('nombre')));
		$this->set(compact('paises','provincias','localidades'));
	}

	

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		/*
		if (!$this->Club->exists($id)) {
			throw new NotFoundException(__('Club no válido'));
		}
		*/
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Club->save($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Club.' . $this->Club->primaryKey => $id));
			$this->request->data = $this->Club->find('first', $options);
			
		}
			$paises = $this->Club->Paise->find('list',array('fields'=>('nombre')));
			$provincias = $this->Club->Paise->Provincia->find('list',array('fields'=>('nombre')));
			$localidades = $this->Club->Paise->Provincia->Localidade->find('list',array('fields'=>('nombre')));
			$this->set(compact('paises','provincias','localidades'));	
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Club->id = $id;
		if (!$this->Club->exists()) {
			throw new NotFoundException(__('Club no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Club->delete($id,true)) {
			$this->Session->setFlash('El Club ha sido eliminado', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('El Club no pudo ser eliminado, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function listaprovincias($id){
		Configure::write('debug','0');
		if ($this->request->is('ajax')) {
		$provincias= $this->Club->Paise->Provincia->find('list',array('conditions'=>array('Provincia.paise_id'=>$id),'fields'=>'nombre'));
		$this->set('lista_provincias',$provincias);	
		$this->layout = 'ajax';}
	 
	}
	
	public function listalocalidades($id){
		Configure::write('debug','0');
		if ($this->request->is('ajax')) {
		$localidades= $this->Club->Provincia->Localidade->find('list',array('conditions'=>array('Localidade.provincia_id'=>$id),'fields'=>'nombre'));
		$this->set('lista_localidades',$localidades);	
		$this->layout = 'ajax';}
	}
}
