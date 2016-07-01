<?php
App::uses('Partido', 'Model');

/**
 * Partido Test Case
 *
 */
class PartidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.partido',
		'app.fecha',
		'app.torneo',
		'app.plantel',
		'app.locale',
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
		$this->Partido = ClassRegistry::init('Partido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Partido);

		parent::tearDown();
	}

}
