<?php namespace Anomaly\ImagesModule\Type\Command;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
/**
 * Class DeleteTypeStream
 */
class DeleteTypeStream
{
  protected $type;

  public function __construct(TypeInterface $type)
  {
      $this->type = $type;
  }

  public function handle(StreamRepositoryInterface $streams)
  {
      if (!$this->type->isForceDeleting()) {
              return;
          }

      $streams->delete($streams->findBySlugAndNamespace($this->type->getSlug() . '_images', 'images'));
  }


}
