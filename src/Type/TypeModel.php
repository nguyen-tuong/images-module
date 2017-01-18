<?php namespace Anomaly\ImagesModule\Type;

use Anomaly\ImagesModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Model\Images\ImagesTypesEntryModel;
use Anomaly\ImagesModule\Type\Command\GetTypeStream;
class TypeModel extends ImagesTypesEntryModel implements TypeInterface
{

    protected $cacheMinutes = 99999;


    public function getTitle()
    {
      return $this->title;
    }

    public function getSlug()
    {
      return $this->slug;
    }

    public function getDescription()
    {
      return $this->description;
    }

    public function getEntryStream()
    {
      return $this->dispatch(new GetTypeStream($this));
    }

    public function getEntryModel()
    {
      $stream = $this->getEntryStream();
      return $stream->getEntryModel();
    }

    public function getEntryModelName()
    {
      $stream = $this->getEntryStream();
      return $stream->getEntryModelName();
    }

    public function getImages()
    {
      return $this->images;
    }

    public function images()
    {
      return $this->hasMany('Anomaly\ImagesModule\Image\ImageModel', 'type_id');
    }


}
