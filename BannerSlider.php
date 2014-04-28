<?php
namespace BannerSlider;
use Phifty\Bundle;
use Phifty\Routing\RouteSet;
use Phifty\Region;
use Phifty\CRUDHandler;
use Phifty\Web\RegionPager;

class BannerSlider extends Bundle
{

    public function defaultConfig()
    {
        return array(
            'BannerImage' => [
                'link' => false,
                'title' => false,
                'subtitle' => false,
                'thumb' => false,
            ],
            'BannerCategory' => [
                'enable' => false,
            ],
            // for backward compatibility
            // deprecated
            'with_link' => true,
            'with_title' => true,
            'with_subtitle' => true,
            'with_thumb' => true,
        );
    }

    public function init()
    {
        $this->expandRoute( '/bs/banner_category' , 'CategoryCRUDHandler' );
        $this->expandRoute( '/bs/banner_image'    , 'ImageCRUDHandler' );

        if ( $this->config( 'BannerCategory.enable' ) ) {
            $this->addRecordAction('Category');
        }

        $this->addRecordAction('Image', [ 'Sort' ]);

        $label = $this->config('label') ?: _('Banner');

        $self = $this;
        kernel()->event->register( 'adminui.init_menu' , function($menu) use ($self,$label) {
            $folder = $menu->createMenuFolder( $label );
            $folder->createCrudMenuItem('banner_category', $label);
        });
    }
}

