<?php
/**
 * PartidoFixture
 *
 */
class PartidoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'resultado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'arbitros' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comentarios' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'locale_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'visitante_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'predio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'fecha' => '2016-04-02 11:21:03',
			'resultado' => 'Lorem ipsum dolor sit amet',
			'arbitros' => 'Lorem ipsum dolor sit amet',
			'comentarios' => 'Lorem ipsum dolor sit amet',
			'estado' => 'Lorem ipsum dolor sit amet',
			'fecha_id' => 1,
			'locale_id' => 1,
			'visitante_id' => 1,
			'predio_id' => 1
		),
	);

}
