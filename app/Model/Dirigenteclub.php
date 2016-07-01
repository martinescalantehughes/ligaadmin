<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng');  
/**
 * Dirigenteclub Model
 *
 * @property Persona $Persona
 * @property Ligachaquenia $Ligachaquenia
 * @property Dirigentepase $Dirigentepase
 */
class Dirigenteclub extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $actsAs = array('Search.Searchable');
	//public $displayField = 'apodo';
	 public $filterArgs = array(
        'Dni' => array(
            'type' => 'like',
            'field' => array('Persona.dni')
        ),
        'Nombre' => array(
            'type' => 'like',
            'field' => 'Persona.nombre'
        ),        
        'Apellido' => array(
            'type' => 'like',
            'field' => 'Persona.apellido'
        ), 
    );

	public $belongsTo = array(
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ligachaquenia' => array(
			'className' => 'Ligachaquenia',
			'foreignKey' => 'ligachaquenia_id',
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
		'Dirigentepase' => array(
			'className' => 'Dirigentepase',
			'foreignKey' => 'dirigenteclub_id',
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
