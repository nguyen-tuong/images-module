<?php namespace Anomaly\ImagesModule\Type\Form;
/**
 * Class TypeFormSection
 */
class TypeFormSections
{
  public function handle(TypeFormBuilder $builder)
  {
    $builder->setSections(
    [
        'general' => [
            'fields' => [
                'title',
                'slug',
                'description',
            ]
        ]
    ]
    );

  }

}
