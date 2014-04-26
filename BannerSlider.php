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
            'with_link' => true,
            'with_title' => true,
            'with_subtitle' => true,
            'with_thumb' => true,
        );
    }

    public function init()
    {
        $this->expandRoute( '/bs/banner_category' , 'BannerSlider\\CategoryCRUDHandler' );
        $this->expandRoute( '/bs/banner_image'    , 'BannerSlider\\ImageCRUDHandler' );

        if( $this->config( 'with_category' ) )
            $this->addRecordAction( 'Category' , array('Create','Update','Delete') );

        kernel()->event->register('phifty.before_action', function() {
            kernel()->action->registerAction('BannerSlider\\Action\\SortImage', 
                '@ActionKit/RecordAction.html.twig', array( 
                    'base_class' => 'SortablePlugin\\Action\\SortRecordAction',
                    'record_class' => 'BannerSlider\\Model\\Image',
                ));
        });

        $label = $this->config('label') ?: _('Banner');

        $self = $this;
        kernel()->event->register( 'adminui.init_menu' , function($menu) use ($self,$label) {
            $folder = $menu->createMenuFolder( $label );
            $folder->createCrudMenuItem('banner_category', $label);
        });
    }
}

