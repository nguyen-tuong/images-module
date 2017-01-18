<?php namespace Anomaly\ImagesModule\Image\Form\Command;
use Anomaly\ImagesModule\Entry\Form\EntryFormBuilder;
use Anomaly\ImagesModule\Image\Contract\ImageInterface;
use Anomaly\ImagesModule\Image\Form\ImageEntryFormBuilder;
use Illuminate\Foundation\Bus\DispatchesJobs;
/**
 * Class AddEntryFormFromImage
 */
class AddEntryFormFromImage
{
  use DispatchesJobs;

  protected $builder;

  protected $image;

  public function __construct(ImageEntryFormBuilder $builder, ImageInterface $image)
  {
      $this->builder = $builder;
      $this->image    = $image;
  }

  public function handle(EntryFormBuilder $builder)
  {
      $type = $this->image->getType();

      $builder->setModel($type->getEntryModelName());
      $builder->setEntry($this->image->getEntryId());

      $this->builder->addForm('entry', $builder);
  }

}
