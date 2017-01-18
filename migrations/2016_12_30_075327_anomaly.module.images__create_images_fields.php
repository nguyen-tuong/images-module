<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Anomaly\ImagesModule\Category\CategoryModel;
use Anomaly\ImagesModule\Type\TypeModel;
use Anomaly\PagesModule\Page\PageModel;

class AnomalyModuleImagesCreateImagesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
      'title' => 'anomaly.field_type.text',
      'slug' => [
          'type' => 'anomaly.field_type.slug',
          'config' => [
            'type' => '_',
            'slugify' => 'title',
          ],
      ],
      'description' => 'anomaly.field_type.textarea',
      'desktopimage' => 'anomaly.field_type.file',
      'mobileimage' => 'anomaly.field_type.file',
      'categories' => [
          'type' => 'anomaly.field_type.relationship',
          'config' => [
              'title_name' => 'title',
              'related' => CategoryModel::class
          ],
      ],
      'pagelinks' => [
          'type' => 'anomaly.field_type.relationship',
            'config' => [
                'mode'           => 'lookup',
                'related' => PageModel::class,
            ],
      ],
      'visibled' => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => true,
            ],
        ],
      'alias' => [
        'type' => 'anomaly.field_type.slug',
        'config' => [
          'type' => '-',
          'slugify' => 'title',
        ],
      ],
      'type' => [
          'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => TypeModel::class,
            ],
      ],
      'entry'  => 'anomaly.field_type.polymorphic',
    ];

}
