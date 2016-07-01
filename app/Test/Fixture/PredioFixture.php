<?php
/**
 * PredioFixture
 *
 */
class PredioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'paise_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'provincia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'departamento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'localidade_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'nombre' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'paise_id' => 1,
			'provincia_id' => 1,
			'departamento_id' => 1,
			'localidade_id' => 1
		),
	);

}
