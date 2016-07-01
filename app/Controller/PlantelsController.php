<?php
App::uses('AppController', 'Controller');
/**
 * Plantels Controller
 *
 * @property Plantel $Plantel
 * @property PaginatorComponent $Paginator
 */
class PlantelsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	
	public function lista_de_planteles ($id = null) {
		$this->Plantel->recursive = 2;
		$this->Paginator->settings = array(
        'conditions' => array('Plantel.club_id' => $id),
        'limit' => 10,
        'order' => array('Plantel.created' => 'desc')
    	);
    	$plantels = $this->Paginator->paginate('Plantel');
    	$options = array('conditions' => array('Club.id' => $id));
		$club= $this->Plantel->Club->find('first', $options);

    	$this->set(compact('plantels','club'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Plantel->recursive = 2;
		if (!$this->Plantel->exists($id)) {
			throw new NotFoundException(__('Club no válido'));
		}
		$options = array('conditions' => array('Plantel.' . $this->Plantel->primaryKey => $id));
		$this->set('plantel', $this->Plantel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */


	public function asociarjugador($id = null) {
		$this->loadModel('Jugadore');
		$this->loadModel('Persona');
		
		$this->Plantel->recursive = 2;

		if (!$this->Plantel->exists($id)) {
			throw new NotFoundException(__('Plantel no válido'));
		}
		$options = array('conditions' => array('Plantel.' . $this->Plantel->primaryKey => $id));
		$this->set('plantel', $this->Plantel->find('first', $options));
		$this->Plantel->id = $id;

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plantel->save($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El jugador ha sido asociado correctamente al plantel', 'default', array('class'=>'alert alert-success') );
				return $this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash( 'El jugador no pudo ser asociado al plantel. Por favor intentelo nuevamente.', 'default', array('class'=>'alert alert-warning') );
			}
		} else {
			$options = array('conditions' => array('Plantel.' . $this->Plantel->primaryKey => $id));
			$this->request->data = $this->Plantel->find('first', $options);
		}

		$conditions = array("Pase.jugadore_id = Jugadore.id", "Pase.fechadesde <= CURDATE()","Pase.fechahasta >= CURDATE()");

		$opt['joins'] = array(

			array('table' => 'jugadores',
			'alias' => 'Jugadore',
			'type' => 'inner',
			'foreignKey' => false,
			'conditions' => array('Jugadore.persona_id = Persona.id')
			),
		
			array('table' => 'pases',
			'alias' => 'Pase',
			'type' => 'inner',
			'foreignKey' => false,
			'conditions' => $conditions
			
			),

			array('table' => 'clubs',
			'alias' => 'Club',
			'type' => 'inner',
			'foreignKey' => false,
			'conditions' => array('Club.id = Pase.club_id')
			),

			array('table' => 'plantels',
			'alias' => 'Plantel',
			'type' => 'inner',
			'foreignKey' => false,
			'conditions' => array(
				'Plantel.club_id = Club.id',
				'Plantel.id = '.$id )
			),			
		);

		$opt['fields'] = array('Jugadore.id','nombrecompleto'); 

		$jugadores = $this->Persona->find('list',$opt);
		
		$this->set(compact('jugadores'));
	}


	public function asociartecnico($id = null) {
		$this->loadModel('Personaltecnico');
		$this->loadModel('Persona');
		
		$this->Plantel->recursive = 2;

		if (!$this->Plantel->exists($id)) {
			throw new NotFoundException(__('Plantel no válido'));
		}
		$options = array('conditions' => array('Plantel.' . $this->Plantel->primaryKey => $id));
		$this->set('plantel', $this->Plantel->find('first', $options));
		$this->Plantel->id = $id;

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plantel->save($this->request->data)) {
				$this->Session->setFlash( 'Éxito! El Personal Técnico ha sido asociado correctamente al plantel', 'default', array('class'=>'alert alert-success') );
				return $this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash( 'El Personal Técnico no pudo ser asociado al plantel. Por favor inténtelo nuevamente.', 'default', array('class'=>'alert alert-warning') );
			}
		} else {
			$options = array('conditions' => array('Plantel.' . $this->Plantel->primaryKey => $id));
			$this->request->data = $this->Plantel->find('first', $options);
		}
		$conditions = array("Tecnicopase.personaltecnico_id = Personaltecnico.id", "Tecnicopase.fechadesde <= CURDATE()","Tecnicopase.fechahasta >= CURDATE()");
		
		$opt['joins'] = array(

			array('table' => 'personaltecnicos',
			'alias' => 'Personaltecnico',
			'type' => 'inner',
			'foreignKey' => false,
			'conditions' => array('Personaltecnico.persona_id = Persona.id')
			),
		
			array('table' => 'tecnicopases',
			'alias' => 'Tecnicopase',
			'type' => 'inner',
			'foreignKey' => false,
			'conditions' => $conditions
			//para agregar condicion de jugadores actuales creo que deberia ser asi
			//Pase.fechadesde <= CURDATE(), Pase.fechahasta >= CURDATE()
			),

			array('table' => 'clubs',
			'alias' => 'Club',
			'type' => 'inner',
			'foreignKey' => false,
			'conditions' => array('Club.id = Tecnicopase.club_id')
			),

			array('table' => 'plantels',
			'alias' => 'Plantel',
			'type' => 'inner',
			'foreignKey' => false,
			'conditions' => array(
				'Plantel.club_id = Club.id',
				'Plantel.id = '.$id )
			),			
		);

		$opt['fields'] = array('Personaltecnico.id','nombrecompleto'); 

		$personaltecnicos = $this->Persona->find('list',$opt);
		
		$this->set(compact('personaltecnicos'));
	}



	public function edit($id = null) {
		if (!$this->Plantel->exists($id)) {
			throw new NotFoundException(__('Plantel no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plantel->save($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Plantel.' . $this->Plantel->primaryKey => $id));
			$this->request->data = $this->Plantel->find('first', $options);
		}
		$club = $this->Plantel->Club->find('list');
		$this->set(compact('clubs', 'jugadores', 'personaltecnicos', 'torneos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Plantel->id = $id;
		if (!$this->Plantel->exists()) {
			throw new NotFoundException(__('Plantel no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Plantel->delete($id,true)) {
			$this->Session->setFlash('El Plantel ha sido eliminado', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('El Plantel no pudo ser eliminado, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
