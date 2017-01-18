<?php namespace Anomaly\ImagesModule\Image\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class ImageTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
      'title',
      'categories',

    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
      'title',
      'entry.desktopimage.preview',
      'categories',
      'visibled' => [
        'value' => 'entry.visibled.toggle'
      ]
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
