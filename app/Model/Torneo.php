<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng');  
/**
 * Torneo Model
 *
 * @property Fecha $Fecha
 * @property Plantel $Plantel
 */
class Torneo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	public $actsAs = array('Search.Searchable');

	 
	 public $filterArgs = array(
        'Nombre' => array(
            'type' => 'like',
            'field' => array('nombre')
        ),
    );



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Fecha' => array(
			'className' => 'Fecha',
			'foreignKey' => 'torneo_id',
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
		'Plantel' => array(
			'className' => 'Plantel',
			'joinTable' => 'plantels_torneos',
			'foreignKey' => 'torneo_id',
			'associationForeignKey' => 'plantel_id',
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
