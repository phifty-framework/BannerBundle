<?php
namespace BannerBundle\Model;

class ImageCollection extends \BannerBundle\Model\ImageCollectionBase
{
    public $defaultOrdering = array(
        array('ordering','asc'),
        array('id','asc'),
    );

    /**
     * $images = ImageCollection::byHandle('index');
     */
    public static function byHandle($handle, $lang = null)
    {
        $c = new Category;
        $c->load( array('handle' => $handle, 'lang' => $lang ? $lang : kernel()->locale->current() ) );
        if ( ! $c->id ) {
            $c->load( array( 'handle' => $handle ) );
        }
        if ( ! $c->id ) {
            return;
        }
        $collection = new self;
        $collection->where()->equal('category_id',$c->id);
        return $collection;
    }
}
