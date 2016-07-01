<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng');  
/**
 * Pase Model
 *
 * @property Jugadore $Jugadore
 * @property Club $Club
 */
class Pase extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'jugadore_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'club_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fechahasta'=>array(
			'compararFechas'=>array(
				'rule'=>array('compararFechas'),
				'message'=>'La fecha de inicio debe ser menor a la fecha de fin'
				
			),
			
		),
		'valormonetario'=>array(
			"notEmpty"  => array(
	            "rule"          => "notEmpty",
	            "message"       => "no puede ser vacio",
	       	),	
		),

	);




	function compararFechas($data)
	{
	  $primera = $this->data['Pase']['fechadesde'];
	  $primera = strtotime($primera);

	  $segunda =strtotime($data['fechahasta']);
	  return ($primera < $segunda) ;
	}




	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Jugadore' => array(
			'className' => 'Jugadore',
			'foreignKey' => 'jugadore_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Club' => array(
			'className' => 'Club',
			'foreignKey' => 'club_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
