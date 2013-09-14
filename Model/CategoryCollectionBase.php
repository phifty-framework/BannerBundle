<?php
namespace BannerSlider\Model;

class CategoryCollectionBase  extends \LazyRecord\BaseCollection {
const schema_proxy_class = '\\BannerSlider\\Model\\CategorySchemaProxy';
const model_class = '\\BannerSlider\\Model\\Category';
const table = 'banner_categories';


}
