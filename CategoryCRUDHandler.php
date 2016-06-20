<?php
namespace BannerBundle;
use AdminUI\CRUDHandler;

class CategoryCRUDHandler extends CRUDHandler
{
    public $modelClass = 'BannerBundle\\Model\\Category';
    public $crudId     = 'banner_category';
    public $canEdit    = true;
    public $canDelete  = true;
}
