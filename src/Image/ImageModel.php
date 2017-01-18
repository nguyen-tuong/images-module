<?php namespace Anomaly\ImagesModule\Image;

use Anomaly\ImagesModule\Image\Contract\ImageInterface;
use Anomaly\Streams\Platform\Model\Images\ImagesImagesEntryModel;
use Symfony\Component\HttpFoundation\Response;

class ImageModel extends ImagesImagesEntryModel implements ImageInterface
{

  protected $cacheMinutes = 99999;

  protected $with = [
      'entry',
      'translations',
  ];
  protected $response = null;

  public function getTitle()
  {
    return $this->title;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getTypeName()
  {
      $type = $this->getType();

      return $type->getName();
  }

  public function getTypeDescription()
  {
      return $this->getType()->getDescription();
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getDesktopImage()
  {
    return $this->desktopimage;

  }

  public function getMobileImage()
  {
    return $this->mobileimage;
  }

  public function getCategories()
  {
    return $this->categories;
  }

  public function getVisibled()
  {
    return $this->visibled;
  }

  public function getEntry()
  {
      return $this->entry;
  }

  /**
   * Get the related entry's ID.
   *
   * @return null|int
   */
  public function getEntryId()
  {
      $entry = $this->getEntry();

      return $entry->getId();
  }

  public function getPageLinks()
  {
    return $this->pagelinks;
  }

  public function getResponse()
  {
    return $this->response;
  }

  public function setResponse(Response $response)
  {
    $this->response = $response;

    return $this;

  }


}
