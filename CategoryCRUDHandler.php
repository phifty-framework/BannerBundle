<?php

namespace BannerBundle;

use AdminUI\CRUDHandler;
use BannerBundle\Model\Category;

class CategoryCRUDHandler extends CRUDHandler
{
    public $modelClass = Category::class;

    public $crudId     = 'banner_category';

    public $canEdit    = true;

    public $canDelete  = true;
}
