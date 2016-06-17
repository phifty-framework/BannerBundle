<?php
namespace BannerBundle\Model;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\RuntimeColumn;
use LazyRecord\Schema\Relationship;
class CategorySchemaProxy
    extends RuntimeSchema
{
    const schema_class = 'BannerBundle\\Model\\CategorySchema';
    const model_name = 'Category';
    const model_namespace = 'BannerBundle\\Model';
    const COLLECTION_CLASS = 'BannerBundle\\Model\\CategoryCollection';
    const MODEL_CLASS = 'BannerBundle\\Model\\Category';
    const PRIMARY_KEY = 'id';
    const TABLE = 'banner_categories';
    const LABEL = 'Category';
    public static $column_hash = array (
      'id' => 1,
      'name' => 1,
      'handle' => 1,
      'description' => 1,
      'width' => 1,
      'height' => 1,
      'remark' => 1,
      'lang' => 1,
      'created_on' => 1,
      'updated_on' => 1,
      'created_by' => 1,
      'updated_by' => 1,
    );
    public static $mixin_classes = array (
      0 => 'CommonBundle\\Model\\Mixin\\MetaSchema',
      1 => 'I18N\\Model\\Mixin\\I18NSchema',
    );
    public $columnNames = array (
      0 => 'id',
      1 => 'name',
      2 => 'handle',
      3 => 'description',
      4 => 'width',
      5 => 'height',
      6 => 'remark',
      7 => 'lang',
      8 => 'created_on',
      9 => 'updated_on',
      10 => 'created_by',
      11 => 'updated_by',
    );
    public $primaryKey = 'id';
    public $columnNamesIncludeVirtual = array (
      0 => 'id',
      1 => 'name',
      2 => 'handle',
      3 => 'description',
      4 => 'width',
      5 => 'height',
      6 => 'remark',
      7 => 'lang',
      8 => 'created_on',
      9 => 'updated_on',
      10 => 'created_by',
      11 => 'updated_by',
    );
    public $label = 'Category';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public $relations;
    public function __construct()
    {
        $this->relations = array( 
      'created_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
      'data' => array( 
          'type' => 3,
          'self_schema' => 'BannerBundle\\Model\\CategorySchema',
          'self_column' => 'created_by',
          'foreign_schema' => 'UserBundle\\Model\\UserSchema',
          'foreign_column' => 'id',
        ),
      'accessor' => 'created_by',
      'where' => NULL,
      'orderBy' => array( 
        ),
      'onUpdate' => NULL,
      'onDelete' => NULL,
    )),
      'updated_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
      'data' => array( 
          'type' => 3,
          'self_schema' => 'BannerBundle\\Model\\CategorySchema',
          'self_column' => 'updated_by',
          'foreign_schema' => 'UserBundle\\Model\\UserSchema',
          'foreign_column' => 'id',
        ),
      'accessor' => 'updated_by',
      'where' => NULL,
      'orderBy' => array( 
        ),
      'onUpdate' => NULL,
      'onDelete' => NULL,
    )),
      'images' => \LazyRecord\Schema\Relationship::__set_state(array( 
      'data' => array( 
          'type' => 1,
          'self_column' => 'id',
          'self_schema' => 'BannerBundle\\Model\\CategorySchema',
          'foreign_column' => 'category_id',
          'foreign_schema' => 'BannerBundle\\Model\\ImageSchema',
        ),
      'accessor' => 'images',
      'where' => NULL,
      'orderBy' => array( 
          array( 
              'ordering',
              'asc',
            ),
        ),
      'onUpdate' => NULL,
      'onDelete' => NULL,
    )),
    );
        $this->columns[ 'id' ] = new RuntimeColumn('id',array( 
      'locales' => NULL,
      'attributes' => array( 
          'autoIncrement' => true,
          'renderAs' => 'HiddenInput',
          'widgetAttributes' => array( 
            ),
        ),
      'name' => 'id',
      'primary' => true,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => true,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'autoIncrement' => true,
      'renderAs' => 'HiddenInput',
      'widgetAttributes' => array( 
        ),
    ));
        $this->columns[ 'name' ] = new RuntimeColumn('name',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 128,
          'label' => '類別名稱',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'placeholder' => '首頁橫幅',
            ),
        ),
      'name' => 'name',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 128,
      'label' => '類別名稱',
      'renderAs' => 'TextInput',
      'widgetAttributes' => array( 
          'placeholder' => '首頁橫幅',
        ),
    ));
        $this->columns[ 'handle' ] = new RuntimeColumn('handle',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 64,
          'required' => true,
          'label' => '程式標記',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'placeholder' => 'main-page',
            ),
        ),
      'name' => 'handle',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => true,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 64,
      'required' => true,
      'label' => '程式標記',
      'renderAs' => 'TextInput',
      'widgetAttributes' => array( 
          'placeholder' => 'main-page',
        ),
    ));
        $this->columns[ 'description' ] = new RuntimeColumn('description',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 1024,
          'label' => '敘述',
          'renderAs' => 'TextareaInput',
          'widgetAttributes' => array( 
            ),
        ),
      'name' => 'description',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 1024,
      'label' => '敘述',
      'renderAs' => 'TextareaInput',
      'widgetAttributes' => array( 
        ),
    ));
        $this->columns[ 'width' ] = new RuntimeColumn('width',array( 
      'locales' => NULL,
      'attributes' => array( 
          'label' => '寬度',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'size' => 4,
            ),
          'hint' => '以 pixel (px) 為單位',
        ),
      'name' => 'width',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'label' => '寬度',
      'renderAs' => 'TextInput',
      'widgetAttributes' => array( 
          'size' => 4,
        ),
      'hint' => '以 pixel (px) 為單位',
    ));
        $this->columns[ 'height' ] = new RuntimeColumn('height',array( 
      'locales' => NULL,
      'attributes' => array( 
          'label' => '高度',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'size' => 4,
            ),
          'hint' => '以 pixel (px) 為單位',
        ),
      'name' => 'height',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'label' => '高度',
      'renderAs' => 'TextInput',
      'widgetAttributes' => array( 
          'size' => 4,
        ),
      'hint' => '以 pixel (px) 為單位',
    ));
        $this->columns[ 'remark' ] = new RuntimeColumn('remark',array( 
      'locales' => NULL,
      'attributes' => array( 
          'label' => '備註',
          'renderAs' => 'TextareaInput',
          'widgetAttributes' => array( 
            ),
        ),
      'name' => 'remark',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'text',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'label' => '備註',
      'renderAs' => 'TextareaInput',
      'widgetAttributes' => array( 
        ),
    ));
        $this->columns[ 'lang' ] = new RuntimeColumn('lang',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 12,
          'validValues' => function() {
                    return array_flip( kernel()->locale->available() );
                },
          'label' => '語言',
          'default' => function() {
                    $bundle = \I18N\I18N::getInstance();
                    if ($lang = $bundle->config('default_lang') ) {
                        return $lang;
                    }
                    return kernel()->locale->getDefault();
                },
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
              'allow_empty' => true,
            ),
        ),
      'name' => 'lang',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 12,
      'validValues' => function() {
                    return array_flip( kernel()->locale->available() );
                },
      'label' => '語言',
      'default' => function() {
                    $bundle = \I18N\I18N::getInstance();
                    if ($lang = $bundle->config('default_lang') ) {
                        return $lang;
                    }
                    return kernel()->locale->getDefault();
                },
      'renderAs' => 'SelectInput',
      'widgetAttributes' => array( 
          'allow_empty' => true,
        ),
    ));
        $this->columns[ 'created_on' ] = new RuntimeColumn('created_on',array( 
      'locales' => NULL,
      'attributes' => array( 
          'timezone' => true,
          'renderAs' => 'DateTimeInput',
          'widgetAttributes' => array( 
            ),
          'label' => '建立時間',
          'default' => function() {
                    return new \DateTime;
                },
        ),
      'name' => 'created_on',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'timestamp',
      'isa' => 'DateTime',
      'notNull' => false,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'timezone' => true,
      'renderAs' => 'DateTimeInput',
      'widgetAttributes' => array( 
        ),
      'label' => '建立時間',
      'default' => function() {
                    return new \DateTime;
                },
    ));
        $this->columns[ 'updated_on' ] = new RuntimeColumn('updated_on',array( 
      'locales' => NULL,
      'attributes' => array( 
          'timezone' => true,
          'renderAs' => 'DateTimeInput',
          'widgetAttributes' => array( 
            ),
          'default' => \SQLBuilder\Raw::__set_state(array( 
      'value' => 'CURRENT_TIMESTAMP',
    )),
          'onUpdate' => \SQLBuilder\Raw::__set_state(array( 
      'value' => 'CURRENT_TIMESTAMP',
    )),
          'label' => '更新時間',
        ),
      'name' => 'updated_on',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'timestamp',
      'isa' => 'DateTime',
      'notNull' => false,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => \SQLBuilder\Raw::__set_state(array( 
      'value' => 'CURRENT_TIMESTAMP',
    )),
      'timezone' => true,
      'renderAs' => 'DateTimeInput',
      'widgetAttributes' => array( 
        ),
      'default' => \SQLBuilder\Raw::__set_state(array( 
      'value' => 'CURRENT_TIMESTAMP',
    )),
      'label' => '更新時間',
    ));
        $this->columns[ 'created_by' ] = new RuntimeColumn('created_by',array( 
      'locales' => NULL,
      'attributes' => array( 
          'refer' => 'UserBundle\\Model\\User',
          'default' => function() {
                    if (isset($_SESSION)) {
                        return kernel()->currentUser->id;
                    }
                },
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
            ),
          'label' => '建立者',
        ),
      'name' => 'created_by',
      'primary' => NULL,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'refer' => 'UserBundle\\Model\\User',
      'default' => function() {
                    if (isset($_SESSION)) {
                        return kernel()->currentUser->id;
                    }
                },
      'renderAs' => 'SelectInput',
      'widgetAttributes' => array( 
        ),
      'label' => '建立者',
    ));
        $this->columns[ 'updated_by' ] = new RuntimeColumn('updated_by',array( 
      'locales' => NULL,
      'attributes' => array( 
          'refer' => 'UserBundle\\Model\\User',
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
      'name' => 'updated_by',
      'primary' => NULL,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'refer' => 'UserBundle\\Model\\User',
      'default' => function() {
                    if ( isset($_SESSION) ) {
                        return kernel()->currentUser->id;
                    }
                },
      'renderAs' => 'SelectInput',
      'widgetAttributes' => array( 
        ),
      'label' => '更新者',
    ));
    }
}
