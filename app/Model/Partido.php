<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng'); 
/**
 * Partido Model
 *
 * @property Fecha $Fecha
 * @property Locale $Locale
 * @property Visitante $Visitante
 * @property Predio $Predio
 */
class Partido extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fecha';
	public $actsAs = array('Containable');

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Fecha' => array(
			'className' => 'Fecha',
			'foreignKey' => 'fecha_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Locale' => array(
			'className' => 'Locale',
			'foreignKey' => 'locale_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Visitante' => array(
			'className' => 'Visitante',
			'foreignKey' => 'visitante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Predio' => array(
			'className' => 'Predio',
			'foreignKey' => 'predio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
