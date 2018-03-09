<?php
App::uses('AppModel', 'Model');
/**
 * Alcaldez Model
 *
 */
class Alcaldez extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Alcaldez name is required.',
			),
		),
		'year_services' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Alcaldez year_services is required.',
			),
		),
		'position' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Alcaldez position is required.',
			),
		),
	);
}
