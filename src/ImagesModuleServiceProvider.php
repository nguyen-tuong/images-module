<?php namespace Anomaly\ImagesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class ImagesModuleServiceProvider extends AddonServiceProvider
{

    protected $plugins = [];

    protected $commands = [];

    protected $routes = [
      'admin/images/fields'             => 'Anomaly\ImagesModule\Http\Controller\Admin\FieldsController@index',
      'admin/images/fields/choose'      => 'Anomaly\ImagesModule\Http\Controller\Admin\FieldsController@choose',
      'admin/images/fields/create'      => 'Anomaly\ImagesModule\Http\Controller\Admin\FieldsController@create',
      'admin/images/fields/edit/{id}'    => 'Anomaly\ImagesModule\Http\Controller\Admin\FieldsController@edit',
    ];

    protected $middleware = [];

    protected $listeners = [];

    protected $aliases = [];

    protected $bindings = [
        'Anomaly\Streams\Platform\Model\Images\ImagesImagesEntryModel'  => 'Anomaly\ImagesModule\Image\ImageModel',
        'Anomaly\Streams\Platform\Model\Images\ImagesCategoriesEntryModel' => 'Anomaly\ImagesModule\Category\CategoryModel',
        'Anomaly\Streams\Platform\Model\Images\ImagesTypesEntryModel' => 'Anomaly\ImagesModule\Type\TypeModel',
    ];

    protected $providers = [];

    protected $singletons = [
        'Anomaly\ImagesModule\Image\Contract\ImageRepositoryInterface' => 'Anomaly\ImagesModule\Image\ImageRepository',
        'Anomaly\ImagesModule\Category\Contract\CategoryRepositoryInterface' => 'Anomaly\ImagesModule\Category\CategoryRepository',
        'Anomaly\ImagesModule\Type\Contract\TypeRepositoryInterface' => 'Anomaly\ImagesModule\Type\TypeRepository',
    ];

    protected $overrides = [];

    protected $mobile = [];

    public function register()
    {
    }

    public function map()
    {
    }

}
