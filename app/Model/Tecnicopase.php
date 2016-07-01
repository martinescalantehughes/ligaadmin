<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng');  
/**
 * Tecnicopase Model
 *
 * @property Personaltecnico $Personaltecnico
 * @property Club $Club
 */
class Tecnicopase extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Personaltecnico' => array(
			'className' => 'Personaltecnico',
			'foreignKey' => 'personaltecnico_id',
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
