<?php namespace Anomaly\ImagesModule\Type\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

interface TypeRepositoryInterface extends EntryRepositoryInterface
{

  public function findBySlug($slug);

}
