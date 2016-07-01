<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng');  
/**
 * Club Model
 *
 * @property Dirigentepase $Dirigentepase
 * @property Pase $Pase
 * @property Plantel $Plantel
 * @property Tecnicopase $Tecnicopase
 */
class Club extends AppModel {

public $displayField = 'nombrelargo';

public $virtualFields= array('nombrepiola'=>'Club.nombrelargo');


	//public $displayField = 'apodo';
	

	public $actsAs = array(
			'Upload.Upload' => array(
				'foto' => array(
					'fields' => array(
						'dir' => 'foto_dir'
					),
					'thumbnailMethod' => 'php',
					'thumbnailSizes' => array(
						'vga' => '640x480',
						'thumb' => '70x70'
					),
					'deleteOnUpdate' => true,
					'deleteFolderOnDelete' => true
				),
				'deleteOnUpdate' =>true,
         		'deleteFolderOnDelete' =>true
			),
			'Search.Searchable'
	);

	 
	public $filterArgs = array(
        'Nombre' => array(
            'type' => 'like',
            'field' => array('nombrelargo')
        ),
        'Localidad' => array(
            'type' => 'like',
            'field' => 'Localidade.nombre'
        ),        
        'Direccion' => array(
            'type' => 'like',
            'field' => 'direccion'
        ), 
    );









	public $validate = array(
		'nombrecorto' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede ser vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nombrelargo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede ser vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'paise_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede ser vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'provincia_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede ser vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	
		'localidade_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede ser vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'foto' => array(
        	'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Algo anda mal, intente nuevamente',
				'on' => 'create'
			),
	    	'isUnderPhpSizeLimit' => array(
	    		'rule' => 'isUnderPhpSizeLimit',
	        	'message' => 'Archivo excede el límite de tamaño de archivo de subida'
	        ),
		    'isValidMimeType' => array(
	    		'rule' => array('isValidMimeType', array('image/jpeg', 'image/png'), false),
        		'message' => 'La imagen no es jpg ni png',
	    	),
		    'isBelowMaxSize' => array(
	    		'rule' => array('isBelowMaxSize', 1048576),
        		'message' => 'El tamaño de imagen es demasiado grande'
	    	),
		    'isValidExtension' => array(
	    		'rule' => array('isValidExtension', array('jpg', 'png'), false),
        		'message' => 'La imagen no tiene la extension jpg o png'
	    	),
		    'checkUniqueName' => array(
                'rule' => array('checkUniqueName'),
                'message' => 'La imagen ya se encuentra registrada con ese nombre, pongale un nombre distinto',
                'on' => 'update'
        	),		
		),


	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Dirigentepase' => array(
			'className' => 'Dirigentepase',
			'foreignKey' => 'club_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Pase' => array(
			'className' => 'Pase',
			'foreignKey' => 'club_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Plantel' => array(
			'className' => 'Plantel',
			'foreignKey' => 'club_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Tecnicopase' => array(
			'className' => 'Tecnicopase',
			'foreignKey' => 'club_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public $belongsTo = array(
		'Provincia' => array(
			'className' => 'Provincia',
			'foreignKey' => 'provincia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
		'Localidade' => array(
			'className' => 'Localidade',
			'foreignKey' => 'localidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Paise' => array(
			'className' => 'Paise',
			'foreignKey' => 'paise_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)		

	);

	function checkUniqueName($data)
	{
	    $isUnique = $this->find('first', array('fields' => array('Club.foto'), 'conditions' => 
	    	array('Club.foto' => $data['foto'])));
	    if(!empty($isUnique))
	    {
	        return false;
	    }
	    else
	    {
	        return true;
	    }
	}

}
