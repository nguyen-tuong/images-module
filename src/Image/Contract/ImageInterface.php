<?php namespace Anomaly\ImagesModule\Image\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Symfony\Component\HttpFoundation\Response;

interface ImageInterface extends EntryInterface
{

  public function getType();

  public function getEntry();

    /**
     * Get the related entry's ID.
     *
     * @return null|int
     */
  public function getEntryId();

  public function getResponse();

    /**
     * Set the response.
     *
     * @param $response
     * @return $this
     */
    public function setResponse(Response $response);

}
