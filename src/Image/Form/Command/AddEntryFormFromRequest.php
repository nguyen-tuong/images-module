<?php namespace Anomaly\ImagesModule\Image\Form\Command;
use Anomaly\ImagesModule\Entry\Form\EntryFormBuilder;
use Anomaly\ImagesModule\Image\Form\ImageEntryFormBuilder;
use Anomaly\ImagesModule\Type\Contract\TypeRepositoryInterface;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
/**
 * Class AddEntryFormFromRequest
 */
class AddEntryFormFromRequest
{

  use DispatchesJobs;

  protected $builder;

  public function __construct(ImageEntryFormBuilder $builder)
  {
      $this->builder = $builder;
  }

  public function handle(TypeRepositoryInterface $types, EntryFormBuilder $builder, Request $request)
  {
      $type = $types->find($request->get('type'));

      $this->builder->addForm('entry', $builder->setModel($type->getEntryModelName()));
  }

}
