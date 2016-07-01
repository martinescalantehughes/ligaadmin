<?php
/**
 * DirigenteclubFixture
 *
 */
class DirigenteclubFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fechaasuncion' => array('type' => 'date', 'null' => true, 'default' => null),
		'fechafin' => array('type' => 'date', 'null' => true, 'default' => null),
		'cago' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'ligachaquenia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'fechaafliliacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'fecharenovacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_Dirigente_Persona1_idx' => array('column' => 'persona_id', 'unique' => 0),
			'fk_Dirigente_LigaChaqueña1_idx' => array('column' => 'ligachaquenia_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fechaasuncion' => '2016-03-26',
			'fechafin' => '2016-03-26',
			'cago' => 'Lorem ipsum dolor sit amet',
			'persona_id' => 1,
			'ligachaquenia_id' => 1,
			'fechaafliliacion' => '2016-03-26',
			'fecharenovacion' => '2016-03-26'
		),
	);

}
