<?php
namespace BannerBundle\Action;
use Phifty\FileUtils;

class UpdateImage extends \ActionKit\RecordAction\UpdateRecordAction
{
    public $recordClass = 'BannerBundle\Model\Image';

    public function mixins() {
        return [new ImageMixinAction($this)];
    }

    public function successMessage($ret) {
        return __('橫幅 %1 更新成功', $this->record->dataLabel() );
    }
}
