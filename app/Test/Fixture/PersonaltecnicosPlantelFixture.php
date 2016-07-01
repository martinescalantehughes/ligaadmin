<?php
/**
 * PersonaltecnicosPlantelFixture
 *
 */
class PersonaltecnicosPlantelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'personaltecnico_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'plantel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'personaltecnico_id' => 1,
			'plantel_id' => 1
		),
	);

}
