<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng');  
/**
 * Dirigentepase Model
 *
 * @property Dirigenteclub $Dirigenteclub
 * @property Club $Club
 */
class Dirigentepase extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Dirigenteclub' => array(
			'className' => 'Dirigenteclub',
			'foreignKey' => 'dirigenteclub_id',
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
