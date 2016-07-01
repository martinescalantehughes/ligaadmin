<?php
App::uses('AppModel', 'Model');
/**
 * Plantel Model
 *
 * @property Club $Club
 * @property Locale $Locale
 * @property Visitante $Visitante
 * @property Jugadore $Jugadore
 * @property Personaltecnico $Personaltecnico
 * @property Torneo $Torneo
 */
class Plantel extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';
		//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Club' => array(
			'className' => 'Club',
			'foreignKey' => 'club_id',
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
		'Locale' => array(
			'className' => 'Locale',
			'foreignKey' => 'plantel_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Visitante' => array(
			'className' => 'Visitante',
			'foreignKey' => 'plantel_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Jugadore' => array(
			'className' => 'Jugadore',
			'joinTable' => 'jugadores_plantels',
			'foreignKey' => 'plantel_id',
			'associationForeignKey' => 'jugadore_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Personaltecnico' => array(
			'className' => 'Personaltecnico',
			'joinTable' => 'personaltecnicos_plantels',
			'foreignKey' => 'plantel_id',
			'associationForeignKey' => 'personaltecnico_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Torneo' => array(
			'className' => 'Torneo',
			'joinTable' => 'plantels_torneos',
			'foreignKey' => 'plantel_id',
			'associationForeignKey' => 'torneo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	

	

}
