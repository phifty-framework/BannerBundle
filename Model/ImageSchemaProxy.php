<?php
namespace BannerSlider\Model;

use LazyRecord;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\Relationship;

class ImageSchemaProxy extends RuntimeSchema
{

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
    public static $column_names_include_virtual = array (
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

    const schema_class = 'BannerSlider\\Model\\ImageSchema';
    const collection_class = 'BannerSlider\\Model\\ImageCollection';
    const model_class = 'BannerSlider\\Model\\Image';
    const model_name = 'Image';
    const model_namespace = 'BannerSlider\\Model';
    const primary_key = 'id';
    const table = 'banner_images';
    const label = 'Image';

    public function __construct()
    {
        /** columns might have closure, so it can not be const */
        $this->columnData      = array( 
  'image' => array( 
      'name' => 'image',
      'attributes' => array( 
          'type' => 'varchar(256)',
          'isa' => 'str',
          'size' => 256,
          'label' => 'Image',
        ),
    ),
  'thumb' => array( 
      'name' => 'thumb',
      'attributes' => array( 
          'type' => 'varchar(256)',
          'isa' => 'str',
          'size' => 256,
          'label' => 'Thumb Image',
        ),
    ),
  'title' => array( 
      'name' => 'title',
      'attributes' => array( 
          'type' => 'varchar(200)',
          'isa' => 'str',
          'size' => 200,
          'label' => 'Title',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'size' => 50,
            ),
        ),
    ),
  'subtitle' => array( 
      'name' => 'subtitle',
      'attributes' => array( 
          'type' => 'varchar(512)',
          'isa' => 'str',
          'size' => 512,
          'label' => 'Subtitle',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'size' => 60,
            ),
        ),
    ),
  'link' => array( 
      'name' => 'link',
      'attributes' => array( 
          'type' => 'varchar(512)',
          'isa' => 'str',
          'size' => 512,
          'label' => 'Link',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'size' => 70,
            ),
        ),
    ),
  'category_id' => array( 
      'name' => 'category_id',
      'attributes' => array( 
          'type' => 'integer',
          'isa' => 'int',
          'refer' => 'BannerSlider\\Model\\Category',
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
            ),
          'label' => 'Banner Category',
        ),
    ),
  'ordering' => array( 
      'name' => 'ordering',
      'attributes' => array( 
          'type' => 'integer',
          'isa' => 'int',
          'default' => 0,
          'renderAs' => 'HiddenInput',
          'widgetAttributes' => array( 
            ),
        ),
    ),
  'created_on' => array( 
      'name' => 'created_on',
      'attributes' => array( 
          'type' => 'timestamp',
          'isa' => 'DateTime',
          'timezone' => true,
          'null' => true,
          'renderAs' => 'DateTimeInput',
          'widgetAttributes' => array( 
            ),
          'label' => 'Created on',
          'default' => function() {
                return date('c');
            },
        ),
    ),
  'updated_on' => array( 
      'name' => 'updated_on',
      'attributes' => array( 
          'type' => 'timestamp',
          'isa' => 'DateTime',
          'timezone' => true,
          'null' => true,
          'renderAs' => 'DateTimeInput',
          'widgetAttributes' => array( 
            ),
          'default' => function() {
                return date('c');
            },
          'label' => 'Updated on',
        ),
    ),
  'created_by' => array( 
      'name' => 'created_by',
      'attributes' => array( 
          'type' => 'integer',
          'isa' => 'int',
          'refer' => 'User\\Model\\User',
          'default' => function() {
                if ( isset($_SESSION) ) {
                    return kernel()->currentUser->id;
                }
            },
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
            ),
          'label' => '建立者',
        ),
    ),
  'updated_by' => array( 
      'name' => 'updated_by',
      'attributes' => array( 
          'type' => 'integer',
          'isa' => 'int',
          'refer' => 'User\\Model\\User',
          'default' => function() {
                if ( isset($_SESSION) ) {
                    return kernel()->currentUser->id;
                }
            },
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
            ),
          'label' => '更新者',
        ),
    ),
  'id' => array( 
      'name' => 'id',
      'attributes' => array( 
          'type' => 'integer',
          'isa' => 'int',
          'primary' => true,
          'autoIncrement' => true,
        ),
    ),
);
        $this->columnNames     = array( 
  'image',
  'thumb',
  'title',
  'subtitle',
  'link',
  'category_id',
  'ordering',
);
        $this->primaryKey      = 'id';
        $this->table           = 'banner_images';
        $this->modelClass      = 'BannerSlider\\Model\\Image';
        $this->collectionClass = 'BannerSlider\\Model\\ImageCollection';
        $this->label           = 'Image';
        $this->relations       = array( 
  'created_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 4,
      'self_schema' => 'BannerSlider\\Model\\ImageSchema',
      'self_column' => 'created_by',
      'foreign_schema' => 'User\\Model\\User',
      'foreign_column' => 'id',
    ),
)),
  'updated_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 4,
      'self_schema' => 'BannerSlider\\Model\\ImageSchema',
      'self_column' => 'updated_by',
      'foreign_schema' => 'User\\Model\\User',
      'foreign_column' => 'id',
    ),
)),
  'category' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 4,
      'self_schema' => 'BannerSlider\\Model\\ImageSchema',
      'self_column' => 'category_id',
      'foreign_schema' => 'BannerSlider\\Model\\Category',
      'foreign_column' => 'id',
    ),
)),
);
        $this->readSourceId    = 'default';
        $this->writeSourceId    = 'default';
        parent::__construct();
    }

}
