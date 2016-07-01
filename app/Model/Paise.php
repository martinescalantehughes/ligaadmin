<?php
App::uses('AppModel', 'Model');
/**
 * Paise Model
 *
 * @property Jugadore $Jugadore
 * @property Persona $Persona
 * @property Predio $Predio
 * @property Provincia $Provincia
 */
class Paise extends AppModel {

public $virtualFields= array('nombre_completo'=>'CONCAT(Paise.nombre," ",Paise.iso)');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $displayField = 'nombre';
	
	public $hasMany = array(
		'Jugadore' => array(
			'className' => 'Jugadore',
			'foreignKey' => 'paise_id',
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
		'Club' => array(
			'className' => 'Club',
			'foreignKey' => 'paise_id',
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
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'paise_id',
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
		'Predio' => array(
			'className' => 'Predio',
			'foreignKey' => 'paise_id',
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
		'Provincia' => array(
			'className' => 'Provincia',
			'foreignKey' => 'paise_id',
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
