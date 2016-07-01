<?php
App::uses('AppController', 'Controller');
/**
 * Predios Controller
 *
 * @property Predio $Predio
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PrediosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','RequestHandler');
	public $helpers = array('Js','GoogleMap');

	

/**
 * index method
 *
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

	
	public function index() {
	
	$this->Paginator->settings = array(
        'limit' => 4
    );
    $predios = $this->Paginator->paginate('Predio');
    $this->set(compact('predios'));
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Predio->recursive = 2;
		if (!$this->Predio->exists($id)) {
			throw new NotFoundException(__('Predio no válido'));
		}
		$options = array('conditions' => array('Predio.' . $this->Predio->primaryKey => $id));
		$this->set('predio', $this->Predio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Predio->create();
			if ($this->Predio->save($this->request->data)) {
				$this->Session->setFlash(__('El predio ha sido registrado.'), 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El predio no pudo ser registrado. Por favor, inténtelo de nuevo.'), 'default', array('class'=>'alert alert-warning'));
			}
		}
		$paises = $this->Predio->Paise->find('list',array('fields'=>('nombre')));
		$provincias = $this->Predio->Provincia->find('list',array('fields'=>('nombre')));
		$localidades = $this->Predio->Localidade->find('list',array('fields'=>('nombre')));
		
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
		if (!$this->Predio->exists($id)) {
			throw new NotFoundException(__('Predio no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Predio->save($this->request->data)) {
				$this->Session->setFlash(__('El predio ha sido guardado.'), 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('El predio no pudo ser guardado. Por favor, intente nuevamente.'), 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Predio.' . $this->Predio->primaryKey => $id));
			$this->request->data = $this->Predio->find('first', $options);
		}
	
		
		$paises = $this->Predio->Paise->find('list',array('fields'=>('nombre')));
		$provincias = $this->Predio->Paise->Provincia->find('list',array('fields'=>('nombre')));
		$localidades = $this->Predio->Paise->Provincia->Localidade->find('list',array('fields'=>('nombre')));
		
		
		
		$this->set(compact('paises', 'provincias', 'localidades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Predio->id = $id;
		if (!$this->Predio->exists()) {
			throw new NotFoundException(__('Predio no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Predio->delete()) {
			$this->Session->setFlash(__('El predio ha sido eliminado'), 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash(__('El predio no pudo ser eliminado. Por favor, inténtelo nuevamente.'), 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	public function listaprovincias($id){
		Configure::write('debug','0');
		if ($this->request->is('ajax')) {
		$provincias= $this->Predio->Paise->Provincia->find('list',array('conditions'=>array('Provincia.paise_id'=>$id),'fields'=>'nombre'));
		$this->set('lista_provincias',$provincias);	
		$this->layout = 'ajax';}
	 
	}
	
	public function listalocalidades($id){
		Configure::write('debug','0');
		if ($this->request->is('ajax')) {
		$localidades= $this->Predio->Paise->Provincia->Localidade->find('list',array('conditions'=>array('Localidade.provincia_id'=>$id),'fields'=>'nombre'));
		$this->set('lista_localidades',$localidades);	
		$this->layout = 'ajax';}
	}




	public function searchjson()
	{
		$term = null;
		if(!empty($this->request->query['term']))
		{
			$term = $this->request->query['term'];
			$terms = explode(' ', trim($term));
			$terms = array_diff($terms, array(''));
			foreach($terms as $term)
			{
				$conditions[] = array('Predio.nombre LIKE' => '%' . $term . '%');
			}
			
			$predios = $this->Predio->find('all', array('recursive' => -1, 'fields' => array('Predio.id', 'Predio.nombre'), 'conditions' => $conditions, 'limit' => 20));
		}
		echo json_encode($predios);
		$this->autoRender = false;
	}
	
	public function search()
	{
		$search = null;
		if(!empty($this->request->query['search']))
		{
			$search = $this->request->query['search'];
			$search = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));
			
			foreach($terms as $term)
			{
				$terms1[] = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
				$conditions[] = array('Predio.nombre LIKE' => '%' . $term . '%');
			}
			$predios = $this->Predio->find('all', array('recursive' => -1, 'conditions' => $conditions, 'limit' => 200));
			if(count($predios) == 1)
			{
				return $this->redirect(array('controller' => 'predios', 'action' => 'view', $predios[0]['Predio']['id']));
			}
			$terms1 = array_diff($terms1, array(''));
			$this->set(compact('predios', 'terms1'));
		}
		$this->set(compact('search'));
		
		if($this->request->is('ajax'))
		{
			$this->layout = false;
			$this->set('ajax', 1);
		}
		else
		{
			$this->set('ajax', 0);
		}
	}
}
