<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleImagesCreateCategoriesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'categories',
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
        'unique' => true,
        'translatable' => true,
      ],
      'alias' => [
        'required' => true,
        'unique' => true,
      ],
      'description' => [
        'translatable' => true,
      ],
    ];

}
