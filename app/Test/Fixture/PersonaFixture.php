<?php
/**
 * PersonaFixture
 *
 */
class PersonaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'dni' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 8, 'unsigned' => false),
		'cuil' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 11, 'unsigned' => false),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellido' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'provincia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'departamento_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'localidade_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'paise_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechanac' => array('type' => 'date', 'null' => true, 'default' => null),
		'sexo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pasaporte' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigopostal' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 6, 'unsigned' => false),
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
			'dni' => '',
			'cuil' => '',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'apellido' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'provincia_id' => 1,
			'departamento_id' => 1,
			'localidade_id' => 1,
			'paise_id' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor ',
			'fechanac' => '2015-12-03',
			'sexo' => 'Lorem ip',
			'pasaporte' => 'Lorem ipsum dolor ',
			'codigopostal' => ''
		),
	);

}
