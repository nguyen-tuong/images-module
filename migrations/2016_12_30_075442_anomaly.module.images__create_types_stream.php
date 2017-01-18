<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleImagesCreateTypesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'types',
        'title_column' => 'title',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
      'title' => [
        'required' => true,
        'unique'  => true,
        'translatable' => true,
        'config'       => [
            'max' => 50,
        ],
      ],
      'slug' => [
        'required' => true,
        'unique' => true,
        'config'   => [
            'max' => 50,
        ],
      ],
      'description' => [
        'translatable' => true,
      ],
    ];

}
