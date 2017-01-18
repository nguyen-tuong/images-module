<?php namespace Anomaly\ImagesModule\Image;

use Anomaly\ImagesModule\Type\Command\GetType;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Entry\EntryCriteria;

class ImageCriteria extends EntryCriteria
{

  public function type($identifier)
    {
        /* @var TypeInterface $type */
        $type = $this->dispatch(new GetType($identifier));

        $stream = $type->getEntryStream();
        $table  = $stream->getEntryTableName();

        $this->query
            ->select('images_images.*')
            ->where('type_id', $type->getId())
            ->join($table . ' AS entry', 'entry.id', '=', 'images_images.entry_id');

        return $this;
    }

}
