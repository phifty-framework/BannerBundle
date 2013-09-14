<?php
namespace BannerSlider\Model;

class ImageBase  extends \Phifty\Model {
const schema_proxy_class = 'BannerSlider\\Model\\ImageSchemaProxy';
const collection_class = 'BannerSlider\\Model\\ImageCollection';
const model_class = 'BannerSlider\\Model\\Image';
const table = 'banner_images';

public static $column_names = array (
  0 => 'image',
  1 => 'thumb',
  2 => 'title',
  3 => 'subtitle',
  4 => 'link',
  5 => 'category_id',
  6 => 'ordering',
  7 => 'created_on',
  8 => 'updated_on',
  9 => 'created_by',
  10 => 'updated_by',
  11 => 'id',
);
public static $column_hash = array (
  'image' => 1,
  'thumb' => 1,
  'title' => 1,
  'subtitle' => 1,
  'link' => 1,
  'category_id' => 1,
  'ordering' => 1,
  'created_on' => 1,
  'updated_on' => 1,
  'created_by' => 1,
  'updated_by' => 1,
  'id' => 1,
);
public static $mixin_classes = array (
  0 => 'Phifty\\Model\\Mixin\\MetadataSchema',
);

}
