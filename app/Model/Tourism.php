<?php
App::uses('AppModel', 'Model');
/**
 * Tourism Model
 *
 */
class Tourism extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = [
        'title' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Tourism title is required.'
            ],
        ],
        'description' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Tourism description is required.',
            ],
        ],
        'image' => [
            'notBlank' => [
                'rule' => ['notBlank'],
                'message' => 'Tourism image is required.',
            ],
            'file_size' => [
                'rule'    => ['fileSize', '<=', '1MB'],
                'message' => 'Image must be less than 1MB'
            ],
            'extension' => [
                'rule'    => ['extension', ['gif', 'jpeg', 'png', 'jpg']],
                'message' => 'Please supply a valid image.'
            ],
        ]
    ];
}
