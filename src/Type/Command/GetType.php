<?php namespace Anomaly\ImagesModule\Type\Command;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
use Anomaly\ImagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Support\Presenter;
/**
 * Class GetType
 */
class GetType
{
  protected $identifier;

    /**
     * Create a new GetType instance.
     *
     * @param $identifier
     */
    public function __construct($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Handle the command.
     *
     * @param  TypeRepositoryInterface $types
     * @return TypeInterface|null
     */
    public function handle(TypeRepositoryInterface $types)
    {
        if (is_numeric($this->identifier)) {
            return $types->find($this->identifier);
        }

        if (is_string($this->identifier)) {
            return $types->findBySlug($this->identifier);
        }

        if ($this->identifier instanceof Presenter) {
            return $this->identifier->getObject();
        }

        if ($this->identifier instanceof TypeInterface) {
            return $this->identifier;
        }

        return null;
    }

}
