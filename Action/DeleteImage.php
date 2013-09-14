<?php
namespace BannerSlider\Action;
use Phifty\FileUtils;

class DeleteImage extends \ActionKit\RecordAction\DeleteRecordAction
{
    public $recordClass = 'BannerSlider\\Model\\Image';

    public function run() 
    {
        if ( file_exists($this->record->thumb ) )
            unlink( $this->record->thumb );
        if ( file_exists($this->record->image ) )
            unlink( $this->record->image );
        return parent::run();
    }
}


