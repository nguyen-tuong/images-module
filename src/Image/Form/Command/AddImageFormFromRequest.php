<?php namespace Anomaly\ImagesModule\Image\Form\Command;

use Anomaly\ImagesModule\Image\Form\ImageEntryFormBuilder;
use Anomaly\ImagesModule\Image\Form\ImageFormBuilder;
use Anomaly\ImagesModule\Type\Contract\TypeRepositoryInterface;
use Illuminate\Http\Request;
/**
 * Class AddImageFormFromRequest
 */
class AddImageFormFromRequest
{

  protected $builder;

  public function __construct(ImageEntryFormBuilder $builder)
  {
      $this->builder = $builder;
  }

  public function handle(TypeRepositoryInterface $types, ImageFormBuilder $builder, Request $request)
  {
      $this->builder->addForm('image', $builder->setType($types->find($request->get('type'))));
  }

}
