<?php
namespace BannerBundle\Model;



class Category 
extends \BannerBundle\Model\CategoryBase
{

    public function dataLabel()
    {
        $label = $this->name;
        if ( $this->width && $this->height ) {
            $label .= sprintf(' (%dx%d)',$this->width,$this->height);
        }
        if ($this->lang) {
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
        $category = self::load([ 'handle' => $handle, 'lang' => $lang ]);
        if ($category) {
            return $category;
        }
        $category = self::load([ 'handle' => $handle ]);
        if ($category) {
            return $category;
        }
    }

    public static function getImagesByHandle($handle)
    {
        $category = self::load(array( 'handle' => $handle ));
        if ($category) {
            return $category->images;
        }
        return array();
    }
}

