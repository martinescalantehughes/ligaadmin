<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng'); 
/**
 * Personaltecnico Model
 *
 * @property Persona $Persona
 * @property Ligachaquenia $Ligachaquenia
 * @property Planteltecnico $Planteltecnico
 * @property Tecnicopase $Tecnicopase
 */
class Personaltecnico extends AppModel {

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


	public $hasAndBelongsToMany = array(
		'Plantel' => array(
			'className' => 'Plantel',
			'joinTable' => 'personaltecnicos_plantels',
			'foreignKey' => 'personaltecnico_id',
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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		
		'Tecnicopase' => array(
			'className' => 'Tecnicopase',
			'foreignKey' => 'personaltecnico_id',
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
