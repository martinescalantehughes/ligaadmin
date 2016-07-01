<?php
App::uses('AppController', 'Controller');
/**
 * Partidos Controller
 *
 * @property Partido $Partido
 * @property PaginatorComponent $Paginator
 */
class PartidosController extends AppController {

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
	public function isAuthorized($user)
	{
		if($user['role'] == 'user')
		{
			if(in_array($this->action, array('view')))
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
		if (!$this->Partido->exists($id)) {
			throw new NotFoundException(__('Invalid partido'));
		}
		$options = array('Partido.' . $this->Partido->primaryKey => $id);

		$partido = $this->Partido->find('all', array(
		   'contain'=>array(
		      	'Predio',
		      	'Fecha',
		      	'Locale'=>array(
		      		
		        	'Plantel'=>array(
		        		
		            	'Club'=>array('fields'=>array('id','nombrelargo', 'nombrecorto')),
		         
		       		)
		    	),
		    	'Visitante'=>array(

		        	'Plantel'=>array(

		            	'Club'=>array('fields'=>array('id','nombrelargo', 'nombrecorto')),
		         
		       		)
		    	)
			),
		   	'conditions' => $options
		));




		$this->set('partido',$partido);
	}


	public function edit($id = null) {
		$this->loadModel('Fecha');
		if (!$this->Partido->exists($id)) {
			throw new NotFoundException(__('Partido no válido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Partido->save($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Partido.' . $this->Partido->primaryKey => $id));
			$this->request->data = $this->Partido->find('first', $options);
		}

		$options1 = array('conditions' => array('Partido.' . $this->Partido->primaryKey => $id));
		$partido= $this->Partido->find('first', $options1);
		$id_fecha = $partido['Partido']['fecha_id'];
		$options2= array('conditions' => array('Fecha.' . $this->Fecha->primaryKey => $id_fecha));
		$fecha= $this->Fecha->find('first', $options2);
		$id_torneo = $fecha['Fecha']['torneo_id'];

		$list1= $this->Partido->Visitante->query('SELECT Visitante.id, Torneo.id, CONCAT (Club.nombrecorto," - ",Plantel.nombre) as nombreentero
		FROM visitantes as Visitante INNER JOIN plantels as Plantel ON (Visitante.plantel_id = Plantel.id) INNER JOIN clubs as Club ON (Plantel.club_id = Club.id) INNER JOIN plantels_torneos as PlantelsTorneo on (Plantel.id = PlantelsTorneo.plantel_id)
		INNER JOIN torneos as Torneo on (Torneo.id = PlantelsTorneo.torneo_id)
		');	
		
		$visitantes = array();
		
		foreach($list1 as $row1) {
			if (($row1['Torneo']['id']) == ($id_torneo)) {
		    $id1 = $row1['Visitante']['id'];
		    $nombreentero1 = $row1[0]['nombreentero'];
		    $visitantes[$id1] = $nombreentero1;
			}
			
		}		
		
		$list2= $this->Partido->Locale->query('SELECT Locale.id, Torneo.id, CONCAT (Club.nombrecorto," - ",Plantel.nombre) as nombreentero
		FROM locales as Locale INNER JOIN plantels as Plantel ON (Locale.plantel_id = Plantel.id) INNER JOIN clubs as Club ON (Plantel.club_id = Club.id) INNER JOIN plantels_torneos as PlantelsTorneo on (Plantel.id = PlantelsTorneo.plantel_id)
		INNER JOIN torneos as Torneo on (Torneo.id = PlantelsTorneo.torneo_id)
		');	
		
		$locales = array();
		
		foreach($list2 as $row2) {
			if (($row2['Torneo']['id']) == ($id_torneo)) {
		    $id2 = $row2['Locale']['id'];
		    $nombreentero2 = $row2[0]['nombreentero'];
		    $locales[$id2] = $nombreentero2;
			}
		}		

		$predios = $this->Partido->Predio->find('list',array('fields'=>('nombre')));
		$this->set(compact('locales', 'visitantes', 'predios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Partido->id = $id;
		if (!$this->Partido->exists()) {
			throw new NotFoundException(__('Partido no válido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Partido->delete()) {
			$this->Session->setFlash('El Partido ha sido eliminado', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('El Partido no pudo ser eliminado, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
