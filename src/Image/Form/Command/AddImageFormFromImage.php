<?php namespace Anomaly\ImagesModule\Image\Form\Command;
use Anomaly\ImagesModule\Image\Contract\ImageInterface;
use Anomaly\ImagesModule\Image\Form\ImageEntryFormBuilder;
use Anomaly\ImagesModule\Image\Form\ImageFormBuilder;
use Illuminate\Foundation\Bus\DispatchesJobs;
/**
 * class AddImageFormFromImage
 */
class AddImageFormFromImage
{
  use DispatchesJobs;

  protected $builder;

  protected $image;

  public function __construct(ImageEntryFormBuilder $builder, ImageInterface $image)
  {
      $this->builder = $builder;
      $this->image    = $image;
  }
  public function handle(ImageFormBuilder $builder)
  {
      $builder->setEntry($this->image->getId());

      $this->builder->addForm('image', $builder);
  }
}
