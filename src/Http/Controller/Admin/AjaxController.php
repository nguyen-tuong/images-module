<?php namespace Anomaly\ImagesModule\Http\Controller\Admin;

use Anomaly\ImagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeCollection;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
/**
 * Class AjaxController
 */
class AjaxController extends AdminController
{

  public function chooseType(TypeRepositoryInterface $types)
  {
    return view('module::ajax/choose_type', ['types' => $types->all()]);
  }
}
