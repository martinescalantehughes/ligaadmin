<?php
App::uses('Locale', 'Model');

/**
 * Locale Test Case
 *
 */
class LocaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.locale',
		'app.plantel',
		'app.visitante',
		'app.partido',
		'app.fecha',
		'app.torneo',
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
		$this->Locale = ClassRegistry::init('Locale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Locale);

		parent::tearDown();
	}

}
