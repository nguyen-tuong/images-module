<?php namespace Anomaly\ImagesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class ImagesModule extends Module
{
    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'images' => [
            'buttons' => [
                'new_image' => [
                  'icon' => 'picture',
                  'data-toggle' => 'modal',
                  'data-target' => '#modal',
                  'href' => 'admin/images/ajax/choose_type',
                ]
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_categories' => [
                  'icon' => 'newspaper',
                ],
            ],
        ],
        'types'     => [
            'buttons' => [
                'new_type' => [
                  'icon' => 'newspaper',
                ],
                'assign_fields' => [
                  'data-toggle' => 'modal',
                  'data-target' => '#modal',
                  'enabled'     => 'admin/images/types/assignments/*',
                  'href'        => 'admin/images/types/choose/{request.route.parameters.id}',
                ]
            ]
        ],
        'fields' => [
          'buttons' => [
            'new_field' => [
              'data-toggle' => 'modal',
              'data-target' => '#modal',
              'href'        => 'admin/images/fields/choose',
            ]
          ]
        ],
    ];
}
