<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng');  
/**
 * Personalliga Model
 *
 * @property Persona $Persona
 * @property Ligachaquenia $Ligachaquenia
 */
class Personalliga extends AppModel {

/**
 * Validation rules
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


	public $validate = array(
		'persona_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ligachaquenia_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
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
}
