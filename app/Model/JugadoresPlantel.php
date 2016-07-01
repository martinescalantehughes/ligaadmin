<?php
App::uses('AppModel', 'Model');
/**
 * JugadoresPlantel Model
 *
 * @property Jugadore $Jugadore
 * @property Plantel $Plantel
 */
class JugadoresPlantel extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Jugadore' => array(
			'className' => 'Jugadore',
			'foreignKey' => 'jugadore_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Plantel' => array(
			'className' => 'Plantel',
			'foreignKey' => 'plantel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
