<?php
/**
 * JugadoreFixture
 *
 */
class JugadoreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'apodo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'paise_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'provincia_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'departamento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'localidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'nombrepadre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombremadre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'posicionjuego' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nivel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'region' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estatura' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '3,2', 'unsigned' => false),
		'peso' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '3,2', 'unsigned' => false),
		'fechaafiliacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'fecharenovacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'ligachaquenia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_Jugador_Persona1_idx' => array('column' => 'persona_id', 'unique' => 0),
			'fk_Jugador_LigaChaqueña1_idx' => array('column' => 'ligachaquenia_id', 'unique' => 0)
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
			'apodo' => 'Lorem ipsum dolor sit amet',
			'paise_id' => 1,
			'provincia_id' => 1,
			'departamento_id' => 1,
			'localidade_id' => 1,
			'nombrepadre' => 'Lorem ipsum dolor sit amet',
			'nombremadre' => 'Lorem ipsum dolor sit amet',
			'posicionjuego' => 'Lorem ipsum dolor sit amet',
			'estado' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ipsum dolor sit amet',
			'nivel' => 'Lorem ipsum dolor sit amet',
			'region' => 'Lorem ipsum dolor sit amet',
			'estatura' => '',
			'peso' => '',
			'fechaafiliacion' => '2015-12-03',
			'fecharenovacion' => '2015-12-03',
			'persona_id' => 1,
			'ligachaquenia_id' => 1
		),
	);

}
