<?php
App::uses('AppModel', 'Model');
/**
 * PersonaltecnicosPlantel Model
 *
 * @property Personaltecnico $Personaltecnico
 * @property Plantel $Plantel
 */
class PersonaltecnicosPlantel extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Personaltecnico' => array(
			'className' => 'Personaltecnico',
			'foreignKey' => 'personaltecnico_id',
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
