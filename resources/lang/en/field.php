<?php
  return [
    'title' => [
      'name' => 'Title',
      'instructions' => [
          'images'  => 'Specify a short descriptive title for this image.',
          'types'   => 'Specify a short descriptive name for this image type.',
          'categories' => 'Specify a short descriptive title for this categories.',
      ],
      'warning' => 'Slug: title'
    ],
    'slug' => [
      'name' => 'Slug',
      'instructions' => [
          'images'  => 'The slug is used in building the post\'s URL.',
          'types'   => 'The slug is used in making the database table for images of this type.'
      ],
    ],
    'description' => [
      'name' => 'Description',
      'instructions' => [
        'types' => 'Briefly describe the image type.',
        'categories' => 'Briefly describe the categories.'
      ],
      'warning' => 'Slug: description'
    ],
    'alias' => [
      'name' => 'Alias',
      'instructions' => [
          'categories'  => 'The slug is used in building the categories\'s URL.',
      ],
      'warning' => 'Slug: alias'

    ],
    'categories' => [
      'name' => 'Categories',
      'instructions' => 'Choose which category this image belongs to.',
      'warning' => 'Slug: categories',
    ],
    'pagelinks' => [
      'name' => 'Links',
    ],
    'visibled' => [
      'name' => 'Visibled',
    ],
    'desktopimage' => [
      'name' => 'Desktop Image',
      'instructions' => 'This image only for <strong>desktop</strong>',
      'warning' => 'Slug: desktopimage',
    ],
    'mobileimage' => [
      'name' => 'Mobile Image',
      'instructions' => 'This image only for <strong>mobile</strong>',
      'warning' => 'Slug: mobileimage',
    ]
  ];
