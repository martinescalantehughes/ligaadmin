<?php
App::uses('AppController', 'Controller');


class FechasController extends AppController {

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



	public function index() {
		$this->Fecha->recursive = 0;
		$this->set('fechas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {

		if (!$this->Fecha->exists($id)) {
			throw new NotFoundException(__('Fecha  no válida'));
		}
		$options = array('Fecha.' . $this->Fecha->primaryKey => $id);

		$fecha = $this->Fecha->find('all', array(
		   'contain'=>array(
		   		'Torneo',
		      	'Partido'=> array(
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
			    )
			),
		   	'conditions' => $options
		));



		$this->set('fecha', $fecha);
	}


	public function view_pdf($id = null) 
	{
		
		if (!$this->Fecha->exists($id)) {
			throw new NotFoundException(__('Fecha no válida'));
		}
		
		$this->pdfConfig = array(
			'download' => true,
			'filename' => 'fecha_' . $id .'.pdf'
		);


		$options = array('Fecha.' . $this->Fecha->primaryKey => $id);

		$fecha = $this->Fecha->find('all', array(
		   'contain'=>array(
		   		'Torneo',
		      	'Partido'=> array(
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
			    )
			),
		   	'conditions' => $options
		));
		//debería pasarle su último club
		$this->set('fecha');
	}

	
/**
 * add method
 *
 * @return void
 */
	
	public function asociarpartido($id=null)
	{		
		$this->loadModel('Partido');

		if (!$this->Fecha->exists($id)) {
			throw new NotFoundException(__('Fecha no válida'));
		}

		$options = array('conditions' => array('Fecha.' . $this->Fecha->primaryKey => $id));
		$this->set('torneo', $this->Fecha->find('first', $options));
		$fecha= $this->Fecha->find('first', $options);
		$this->Fecha->id = $id;
		$id_torneo = $fecha['Fecha']['torneo_id'];
		

		if ($this->request->is(array('post', 'put'))) {		
			$this->request->data['Partido']['fecha_id'] = $id;
			if (!empty($this->Fecha->Partido->save( $this->request->data ))) {
				$this->Session->setFlash( 'Éxito! El partido ha sido registrado y asociado correctamente a la Fecha', 'default', array('class'=>'alert alert-success') );
		  		return $this->redirect(array('action' => 'view', $id));
			}
			else {
				$this->Session->setFlash ('No pudo ser registrado el partido. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Fecha.' . $this->Fecha->primaryKey => $id));
			$this->request->data = $this->Fecha->find('first', $options);
		}

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
		$this->set(compact('predios', 'locales', 'visitantes','id_torneo','fecha'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fecha->exists($id)) {
			throw new NotFoundException(__('Invalid fecha'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fecha->save($this->request->data)) {
				$this->Session->setFlash('Éxito! Los cambios han sido guardados correctamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash('Los cambios no pudieron ser guardados. Por favor, inténtelo de nuevo.', 'default', array('class'=>'alert alert-warning'));
			}
		} else {
			$options = array('conditions' => array('Fecha.' . $this->Fecha->primaryKey => $id));
			$this->request->data = $this->Fecha->find('first', $options);
		}
		$torneos = $this->Fecha->Torneo->find('list');
		$this->set(compact('torneos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fecha->id = $id;
		if (!$this->Fecha->exists()) {
			throw new NotFoundException(__('Fecha no válida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Fecha->delete($id,true)) {
			$this->Session->setFlash('La fecha ha sido eliminada', 'default', array('class'=>'alert alert-danger'));
		} else {
			$this->Session->setFlash('La fecha no pudo ser eliminada, por favor inténtelo nuevamente', 'default', array('class'=>'alert alert-warning'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
