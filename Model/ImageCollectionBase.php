<?php
namespace BannerSlider\Model;

class ImageCollectionBase  extends \LazyRecord\BaseCollection {
const schema_proxy_class = '\\BannerSlider\\Model\\ImageSchemaProxy';
const model_class = '\\BannerSlider\\Model\\Image';
const table = 'banner_images';


}
