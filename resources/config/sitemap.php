<?php
use Anomaly\ImagesModule\Image\Contract\ImageInterface;
use Anomaly\ImagesModule\Image\Contract\ImageRepositoryInterface;
use Illuminate\Contracts\Config\Repository;
use Roumen\Sitemap\Sitemap;

return [
  'entries' => function (ImageRepositoryInterface $images) {

      /* @var \Anomaly\PostsModule\Post\PostCollection $posts */
      $images = $images->all();

      return $images->live();
  },
];
