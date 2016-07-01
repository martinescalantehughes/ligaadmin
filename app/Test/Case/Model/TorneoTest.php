<?php
App::uses('Torneo', 'Model');

/**
 * Torneo Test Case
 *
 */
class TorneoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.torneo',
		'app.fecha',
		'app.partido',
		'app.locale',
		'app.plantel',
		'app.club',
		'app.dirigentepase',
		'app.dirigenteclub',
		'app.persona',
		'app.provincia',
		'app.paise',
		'app.jugadore',
		'app.departamento',
		'app.localidade',
		'app.predio',
		'app.ligachaquenia',
		'app.personalliga',
		'app.personaltecnico',
		'app.planteltecnico',
		'app.tecnicopase',
		'app.pase',
		'app.planteljugadore',
		'app.visitante',
		'app.jugadores_plantel',
		'app.personaltecnicos_plantel',
		'app.plantels_torneo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Torneo = ClassRegistry::init('Torneo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Torneo);

		parent::tearDown();
	}

}
