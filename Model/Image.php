<?php
namespace BannerSlider\Model;

class Image extends \BannerSlider\Model\ImageBase
{
    public function __toString()
    {
        return $this->render();
    }


    /**
     * Render this image object with specific template.
     *
     * @param string $templateName
     * @param array $args
     */
    public function renderAs($templateName, $args = array() 
    {
        $view = kernel()->view();
        return $view->render($templateName, array_merge(array( 'image' => $this ), $args));
    }

    public function render()
    {
        $view = kernel()->view();
        return $view->render("@BannerSlider/image.html", array( 'image' => $this ));
    }
}
