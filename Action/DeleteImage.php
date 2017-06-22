<?php
namespace BannerBundle\Action;
use Phifty\FileUtils;

class DeleteImage extends \WebAction\RecordAction\DeleteRecordAction
{
    public $recordClass = 'BannerBundle\\Model\\Image';

    public function run() 
    {
        if ( file_exists($this->record->thumb ) ) {
            unlink( $this->record->thumb );
        }
        if ( file_exists($this->record->image ) ) {
            unlink( $this->record->image );
        }
        return parent::run();
    }
}


