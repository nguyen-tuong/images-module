<?php namespace Anomaly\ImagesModule\Http\Controller\Admin;
use Anomaly\ImagesModule\Image\ImageModel;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\Streams\Platform\Field\Table\FieldTableBuilder;
use Anomaly\Streams\Platform\Field\Form\FieldFormBuilder;
use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeCollection;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
/**
 * Class FieldsController
 */
class FieldsController extends AdminController
{
    public function index(FieldTableBuilder $table, ImageModel $image){
         $table->setStream($image->getStream());
         return $table->render();
      }

    public function choose(FieldTypeCollection $fieldTypes)
    {
        return view('module::ajax/choose_field_type', ['field_types' => $fieldTypes->all()]);
    }

    public function create(FieldFormBuilder $form, StreamRepositoryInterface $streams, FieldTypeCollection $fieldTypes)
    {
      $form->setStream($streams->findBySlugAndNamespace('images', 'images'))
           ->setFieldType($fieldTypes->get($_GET['field_type']));

        return $form->render();
    }

    public function edit(FieldFormBuilder $form, $id)
    {
        return $form->render($id);
    }

}
