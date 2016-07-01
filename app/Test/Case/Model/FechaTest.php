<?php
App::uses('Fecha', 'Model');

/**
 * Fecha Test Case
 *
 */
class FechaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fecha',
		'app.torneo',
		'app.plantel',
		'app.locale',
		'app.partido',
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
		$this->Fecha = ClassRegistry::init('Fecha');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fecha);

		parent::tearDown();
	}

}
