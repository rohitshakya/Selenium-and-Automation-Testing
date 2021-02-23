<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $validatbillinginfo = [
            'fname'=>[
                'label'=>'First name',
                'rules'=>'required|trim|min_length[3]',
                'errors'=>[
                    'required'=>'First name is required.',
                    'min_length'=>'First name should be minimum 3 digit.'
                ]
            ],
            'lname'=>[
                'label'=>'Last name',
                'rules'=>'required|trim|min_length[3]',
                'errors'=>[
                    'required'=>'Last name is required.',
                    'min_length'=>'Last name should be minimum 3 digit.'
                ]
            ],
            'contact'=>[
                'label'=>'Contact Number',
                'rules'=>'required|trim|integer|exact_length[10]',
                'errors'=>[
                    'required'=>'Contact number is required.',
                    'integer'=>'Contact number should be number only.',
                    'exact_length'=>'Contact number should be 10 digit only.'
                ]
            ],
            'email'=>[
                'label'=>'Email id',
                'rules'=>'required|trim|valid_email',
                'errors'=>[
                    'required'=>'Email id is required.',
                    'valid_email'=>'Please enter valid email address.'
                ]
            ],
            'state'=>[
                'label'=>'State',
                'rules'=>'required|trim',
                'errors'=>[
                    'required'=>'State is required.'
                ]
            ],
            'city'=>[
                'label'=>'City',
                'rules'=>'required|trim',
                'errors'=>[
                    'required'=>'City is required.'
                ]
            ],
            'pincode'=>[
                'label'=>'Pincode',
                'rules'=>'required|trim|integer|exact_length[6]',
                'errors'=>[
                    'required'=>'Pincode is required.',
                    'integer'=>'Pincode should be number only.',
                    'exact_length'=>'Pincode should be 6 digit only.'
                ]
            ],
            'address'=>[
                'label'=>'Address',
                'rules'=>'required|trim|trim',
                'errors'=>[
                    'required'=>'Address is required.'
                ]
            ]
        ];
}
