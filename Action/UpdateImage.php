<?php
namespace BannerBundle\Action;

use Phifty\FileUtils;
use BannerBundle\Model\Image;

class UpdateImage extends \WebAction\RecordAction\UpdateRecordAction
{
    public $recordClass = Image::class;

    public function mixins() {
        return [new ImageMixinAction($this)];
    }

    public function successMessage($ret) {
        return __('橫幅 %1 更新成功', $this->record->dataLabel() );
    }
}
