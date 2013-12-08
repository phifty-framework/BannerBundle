<?php
namespace BannerSlider\Model;



class Category 
extends \BannerSlider\Model\CategoryBase
{

    public function dataLabel()
    {
        $label = $this->name;
        if( $this->width && $this->height )
            $label .= sprintf(' (%dx%d)',$this->width,$this->height);
        return $label;
    }

    public function getImages()
    {
        $images = $this->images;
        $images->order('ordering','asc');
        return $images;
    }

    public function getImagesByPlaceHolder($holder)
    {
        $this->load(array( 'handle' => $holder ));
        if($this->id)
            return $this->getImages();
        return array();
    }
}

