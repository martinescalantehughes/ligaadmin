<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng');  
/**
 * Fecha Model
 *
 * @property Torneo $Torneo
 * @property Partido $Partido
 */
class Fecha extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'numerofecha';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Torneo' => array(
			'className' => 'Torneo',
			'foreignKey' => 'torneo_id',
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
			'foreignKey' => 'fecha_id',
			'dependent' => true,
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
