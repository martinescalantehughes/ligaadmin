<?php
/**
 * PersonalligaFixture
 *
 */
class PersonalligaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cargo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'antiguedad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechaingreso' => array('type' => 'date', 'null' => true, 'default' => null),
		'fechaegreso' => array('type' => 'date', 'null' => true, 'default' => null),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'ligachaquenia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'fecharenovacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'fechaafliliacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_Personal_Liga_Persona1_idx' => array('column' => 'persona_id', 'unique' => 0),
			'fk_Personal_Liga_LigaChaqueña1_idx' => array('column' => 'ligachaquenia_id', 'unique' => 0)
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
			'cargo' => 'Lorem ipsum dolor sit amet',
			'antiguedad' => 'Lorem ipsum dolor sit amet',
			'fechaingreso' => '2015-11-19',
			'fechaegreso' => '2015-11-19',
			'persona_id' => 1,
			'ligachaquenia_id' => 1,
			'fecharenovacion' => '2015-11-19',
			'fechaafliliacion' => '2015-11-19'
		),
	);

}
