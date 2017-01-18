<?php

return [
    'admin/images/types'                                => 'Anomaly\ImagesModule\Http\Controller\Admin\TypesController@index',
    'admin/images/types/create'                         => 'Anomaly\ImagesModule\Http\Controller\Admin\TypesController@create',
    'admin/images/types/edit/{id}'                      => 'Anomaly\ImagesModule\Http\Controller\Admin\TypesController@edit',

    'admin/images/types/assignments/{id}'               => 'Anomaly\ImagesModule\Http\Controller\Admin\TypesController@fields',
    'admin/images/types/assignments/{id}/assign/{field}' => 'Anomaly\ImagesModule\Http\Controller\Admin\TypesController@assign',
    'admin/images/types/assignments/{id}/assignment/{assignment}' => 'Anomaly\ImagesModule\Http\Controller\Admin\TypesController@assignment',
    'admin/images/types/choose/{id}'                    => 'Anomaly\ImagesModule\Http\Controller\Admin\TypesController@choose',
];
