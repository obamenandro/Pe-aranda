<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 */
class Project extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = [
		'title' => [
			'notBlank' => [
				'rule'    => ['notBlank'],
				'message' => 'Project title is required.'
			],
		),
		'description' => [
			'notBlank' => [
				'rule' => ['notBlank'],
				'message' => 'Project description is required.',
			],
		),
		'image' => [
			'notBlank' => [
				'rule' => ['notBlank'],
				'message' => 'Project image is required.',
			],
			'file_size' => [
				'rule'    => ['fileSize', '<=', '1MB'],
				'message' => 'Image must be less than 1MB'
            ],
            'extension' => [
				'rule'    => ['extension', ['gif', 'jpeg', 'png', 'jpg']],
				'message' => 'Please supply a valid image.'
            ],
		),
	);
}
