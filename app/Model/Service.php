<?php
App::uses('AppModel', 'Model');
/**
 * Service Model
 *
 */
class Service extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = [
        'name' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Name of service is required.'
            ],
        ],
        'fee' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Service fees is required.',
            ],
            'numeric' => [
                'rule' => ['numeric'],
                'message' => 'Service fee can only contain numbers.' //'Only numeric.'
            ],
        ],
        'form' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Service form is required.'
            ],
        ],
        'process_time' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Service process time is required.'
            ],
        ],
        'office_responsible' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Service office responsible is required.'
            ],
        ]
    ];
}
