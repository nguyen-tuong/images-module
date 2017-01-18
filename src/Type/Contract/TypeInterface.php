<?php namespace Anomaly\ImagesModule\Type\Contract;

use Anomaly\ImagesModule\Image\ImageCollection;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;
use Anomaly\Streams\Platform\Entry\EntryModel;

interface TypeInterface extends EntryInterface
{
    public function getTitle();

    public function getSlug();

    public function getDescription();

    public function getEntryStream();

    public function getEntryModel();

    public function getEntryModelName();

    public function getImages();

    public function images();

}
