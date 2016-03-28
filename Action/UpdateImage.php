<?php
namespace BannerBundle\Action;
use Phifty\FileUtils;

class UpdateImage extends \ActionKit\RecordAction\UpdateRecordAction
{
    public $recordClass = 'BannerBundle\Model\Image';

    function schema() 
    { 
        $this->useRecordSchema();

        $bundle = kernel()->bundle('BannerBundle');
        $sizeLimit = ($c = $bundle->config('size_limit')) ? $c : 500;
        $resizeWidth = ($c = $bundle->config('resize_width')) ? $c : 200;

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
