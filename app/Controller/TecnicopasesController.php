<?php
App::uses('AppController', 'Controller');
/**
 * Tecnicopases Controller
 *
 * @property Tecnicopase $Tecnicopase
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TecnicopasesController extends AppController {

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
	public function index() {
		$this->Tecnicopase->recursive = 0;
		$this->set('tecnicopases', $this->Paginator->paginate());
	}

	public function lista_de_pases($id = null) {
		$this->Tecnicopase->recursive = 2;
		$this->Paginator->settings = array(
        'conditions' => array('Tecnicopase.club_id' => $id, '(Tecnicopase.fechadesde) <= (CURDATE())', '(Tecnicopase.fechahasta) >= (CURDATE())'),
        'limit' => 10,
        'order' => array('Tecnicopase.fechadesde' => 'desc')
    	);
    	$tecnicopases = $this->Paginator->paginate('Tecnicopase');
    	$options = array('conditions' => array('Club.id' => $id));
		$club= $this->Tecnicopase->Club->find('first', $options);
    	$this->set(compact('tecnicopases','club'));
	}

	public function historicopases($id = null) {
		$this->Tecnicopase->recursive = 2;
		$this->Paginator->settings = array(
        'conditions' => array('Tecnicopase.club_id' => $id),
        'limit' => 10,
        'order' => array('Tecnicopase.fechadesde' => 'desc')
    	);
    	$tecnicopases = $this->Paginator->paginate('Tecnicopase');
    	$options = array('conditions' => array('Club.id' => $id));
		$club= $this->Tecnicopase->Club->find('first', $options);
    	$this->set(compact('tecnicopases','club'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tecnicopase->exists($id)) {
			throw new NotFoundException(__('Invalid tecnicopase'));
		}
		$options = array('conditions' => array('Tecnicopase.' . $this->Tecnicopase->primaryKey => $id));
		$this->set('tecnicopase', $this->Tecnicopase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		$this->loadModel('Personaltecnico');
		if (!$this->Personaltecnico->exists($id)) {
			throw new NotFoundException(__('Personal técnico no válido'));
		}

		if ($this->request->is('post')) {
			$this->Tecnicopase->create();
			$this->request->data['Tecnicopase']['personaltecnico_id'] = $id;
			if ($this->Tecnicopase->save($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El pase ha sido registrado correctamente', 'default', array('class'=>'alert alert-success') );
				return $this->redirect(array('controller'=>'personaltecnicos','action' => 'view',$id));
			} else {
				$this->Session->setFlash ('El pase no pudo ser registrado. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		}
		
		$clubs = $this->Tecnicopase->Club->find('list');
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
		if (!$this->Tecnicopase->exists($id)) {
			throw new NotFoundException(__('Pase no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {

			$opciones = array('conditions' => array('Tecnicopase.' . $this->Tecnicopase->primaryKey => $id));
			$pass = $this->Tecnicopase->find('first', $options);
			$id1= $pass['Tecnicopase']['personaltecnico_id'];
			
			if ($this->Tecnicopase->save($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('controller' => 'personaltecnicos', 'action' => 'view', $id1));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Tecnicopase.' . $this->Tecnicopase->primaryKey => $id));
			$this->request->data = $this->Tecnicopase->find('first', $options);
		}
		$options = array('conditions' => array('Tecnicopase.' . $this->Tecnicopase->primaryKey => $id));
		$tecnicopase =  $this->Tecnicopase->find('first', $options);
		$clubs = $this->Tecnicopase->Club->find('list');
		$this->set(compact('tecnicopase', 'clubs'));
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tecnicopase->id = $id;
		if (!$this->Tecnicopase->exists()) {
			throw new NotFoundException(__('Pase no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tecnicopase->delete()) {
			$this->Session->setFlash('El Pase ha sido eliminado', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('El Pase no pudo ser eliminado, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
