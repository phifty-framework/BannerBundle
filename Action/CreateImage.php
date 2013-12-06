<?php
namespace BannerSlider\Action;
use Phifty\FileUtils;

class CreateImage extends \ActionKit\RecordAction\CreateRecordAction
{
    public $recordClass = 'BannerSlider\\Model\\Image';

    public function schema() 
    { 
        $this->useRecordSchema();
        $bundle = \BannerSlider\BannerSlider::getInstance();
        $thumbSizeLimit = $bundle->config('thumb.size_limit');
        $imageSizeLimit = $bundle->config('image.size_limit');

        $this->param( 'thumb' , 'Image' )
            ->sizeLimit( $thumbSizeLimit )
            ->resizeWidth( 120 )
            ->sourceField( 'image' )
            ->hintFromSizeLimit()
            ;

        $this->param( 'image' , 'Image' )
            ->required(1)
            ->sizeLimit( $imageSizeLimit )
            ->hintFromSizeLimit()
            ;
    }

    public function successMessage($ret)
    {
        return '圖片上傳成功';
    }


}

