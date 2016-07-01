<?php
App::uses('PlantelsTorneo', 'Model');

/**
 * PlantelsTorneo Test Case
 *
 */
class PlantelsTorneoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.plantels_torneo',
		'app.plantel',
		'app.locale',
		'app.partido',
		'app.fecha',
		'app.torneo',
		'app.visitante',
		'app.jugadore',
		'app.paise',
		'app.persona',
		'app.provincia',
		'app.departamento',
		'app.localidade',
		'app.predio',
		'app.dirigenteclub',
		'app.ligachaquenia',
		'app.personalliga',
		'app.personaltecnico',
		'app.planteltecnico',
		'app.tecnicopase',
		'app.club',
		'app.dirigentepase',
		'app.pase',
		'app.planteljugadore',
		'app.jugadores_plantel',
		'app.personaltecnicos_plantel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PlantelsTorneo = ClassRegistry::init('PlantelsTorneo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PlantelsTorneo);

		parent::tearDown();
	}

}
