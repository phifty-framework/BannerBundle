<?php
namespace BannerSlider\Model;

class CategoryBase  extends \Phifty\Model {
const schema_proxy_class = 'BannerSlider\\Model\\CategorySchemaProxy';
const collection_class = 'BannerSlider\\Model\\CategoryCollection';
const model_class = 'BannerSlider\\Model\\Category';
const table = 'banner_categories';

public static $column_names = array (
  0 => 'place_holder',
  1 => 'name',
  2 => 'description',
  3 => 'width',
  4 => 'height',
  5 => 'lang',
  6 => 'id',
  7 => 'created_on',
  8 => 'updated_on',
  9 => 'created_by',
  10 => 'updated_by',
);
public static $column_hash = array (
  'place_holder' => 1,
  'name' => 1,
  'description' => 1,
  'width' => 1,
  'height' => 1,
  'lang' => 1,
  'id' => 1,
  'created_on' => 1,
  'updated_on' => 1,
  'created_by' => 1,
  'updated_by' => 1,
);
public static $mixin_classes = array (
  0 => 'CommonBundle\\Model\\Mixin\\MetaSchema',
  1 => 'I18N\\Model\\Mixin\\I18NSchema',
);

}
