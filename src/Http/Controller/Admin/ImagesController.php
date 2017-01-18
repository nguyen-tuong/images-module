<?php namespace Anomaly\ImagesModule\Http\Controller\Admin;

use Anomaly\ImagesModule\Image\Form\ImageFormBuilder;
use Anomaly\ImagesModule\Image\Table\ImageTableBuilder;
use Anomaly\ImagesModule\Image\Form\ImageEntryFormBuilder;
use Anomaly\ImagesModule\Image\Form\Command\AddEntryFormFromRequest;
use Anomaly\ImagesModule\Image\Form\Command\AddEntryFormFromImage;
use Anomaly\ImagesModule\Image\Form\Command\AddImageFormFromImage;
use Anomaly\ImagesModule\Image\Form\Command\AddImageFormFromRequest;
use Anomaly\ImagesModule\Image\Contract\ImageRepositoryInterface;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ImagesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ImageTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ImageTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ImageFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */

    /*
    public function create(ImageFormBuilder $form)
    {
        return $form->render();
    }
    */
   public function create(ImageEntryFormBuilder $form)
   {
       $this->dispatch(new AddEntryFormFromRequest($form));
       $this->dispatch(new AddImageFormFromRequest($form));

       return $form->render();
   }

    /**
     * Edit an existing entry.
     *
     * @param ImageFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */

    /*
    public function edit(ImageFormBuilder $form, $id)
    {
        return $form->render($id);
    }
    */
    public function edit(ImageRepositoryInterface $images, ImageEntryFormBuilder $form, $id)
     {
         $image = $images->find($id);

         $this->dispatch(new AddEntryFormFromImage($form, $image));
         $this->dispatch(new AddImageFormFromImage($form, $image));

         return $form->render($id);
     }

    public function choose()
    {

    }
}
