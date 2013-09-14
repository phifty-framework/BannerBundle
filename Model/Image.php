<?php
namespace BannerSlider\Model;



class Image 
extends \BannerSlider\Model\ImageBase
{
    public function __toString()
    {
        return $this->render();
    }

    public function render()
    {
        if( $this->link )
        {
            return sprintf('<a href="%s"><img alt="%s" src="/%s"/></a>',
                $this->link, 
                $this->subtitle,
                $this->image ) . "\n";
        }
        return sprintf('<img alt="%s" src="/%s"/>', $this->subtitle, $this->image ) . "\n";
    }
    
}
