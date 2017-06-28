<?php

namespace BannerBundle\Action;

use Phifty\FileUtils;
use BannerBundle\Model\Image;

class CreateImage extends \WebAction\RecordAction\CreateRecordAction
{
    public $recordClass = Image::class;

    public function mixins() {
        return [new ImageMixinAction($this)];
    }

    public function successMessage($ret) {
        return __('橫幅 %1 新增成功', $this->record->dataLabel() );
    }
}

