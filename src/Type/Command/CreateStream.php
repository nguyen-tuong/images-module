<?php namespace Anomaly\ImagesModule\Type\Command;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Config\Repository;
/**
 * Class CreateStream
 */
class CreateStream
{
  use DispatchesJobs;

  protected $type;

  public function __construct(TypeInterface $type)
  {
    $this->type = $type;
  }

  public function handle(StreamRepositoryInterface $streams, Repository $config)
  {
    $streams->create(
      [
        $config->get('app.fallback_locale') => [
          'name'        => $this->type->getTitle(),
          'description' => $this->type->getDescription(),
        ],
        'slug'          => $this->type->getSlug(),
        'namespace'     => 'images',
        'translatable'  => true,
        'trashable'     => true,
        'locked'        => false,
      ]
  );

  }

}
