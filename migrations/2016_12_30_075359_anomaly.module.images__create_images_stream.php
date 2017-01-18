<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyModuleImagesCreateImagesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'images',
        'title_column' => 'title',
        'translatable' => true,
        'sortable'     => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
      'desktopimage' => [
        'required' => true,
      ],
      'mobileimage' => [
        'required' => true,
      ],
      'title' => [
        'required' => true,
        'translatable' => true,
      ],
      'categories',
      'description' => [
        'translatable' => true,
      ],
      'pagelinks',
      'visibled',
      'type',
      'entry',
    ];

}
