<?php
App::uses('AppModel', 'Model');
/**
 * Government Model
 *
 */
class Government extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = [
		'name' => [
			'notBlank' => [
				'rule'    => ['notBlank'],
				'message' => 'Government name is required.'
			],
		],
		'position' => [
			'notBlank' => [
				'rule' => ['notBlank'],
				'message' => 'Government position is required.'
			],
		],
		'birthday' => [
			'notBlank' => [
				'rule' => ['notBlank'],
				'message' => 'Government birthday is required.',
			],
		],
		'message' => [
			'notBlank' => [
				'rule' => ['notBlank'],
				'message' => 'Government message is required.'
			],
		],
	];
}
