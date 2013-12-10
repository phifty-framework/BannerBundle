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

    public function getImagesByHandle($holder)
    {
        $this->load(array( 'handle' => $holder ));
        if ($this->id) {
            return $this->images;
        }
        return array();
    }
}

