<?php
App::uses('AppModel', 'Model');
/**
 * PlantelsTorneo Model
 *
 * @property Plantel $Plantel
 * @property Torneo $Torneo
 */
class PlantelsTorneo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Plantel' => array(
			'className' => 'Plantel',
			'foreignKey' => 'plantel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Torneo' => array(
			'className' => 'Torneo',
			'foreignKey' => 'torneo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
