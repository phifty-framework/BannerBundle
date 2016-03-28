<?php
namespace BannerBundle;
use Phifty\Web\RegionPager;
use AdminUI\CRUDHandler;

/**
 * $category = new BannerBundle\Model\Category
 * $images = $category->getImagesByHandle('index');
 */

class ImageCRUDHandler extends CRUDHandler
{
    /* CRUD Attributes */
    public $modelClass = 'BannerBundle\\Model\\Image';
    public $crudId     = 'banner_image';

    protected $applyRequestFields = ['category_id'];

    public function init()
    {
        parent::init();
    }

    public function listRegionAction()
    {
        $category = new \BannerBundle\Model\Category;
        $categoryCollection = $category->asCollection();

        $categoryId = (int) $this->request->param('category_id');
        $category->load( $categoryId );

        $collection = $this->getCollection();
        if( $categoryId )
            $collection->where( array( 'category_id' => $categoryId ) );
        $collection->orderBy( 'id' , 'desc' );

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
        return $this->renderList();
    }
}
