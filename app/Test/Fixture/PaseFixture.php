<?php
/**
 * PaseFixture
 *
 */
class PaseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fechadesde' => array('type' => 'date', 'null' => true, 'default' => null),
		'fechahasta' => array('type' => 'date', 'null' => true, 'default' => null),
		'valormonetario' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 12, 'unsigned' => false),
		'tipo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'jugadore_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'club_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_Pase_Jugador1_idx' => array('column' => 'jugadore_id', 'unique' => 0),
			'fk_Pase_Club1_idx' => array('column' => 'club_id', 'unique' => 0)
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
			'fechadesde' => '2015-11-19',
			'fechahasta' => '2015-11-19',
			'valormonetario' => '',
			'tipo' => 'Lorem ipsum dolor sit amet',
			'jugadore_id' => 1,
			'club_id' => 1
		),
	);

}
