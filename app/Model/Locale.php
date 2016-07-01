<?php
App::uses('AppModel', 'Model');
/**
 * Locale Model
 *
 * @property Plantel $Plantel
 * @property Partido $Partido
 */
class Locale extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $actsAs = array('Containable');



	public $belongsTo = array(
		'Plantel' => array(
			'className' => 'Plantel',
			'foreignKey' => 'plantel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Partido' => array(
			'className' => 'Partido',
			'foreignKey' => 'locale_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
