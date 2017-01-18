<?php namespace Anomaly\ImagesModule\Type;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
use Anomaly\ImagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class TypeRepository extends EntryRepository implements TypeRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var TypeModel
     */
    protected $model;

    /**
     * Create a new TypeRepository instance.
     *
     * @param TypeModel $model
     */
    public function __construct(TypeModel $model)
    {
        $this->model = $model;
    }

    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }

    public function findManyByType(TypeInterface $type, $limit = null)
    {
        return $this->model
            ->live()
            ->where('type_id', $type->getId())
            ->paginate($limit);
    }
}
