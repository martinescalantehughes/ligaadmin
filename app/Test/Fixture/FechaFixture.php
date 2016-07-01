<?php
/**
 * FechaFixture
 *
 */
class FechaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fechadesde' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechahasta' => array('type' => 'date', 'null' => false, 'default' => null),
		'numerofecha' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'torneo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'fechadesde' => '2016-04-02',
			'fechahasta' => '2016-04-02',
			'numerofecha' => 1,
			'torneo_id' => 1
		),
	);

}
