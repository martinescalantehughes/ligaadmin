<?php
App::uses('Club', 'Model');

/**
 * Club Test Case
 *
 */
class ClubTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.club',
		'app.dirigentepase',
		'app.pase',
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
		'app.planteljugadore',
		'app.planteltecnico',
		'app.personaltecnico',
		'app.ligachaquenia',
		'app.dirigenteclub',
		'app.personalliga',
		'app.locale',
		'app.visitante',
		'app.tecnicopase'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Club = ClassRegistry::init('Club');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Club);

		parent::tearDown();
	}

}
