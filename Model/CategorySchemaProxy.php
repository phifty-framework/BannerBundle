<?php
namespace BannerSlider\Model;

use LazyRecord;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\Relationship;

class CategorySchemaProxy extends RuntimeSchema
{

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
    public static $column_names_include_virtual = array (
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

    const schema_class = 'BannerSlider\\Model\\CategorySchema';
    const collection_class = 'BannerSlider\\Model\\CategoryCollection';
    const model_class = 'BannerSlider\\Model\\Category';
    const model_name = 'Category';
    const model_namespace = 'BannerSlider\\Model';
    const primary_key = 'id';
    const table = 'banner_categories';
    const label = 'Category';

    public function __construct()
    {
        /** columns might have closure, so it can not be const */
        $this->columnData      = array( 
  'place_holder' => array( 
      'name' => 'place_holder',
      'attributes' => array( 
          'type' => 'varchar(64)',
          'isa' => 'str',
          'size' => 64,
          'required' => true,
          'label' => '放置位置',
        ),
    ),
  'name' => array( 
      'name' => 'name',
      'attributes' => array( 
          'type' => 'varchar(128)',
          'isa' => 'str',
          'size' => 128,
          'label' => '類別名稱',
        ),
    ),
  'description' => array( 
      'name' => 'description',
      'attributes' => array( 
          'type' => 'varchar(1024)',
          'isa' => 'str',
          'size' => 1024,
          'label' => '敘述',
          'renderAs' => 'TextareaInput',
          'widgetAttributes' => array( 
            ),
        ),
    ),
  'width' => array( 
      'name' => 'width',
      'attributes' => array( 
          'type' => 'integer',
          'isa' => 'int',
          'label' => '寬度',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'size' => 4,
            ),
          'hint' => '以 pixel (px) 為單位',
        ),
    ),
  'height' => array( 
      'name' => 'height',
      'attributes' => array( 
          'type' => 'integer',
          'isa' => 'int',
          'label' => '高度',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'size' => 4,
            ),
          'hint' => '以 pixel (px) 為單位',
        ),
    ),
  'lang' => array( 
      'name' => 'lang',
      'attributes' => array( 
          'type' => 'varchar(12)',
          'isa' => 'str',
          'size' => 12,
          'validValues' => function() {
                return array_flip( kernel()->locale->available() );
            },
          'label' => '語言',
          'default' => function() {
                return kernel()->locale->getDefault();
            },
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
              'allow_empty' => true,
            ),
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
          'label' => '建立於',
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
          'label' => '更新時間',
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
);
        $this->columnNames     = array( 
  'place_holder',
  'name',
  'description',
  'width',
  'height',
);
        $this->primaryKey      = 'id';
        $this->table           = 'banner_categories';
        $this->modelClass      = 'BannerSlider\\Model\\Category';
        $this->collectionClass = 'BannerSlider\\Model\\CategoryCollection';
        $this->label           = 'Category';
        $this->relations       = array( 
  'created_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 4,
      'self_schema' => 'BannerSlider\\Model\\CategorySchema',
      'self_column' => 'created_by',
      'foreign_schema' => 'User\\Model\\User',
      'foreign_column' => 'id',
    ),
)),
  'updated_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 4,
      'self_schema' => 'BannerSlider\\Model\\CategorySchema',
      'self_column' => 'updated_by',
      'foreign_schema' => 'User\\Model\\User',
      'foreign_column' => 'id',
    ),
)),
  'images' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 2,
      'self_column' => 'id',
      'self_schema' => 'BannerSlider\\Model\\CategorySchema',
      'foreign_column' => 'category_id',
      'foreign_schema' => 'BannerSlider\\Model\\ImageSchema',
    ),
)),
);
        $this->readSourceId    = 'default';
        $this->writeSourceId    = 'default';
        parent::__construct();
    }

}
