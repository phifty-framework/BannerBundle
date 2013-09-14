<?php
namespace BannerSlider\Action;
use Phifty\FileUtils;

class DeleteCategory extends \ActionKit\RecordAction\DeleteRecordAction
{
    public $recordClass = 'BannerSlider\\Model\\Category';

    public function run() {
        foreach( $this->record->images as $image ) {
            unlink($image->thumb);
            unlink($image->image);
            $image->delete();
        }
        return parent::run();
    }
}


