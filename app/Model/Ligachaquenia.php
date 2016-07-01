<?php
App::uses('AppModel', 'Model');
/**
 * Ligachaquenia Model
 *
 * @property Dirigenteclub $Dirigenteclub
 * @property Jugadore $Jugadore
 * @property Personalliga $Personalliga
 * @property Personaltecnico $Personaltecnico
 */
class Ligachaquenia extends AppModel {

	public $displayField = 'nombre';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Dirigenteclub' => array(
			'className' => 'Dirigenteclub',
			'foreignKey' => 'ligachaquenia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Jugadore' => array(
			'className' => 'Jugadore',
			'foreignKey' => 'ligachaquenia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Personalliga' => array(
			'className' => 'Personalliga',
			'foreignKey' => 'ligachaquenia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Personaltecnico' => array(
			'className' => 'Personaltecnico',
			'foreignKey' => 'ligachaquenia_id',
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
