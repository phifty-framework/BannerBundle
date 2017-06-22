<?php
namespace BannerBundle\Action;
use Phifty\FileUtils;

class DeleteCategory extends \WebAction\RecordAction\DeleteRecordAction
{
    public $recordClass = 'BannerBundle\\Model\\Category';

    public function run() {
        foreach( $this->record->images as $image ) {
            unlink($image->thumb);
            unlink($image->image);
            $image->delete();
        }
        return parent::run();
    }
}


