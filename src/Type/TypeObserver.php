<?php namespace Anomaly\ImagesModule\Type;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\ImagesModule\Type\Command\CreateTypeStream;
use Anomaly\Streams\Platform\Entry\EntryObserver;
use Anomaly\ImagesModule\Type\Command\DeleteImages;
use Anomaly\ImagesModule\Type\Command\DeleteTypeStream;

class TypeObserver extends EntryObserver
{

  public function created(EntryInterface $entry)
  {
    $this->commands->dispatch(new CreateTypeStream($entry));
    parent::created($entry);
  }

  public function deleted(EntryInterface $entry)
  {
    $this->commands->dispatch(new DeleteImages($entry));
    $this->commands->dispatch(new DeleteTypeStream($entry));

    parent::deleted($entry);
  }

}
