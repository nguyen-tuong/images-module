<?php namespace Anomaly\ImagesModule\Image\Form;
use Anomaly\ImagesModule\Image\ImageModel;
use Anomaly\Streams\Platform\Addon\FieldType\FieldType;
/**
 * Class ImageEntryFormSections
 */
class ImageEntryFormSections
{

  public function handle(ImageEntryFormBuilder $builder)
    {
        $builder->setSections(
            [
                'general'      => [
                    'fields' => [
                        'image_desktopimage',
                        'image_mobileimage',
                        'image_title',
                    ],
                ],
                'fields'       => [
                    'fields' => function (ImageEntryFormBuilder $builder) {
                        return array_map(
                            function (FieldType $field) {
                                return 'entry_' . $field->getField();
                            },
                            array_filter(
                                $builder->getFormFields()->base()->all(),
                                function (FieldType $field) {
                                    return (!$field->getEntry() instanceof ImageModel);
                                }
                            )
                        );
                    },
                ],
                'organization' => [
                    'fields' => [
                        'image_categories',
                        'image_description',
                        'image_pagelinks',
                        'image_visibled',
                    ],
                ],


            ]
        );
    }

}
