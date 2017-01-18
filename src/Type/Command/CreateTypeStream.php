<?php namespace Anomaly\ImagesModule\Type\Command;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Illuminate\Config\Repository;
/**
 * Class CreateTypeStream
 */
class CreateTypeStream
{
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
          'name'          => $this->type->getTitle(),
          'description'   => $this->type->getDescription(),
        ],
        'slug'        => $this->type->getSlug() . '_images',
        'namespace'   => 'images',
        'locked'      => false,
        'translatable'=> true,
        'trashable'   => true,
        'hidden'      => true,
      ]
  );
  }

}
