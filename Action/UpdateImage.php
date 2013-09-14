<?php
namespace BannerSlider\Action;
use Phifty\FileUtils;

class UpdateImage extends \ActionKit\RecordAction\UpdateRecordAction
{
    public $recordClass = 'BannerSlider\Model\Image';

    function schema() 
    { 
        $this->useRecordSchema();

        $plugin = kernel()->plugin('BannerSlider');
        $sizeLimit = ($c = $plugin->config('size_limit')) ? $c : 500;
        $resizeWidth = ($c = $plugin->config('resize_width')) ? $c : 200;

        $this->param( 'thumb' , 'Image' )
            ->sizeLimit( $sizeLimit )
            ->resizeWidth( $resizeWidth )
            ->sourceField( 'image' )
            ;

        $this->param( 'image' , 'Image' )
            ->sizeLimit( $sizeLimit )
            ;

    }
}
