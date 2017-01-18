<?php

return [
    'admin/images' => 'Anomaly\ImagesModule\Http\Controller\Admin\ImagesController@index',
    'admin/images/create' => 'Anomaly\ImagesModule\Http\Controller\Admin\ImagesController@create',
    'admin/images/edit/{id}' => 'Anomaly\ImagesModule\Http\Controller\Admin\ImagesController@edit',
    'admin/images/ajax/choose_type' => 'Anomaly\ImagesModule\Http\Controller\Admin\AjaxController@chooseType',
];
