<?php
App::uses('JugadoresPlantel', 'Model');

/**
 * JugadoresPlantel Test Case
 *
 */
class JugadoresPlantelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jugadores_plantel',
		'app.jugadore',
		'app.paise',
		'app.persona',
		'app.provincia',
		'app.departamento',
		'app.localidade',
		'app.predio',
		'app.partido',
		'app.fecha',
		'app.torneo',
		'app.plantel',
		'app.locale',
		'app.visitante',
		'app.personaltecnico',
		'app.ligachaquenia',
		'app.dirigenteclub',
		'app.dirigentepase',
		'app.club',
		'app.pase',
		'app.tecnicopase',
		'app.personalliga',
		'app.planteltecnico',
		'app.personaltecnicos_plantel',
		'app.plantels_torneo',
		'app.planteljugadore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JugadoresPlantel = ClassRegistry::init('JugadoresPlantel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JugadoresPlantel);

		parent::tearDown();
	}

}
