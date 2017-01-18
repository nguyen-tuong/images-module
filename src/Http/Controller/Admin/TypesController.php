<?php namespace Anomaly\ImagesModule\Http\Controller\Admin;
use Anomaly\Streams\Platform\Assignment\Table\AssignmentTableBuilder;
use Anomaly\Streams\Platform\Assignment\Form\AssignmentFormBuilder;
use Anomaly\ImagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\ImagesModule\Type\Form\TypeFormBuilder;
use Anomaly\ImagesModule\Type\Table\TypeTableBuilder;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Ui\Breadcrumb\BreadcrumbCollection;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class TypesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param TypeTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TypeTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TypeFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TypeFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TypeFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TypeFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    public function fields(
    AssignmentTableBuilder $table,
    TypeRepositoryInterface $types,
    BreadcrumbCollection $breadcrumbs, $id
    )
    {
        $type = $types->find($id);
        $breadcrumbs->put($type->getTitle(), 'admin/images/types/edit/' . $type->getId());
        $breadcrumbs->put('streams::breadcrumb.assignments', 'admin/images/types/assignments/' . $type->getId());

        return $table
            ->setButtons([
                  'edit' => [
                  'href' => '{request.path}/assignment/{entry.id}',
                ],
            ])->setStream($type->getEntryStream())->render();
    }
    public function choose(FieldRepositoryInterface $fields, TypeRepositoryInterface $types, $id)
    {
      $type = $types->find($id);
      return view(
        'module::ajax/choose_field',
        [
          'fields' => $fields->findAllByNamespace('images')->notAssignedTo($type->getEntryStream())->unlocked(),
          'id'     => $id,
        ]
    );
    }

    public function assign(
      AssignmentFormBuilder $form,
      TypeRepositoryInterface $types,
      FieldRepositoryInterface $fields,
      $id,
      $field
    )
    {
        $type = $types->find($id);
        return $form
            ->setStream($type->getEntryStream())
            ->setField($fields->find($field))
            ->render();
    }

    public function assignment(
        AssignmentFormBuilder $form,
        TypeRepositoryInterface $types,
        BreadcrumbCollection $breadcrumbs,
        $id,
        $assignment
    )
    {
      $type = $types->find($id);

      $breadcrumbs->put('streams::breadcrumb.assignments', 'admin/images/types/assignments/' . $type->getId());

      return $form->render($assignment);
    }
}
