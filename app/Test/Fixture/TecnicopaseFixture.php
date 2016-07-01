<?php
/**
 * TecnicopaseFixture
 *
 */
class TecnicopaseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fechadesde' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechahasta' => array('type' => 'date', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'personaltecnico_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'club_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
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
			'fechadesde' => '2016-03-26',
			'fechahasta' => '2016-03-26',
			'created' => '2016-03-26 21:27:59',
			'modified' => '2016-03-26 21:27:59',
			'personaltecnico_id' => 1,
			'club_id' => 1
		),
	);

}
