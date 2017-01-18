<?php namespace Anomaly\ImagesModule\Type\Command;
use Anomaly\ImagesModule\Image\Contract\ImageRepositoryInterface;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
/**
 * Class DeleteImages
 */
class DeleteImages
{
    protected $type;

    public function __construct(TypeInterface $type)
    {
        $this->type = $type;
    }

    public function handle(ImageRepositoryInterface $images)
    {
        foreach($this->type->getImages() as $image)
        {
            $images->delete($image);
        }
    }

}
