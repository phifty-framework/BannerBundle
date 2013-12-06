<?php
namespace BannerSlider;
use Phifty\Web\RegionPager;
use AdminUI\CRUDHandler;

/**
 * $category = new BannerSlider\Model\Category
 * $images = $category->getImagesByPlaceHolder('index');
 */

class ImageCRUDHandler extends CRUDHandler
{
    /* CRUD Attributes */
    public $modelClass = 'BannerSlider\\Model\\Image';
    public $crudId     = 'banner_image';

    public function init()
    {
        parent::init();
    }

    public function listRegionAction()
    {
        $category = new \BannerSlider\Model\Category;
        $categoryCollection = $category->asCollection();

        $categoryId = (int) $this->request->param('category_id');
        $category->load( $categoryId );

        $collection = $this->getCollection();
        if( $categoryId )
            $collection->where( array( 'category_id' => $categoryId ) );
        $collection->order( 'id' , 'desc' );

        $page = $this->request->param('page') ?: 1;
        $pageSize = $this->request->param('pagenum') ?: 10;
        $count = $collection->queryCount();
        $collection->page($page,$pageSize);
        $pager = new RegionPager( $page,$count,$pageSize );

        $this->vars['CRUD'] = array(
            'Items' => $collection->items(),
            'Pager' => $pager,
            'Title' => $this->getListTitle(),
            'Object' => $this,
            'Columns' => $this->getListColumns(),
        );

        $this->assignVars( array( 
                'categoryItems'   => $categoryCollection->items(),
                'categoryId'      => $categoryId,
                'categoryCurrent' => $category,
        ));
        return $this->renderCrudList();
    }
}
