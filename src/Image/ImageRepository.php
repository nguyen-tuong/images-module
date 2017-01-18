<?php namespace Anomaly\ImagesModule\Image;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
use Anomaly\ImagesModule\Image\Contract\ImageRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ImageRepository extends EntryRepository implements ImageRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ImageModel
     */
    protected $model;

    /**
     * Create a new ImageRepository instance.
     *
     * @param ImageModel $model
     */
    public function __construct(ImageModel $model)
    {
        $this->model = $model;
    }

    public function findManyByType(TypeInterface $type, $limit = null)
    {
        return $this->model
            ->where('type_id', $type->getId())
            ->paginate($limit);
    }
}
