<?php
namespace BannerBundle;
use Phifty\Bundle;
use Phifty\Routing\RouteSet;
use Phifty\Region;
use Phifty\CRUDHandler;
use Phifty\Web\RegionPager;

class BannerBundle extends Bundle
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
        $this->mount( '/bs/banner_category' , 'CategoryCRUDHandler' );
        $this->mount( '/bs/banner_image'    , 'ImageCRUDHandler' );

        if ($this->config( 'BannerCategory.enable' )) {
            $this->addRecordAction('Category');
        }

        $this->addUpdateOrderingAction('Image');

        $label = $this->config('label') ?: _('Banner');

        $self = $this;
        kernel()->event->register( 'adminui.init_menu' , function($menu) use ($self,$label) {
            $folder = $menu->createMenuFolder( $label );
            $folder->createCrudMenuItem('banner_category', $label);
        });
    }
}

