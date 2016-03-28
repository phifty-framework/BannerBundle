<?php
namespace BannerBundle;

class CategoryCRUDHandler extends \AdminUI\CRUDHandler
{
    /* CRUD Attributes */
    public $modelClass = 'BannerBundle\\Model\\Category';
    public $crudId     = 'banner_category';
    public $canEdit    = true;
    public $canDelete  = true;
}
