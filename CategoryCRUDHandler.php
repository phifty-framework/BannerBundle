<?php
namespace BannerSlider;

class CategoryCRUDHandler extends \AdminUI\CRUDHandler
{
    /* CRUD Attributes */
    public $modelClass = 'BannerSlider\\Model\\Category';
    public $crudId     = 'banner_category';

    public function init()
    {
        parent::init();
        $this->plugin = BannerSlider::getInstance();
    }
}
