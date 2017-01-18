<?php namespace Anomaly\ImagesModule\Image\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
interface ImageRepositoryInterface extends EntryRepositoryInterface
{

  public function findManyByType(TypeInterface $type, $limit = null);

}
