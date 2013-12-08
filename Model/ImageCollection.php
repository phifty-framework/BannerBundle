<?php
namespace BannerSlider\Model;



class ImageCollection 
extends \BannerSlider\Model\ImageCollectionBase
{
    public $defaultOrdering = array(
        array('ordering','asc'),
        array('id','asc'),
    );

    /**
     * $images = ImageCollection::byHandle('index');
     */
    public static function byHandle($identity)
    {
        $c = new Category( array('handle' => $identity, 'lang' => kernel()->locale->current() ) );
        if ( ! $c->id ) {
            return;
        }
        $collection = new self;
        $collection->where()
            ->equal('category_id',$c->id);
        return $collection;
    }
    
}
