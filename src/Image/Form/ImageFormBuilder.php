<?php namespace Anomaly\ImagesModule\Image\Form;
use Anomaly\ImagesModule\Image\Contract\ImageInterface;
use Anomaly\ImagesModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class ImageFormBuilder extends FormBuilder
{

    protected $type = null;

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [];

    /**
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = [
      'type',
      'entry'
    ];


    public function onReady()
    {
      if (!$this->getType() && !$this->getEntry()) {
            throw new \Exception('The $type parameter is required when creating a image.');
        }
    }

    public function onSaving()
    {
        $entry  = $this->getFormEntry();
        $type   = $this->getType();

        if (!$entry->type_id) {
            $entry->type_id = $type->getId();
        }
    }


    /**
     * The form actions.
     *
     * @var array|string
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array|string
     */
    protected $buttons = [];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [];

    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param  TypeInterface $type
     * @return $this
     */
    public function setType(TypeInterface $type)
    {
        $this->type = $type;

        return $this;
    }

}
