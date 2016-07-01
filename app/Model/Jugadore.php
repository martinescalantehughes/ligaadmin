<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng');  
/**
 * Jugadore Model
 *
 * @property Paise $Paise
 * @property Provincia $Provincia
 * @property Departamento $Departamento
 * @property Localidade $Localidade
 * @property Persona $Persona
 * @property Ligachaquenia $Ligachaquenia
 * @property Pase $Pase
 * @property Planteljugadore $Planteljugadore
 */
class Jugadore extends AppModel {



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $actsAs = array('Containable', 'Search.Searchable');
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
		'Paise' => array(
			'className' => 'Paise',
			'foreignKey' => 'paise_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Provincia' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	
		'Localidade' => array(
			'className' => 'Localidade',
			'foreignKey' => 'localidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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
			'joinTable' => 'jugadores_plantels',
			'foreignKey' => 'jugadore_id',
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
		'Pase' => array(
			'className' => 'Pase',
			'foreignKey' => 'jugadore_id',
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
	);


	public $validate = array(

	'fechaafiliacion'=>array(
		'compararFechas'=>array(
				'rule'=>array('compararFechas'),
				'message'=>'Renovacion debe ser mayor'
				
		),
	),
		'apodo' => array(
            'minimosCaracteres' => array(
	            'rule' => array('minLength', '2'),
	            'message' => 'Mínimo 2 cáracteres',
	            'allowEmpty' => true,
	        ),
	        'maximosCaracteres'=> array(
	        	'rule' => array('maxLength', '250'),
	            'message' => 'Maximo 250 cáracteres',
	        ),
	        
        ),
        'nombrepadre' => array(
            'minimosCaracteres' => array(
	            'rule' => array('minLength', '2'),
	            'message' => 'Mínimo 2 cáracteres',
	            'allowEmpty' => true,
	        ),
	        'maximosCaracteres'=> array(
	        	'rule' => array('maxLength', '250'),
	            'message' => 'Maximo 250 cáracteres',
	        ),
	        
        ),
         'nombremadre' => array(
            'minimosCaracteres' => array(
	            'rule' => array('minLength', '2'),
	            'message' => 'Mínimo 2 cáracteres',
	            'allowEmpty' => true,
	        ),
	        'maximosCaracteres'=> array(
	        	'rule' => array('maxLength', '250'),
	            'message' => 'Maximo 250 cáracteres',
	        ),
	        
        )
	
	);


function compararFechas($data)
 {
 	
  $primera = $this->data['Jugadore']['fecharenovacion'];
  $primera = strtotime($primera);

  $segunda =strtotime($data['fechaafiliacion']);

  
  return ($primera > $segunda) ;
}

}
