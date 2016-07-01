<?php
/**
 * PlanteltecnicoFixture
 *
 */
class PlanteltecnicoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'plantel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'personaltecnico_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_PlantelTecnico_Personal_Tecnico1_idx' => array('column' => 'personaltecnico_id', 'unique' => 0),
			'fk_PlantelTecnico_Plantel1' => array('column' => 'plantel_id', 'unique' => 0)
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
			'plantel_id' => 1,
			'personaltecnico_id' => 1
		),
	);

}
