<?php

namespace BannerBundle\Controller;

use Phifty\Routing\Controller;

use BannerBundle\Model\Category;

class BannerCategoryController extends Controller
{
    public function imagesAction()
    {
        $categoryId = $this->request->param('c');
        $category = Category::findByPrimaryKey(intval($categoryId));

        return $this->toJson([
            "images" => $category ? $category->images->toInflatedArray() : false,
        ]);
    }

    public function searchAction()
    {
        if ($handle = $this->request->param('handle')) {
            $category = Category::load([ 'handle' => $handle ]);
        } else if ($id = $this->request->param('id')) {
            $category = Category::findByPrimaryKey(intval($id));
        }

        return $this->toJson([
            "category" => $category ? $category->toInflatedArray() : false,
            "images" => $category ? $category->images->toInflatedArray() : false,
        ]);
    }
}
