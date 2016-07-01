<?php
App::uses('AppModel', 'Model');
Configure::write('Config.language', 'eng');  
/**
 * Persona Model
 *
 * @property Dirigenteclub $Dirigenteclub
 * @property Jugadore $Jugadore
 * @property Personalliga $Personalliga
 * @property Personaltecnico $Personaltecnico
 * @property Provincia $Provincia
 * @property Departamento $Departamento
 * @property Localidade $Localidade
 * @property Paise $Paise
 */
class Persona extends AppModel {

public $virtualFields= array('nombrecompleto'=>'CONCAT(Persona.apellido," ",Persona.nombre, " - DNI: ", Persona.dni)',);

public $actsAs = array('Containable','Search.Searchable',
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
				)
			),
		);
	 public $filterArgs = array(
        'Dni' => array(
            'type' => 'like',
            'field' =>'dni',
        ),
        'Nombre' => array(
            'type' => 'like',
            'field' => 'nombre'
        ),
        'Apellido' => array(
            'type' => 'like',
            'field' => 'apellido'
        )
     
    );



/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'dni';
	
	
    
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Dirigenteclub' => array(
			'className' => 'Dirigenteclub',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'dependent' => true,
			'fields' => '',
			'order' => ''
		),
		'Jugadore' => array(
			'className' => 'Jugadore',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'dependent' => true,
			'fields' => '',
			'order' => ''
		),
		'Personalliga' => array(
			'className' => 'Personalliga',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'dependent' => true,
			'fields' => '',
			'order' => ''
		),
		'Personaltecnico' => array(
			'className' => 'Personaltecnico',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'dependent' => true,
			'fields' => '',
			'order' => ''
		)
	);

	
/**
 * belongsTo associations
 *
 * @var array
 */
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


	public $validate = array(
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
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Éste campo no puede ser vacío',
			),
			'minimosCaracteres' => array(
	            'rule' => array('minLength', '2'),
	            'message' => 'Mínimo 2 cáracteres',
	        ),
	        'maximosCaracteres'=> array(
	        	'rule' => array('maxLength', '250'),
	            'message' => 'Maximo 250 cáracteres',
	        ),
        ),
        'apellido' => array(
            'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Éste campo no puede ser vacío',
			),
			 'between' => array(
                'rule' => array('lengthBetween', 2, 250),
                'message' => 'Se permiten entre 2 a 250 caracteres',
            ),
        ),
        'email' => array(
        	'email' => array(
        		'rule'=>array('email'),
        		'allowEmpty'=>true,
        		'message'=> 'Ingrese un correo electrónico correcto, por favor.'
          	),
        ),
        'pasaporte' => array(
        	'alfanumerico' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Solamente letras y numeros',
                'allowEmpty'=>true,
            ),
            'between' => array(
                'rule' => array('lengthBetween', 10, 15),
                'message' => 'Se permiten entre 10 a 15 caracteres',
            )
        ),
        'direccion'=> array(
        	'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Éste campo no puede ser vacío',
			),
        	
            'between' => array(
                'rule' => array('lengthBetween', 2, 250),
                'message' => 'Se permiten entre 2 a 250 caracteres',
            ),
        ),
        'paise_id' => array(
            'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Éste campo no puede ser vacío',
			),
		),
		'provincia_id' => array(
            'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Éste campo no puede ser vacío',
			),
		),
		'localidade_id' => array(
            'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Éste campo no puede ser vacío',
			),
		),

        'fechanac' => array(
            'rule' => 'date',
            'message' => 'Fecha no válida',
            'required' => true
        ),

        'dni' => array(
        	'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Éste campo no puede ser vacío',
			),
        	'numerico' => array(
        		'rule' => array('numeric'),
				'message' => 'Sólo números',
        	),
        	'between' => array(
        		'rule' => array('lengthBetween', 6, 9),
                'message' => 'Se permiten entre 9 a 6 caracteres',
        	),
        ),
        'telefono' => array(
        	
        	'numerico' => array(
        		'rule' => array('numeric'),
				'message' => 'Sólo números',
				'allowEmpty' => true,
        	),
        	'between' => array(
        		'rule' => array('lengthBetween', 6, 15),
                'message' => 'Se permiten entre 6 a 15 caracteres',
        	),
        ),
        'cuil' => array(
        	'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Éste campo no puede ser vacío',
			),
        	'numerico' => array(
        		'rule' => array('numeric'),
				'message' => 'Sólo números',
        	),
        	'between' => array(
        		'rule' => array('lengthBetween',9, 11),
                'message' => 'Se permiten entre 11 a 9 caracteres',
        	),
        	'unique' => array(
		        'rule' => 'isUnique',
		        'message' => 'Ya se ha guardado un CUIL idéntico, por favor revise los datos',
		    ),
        ),
	);

	function checkUniqueName($data)	{
	    $isUnique = $this->find('first', array('fields' => array('Persona.foto'), 'conditions' => 
	    	array('Persona.foto' => $data['foto'])));
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
