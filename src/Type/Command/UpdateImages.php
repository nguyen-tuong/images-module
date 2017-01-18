<?php namespace Anomaly\ImagesModule\Type\Command;
use Anomaly\ImagesModule\Image\Contract\ImageInterface;
use Anomaly\ImagesModule\Image\Contract\ImageRepositoryInterface;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
use Anomaly\ImagesModule\Type\Contract\TypeRepositoryInterface;
use Illuminate\Foundation\Bus\DispatchesJobs;
/**
 * Class UpdateImage
 */
class UpdateImage
{

  use DispatchesJobs;

    /**
     * The post type instance.
     *
     * @var TypeInterface
     */
    protected $type;

    /**
     * Update a new UpdatePosts instance.
     *
     * @param TypeInterface $type
     */
    public function __construct(TypeInterface $type)
    {
        $this->type = $type;
    }

    /**
     * Handle the command.
     *
     * @param TypeRepositoryInterface $types
     * @param PostRepositoryInterface $posts
     */
    public function handle(TypeRepositoryInterface $types, ImageRepositoryInterface $posts)
    {
        /* @var TypeInterface $type */
        $type = $types->find($this->type->getId());

        /* @var PostInterface $post */
        foreach ($type->getPosts() as $post) {
            $posts->save($post->setAttribute('entry_type', $this->type->getEntryModelName()));
        }
    }


}
