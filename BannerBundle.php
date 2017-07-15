<?php
namespace BannerBundle;

use Phifty\Bundle;
use Phifty\Routing\RouteSet;
use Phifty\Region;
use Phifty\CRUDHandler;
use Phifty\Web\RegionPager;

use BannerBundle\Controller\BannerCategoryController;

class BannerBundle extends Bundle
{

    public function defaultConfig()
    {
        return [
            'BannerImage' => [
                'link' => false,
                'title' => false,
                'subtitle' => false,
                'thumb' => false,
            ],
            'BannerCategory' => [ ],
            // for backward compatibility
            // deprecated
            'with_link' => true,
            'with_title' => true,
            'with_subtitle' => true,
            'with_thumb' => true,
        ];
    }

    public function boot()
    {
        $this->mount('/bs/banner_category' , CategoryCRUDHandler::class);
        $this->mount('/bs/banner_image'    , ImageCRUDHandler::class);
        $this->mount('/=/banner-category', BannerCategoryController::class);

        $this->addRecordAction("Category");
        $this->addRecordAction("Image");
        $this->addUpdateOrderingAction("Image");

        $label = $this->config('label') ?: _('Banner');

        $this->kernel->event->register( 'adminui.init_menu' , function($menu) use ($label) {
            $folder = $menu->createMenuFolder( $label );
            $folder->createCrudMenuItem('banner_category', $label);
        });
    }
}

