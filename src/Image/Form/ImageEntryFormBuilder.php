<?php namespace Anomaly\ImagesModule\Image\Form;
use Anomaly\ImagesModule\Entry\Form\EntryFormBuilder;
use Anomaly\Streams\Platform\Ui\Form\Multiple\MultipleFormBuilder;
/**
 * Class ImageEntryFormBuilder
 */
class ImageEntryFormBuilder extends MultipleFormBuilder
{
  public function onSavedEntry(EntryFormBuilder $builder)
  {
      /* @var FormBuilder $form */
      $form = $this->forms->get('image');

      $image = $form->getFormEntry();

      $entry = $builder->getFormEntry();

      $image->entry_id   = $entry->getId();
      $image->entry_type = get_class($entry);
  }
  public function getContextualId()
    {
        /* @var FormBuilder $form */
        $form = $this->forms->get('image');

        return $form->getContextualId();
    }
}
