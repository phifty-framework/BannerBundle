<?php
namespace BannerSlider\Model;



class Category 
extends \BannerSlider\Model\CategoryBase
{

    public function dataLabel()
    {
        $label = $this->name;
        if ( $this->width && $this->height ) {
            $label .= sprintf(' (%dx%d)',$this->width,$this->height);
        }
        if ( $this->lang ) {
            $label .= ' (' . _($this->lang) . ')';
        }
        return $label;
    }

    public function getImages() {
        return $this->images;
    }

    public static function byHandle($handle, $lang = null) 
    {
        if (! $lang ) {
            $lang = kernel()->locale->current();
        }
        $category = new self;
        $category->load(array( 'handle' => $handle, 'lang' => $lang ));
        if ($category->id) {
            return $category;
        }
        $category->load(array( 'handle' => $handle ));
        if ($category->id) {
            return $category;
        }
    }

    public function getImagesByHandle($handle)
    {
        $this->load(array( 'handle' => $handle ));
        if ($this->id) {
            return $this->images;
        }
        return array();
    }
}

