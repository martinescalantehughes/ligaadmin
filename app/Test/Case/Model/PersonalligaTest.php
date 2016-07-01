<?php
App::uses('Personalliga', 'Model');

/**
 * Personalliga Test Case
 *
 */
class PersonalligaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.personalliga',
		'app.persona',
		'app.jugadore',
		'app.ligachaquenia',
		'app.dirigenteclub',
		'app.personaltecnico',
		'app.personas',
		'app.ligachaquenias',
		'app.pase',
		'app.club',
		'app.plantel',
		'app.torneo',
		'app.planteljugadore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Personalliga = ClassRegistry::init('Personalliga');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Personalliga);

		parent::tearDown();
	}

}
