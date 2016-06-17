<?php
namespace BannerBundle\Model;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\RuntimeColumn;
use LazyRecord\Schema\Relationship;
class ImageSchemaProxy
    extends RuntimeSchema
{
    const schema_class = 'BannerBundle\\Model\\ImageSchema';
    const model_name = 'Image';
    const model_namespace = 'BannerBundle\\Model';
    const COLLECTION_CLASS = 'BannerBundle\\Model\\ImageCollection';
    const MODEL_CLASS = 'BannerBundle\\Model\\Image';
    const PRIMARY_KEY = 'id';
    const TABLE = 'banner_images';
    const LABEL = 'Image';
    public static $column_hash = array (
      'id' => 1,
      'image' => 1,
      'thumb' => 1,
      'title' => 1,
      'subtitle' => 1,
      'link' => 1,
      'comment' => 1,
      'category_id' => 1,
      'ordering' => 1,
      'created_on' => 1,
      'updated_on' => 1,
      'created_by' => 1,
      'updated_by' => 1,
    );
    public static $mixin_classes = array (
      0 => 'CommonBundle\\Model\\Mixin\\MetaSchema',
      1 => 'SortablePlugin\\Model\\Mixin\\OrderingSchema',
    );
    public $columnNames = array (
      0 => 'id',
      1 => 'image',
      2 => 'thumb',
      3 => 'title',
      4 => 'subtitle',
      5 => 'link',
      6 => 'comment',
      7 => 'category_id',
      8 => 'ordering',
      9 => 'created_on',
      10 => 'updated_on',
      11 => 'created_by',
      12 => 'updated_by',
    );
    public $primaryKey = 'id';
    public $columnNamesIncludeVirtual = array (
      0 => 'id',
      1 => 'image',
      2 => 'thumb',
      3 => 'title',
      4 => 'subtitle',
      5 => 'link',
      6 => 'comment',
      7 => 'category_id',
      8 => 'ordering',
      9 => 'created_on',
      10 => 'updated_on',
      11 => 'created_by',
      12 => 'updated_by',
    );
    public $label = 'Image';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public $relations;
    public function __construct()
    {
        $this->relations = array( 
      'created_by' => \LazyRecord\Schema\Relationship::__set_state(array( 
      'data' => array( 
          'type' => 3,
          'self_schema' => 'BannerBundle\\Model\\ImageSchema',
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
          'self_schema' => 'BannerBundle\\Model\\ImageSchema',
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
      'category' => \LazyRecord\Schema\Relationship::__set_state(array( 
      'data' => array( 
          'type' => 3,
          'self_schema' => 'BannerBundle\\Model\\ImageSchema',
          'self_column' => 'category_id',
          'foreign_schema' => 'BannerBundle\\Model\\CategorySchema',
          'foreign_column' => 'id',
        ),
      'accessor' => 'category',
      'where' => NULL,
      'orderBy' => array( 
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
        $this->columns[ 'image' ] = new RuntimeColumn('image',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 256,
          'contentType' => 'ImageFile',
          'label' => '大圖',
        ),
      'name' => 'image',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 256,
      'contentType' => 'ImageFile',
      'label' => '大圖',
    ));
        $this->columns[ 'thumb' ] = new RuntimeColumn('thumb',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 256,
          'contentType' => 'ImageFile',
          'label' => '縮圖',
        ),
      'name' => 'thumb',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 256,
      'contentType' => 'ImageFile',
      'label' => '縮圖',
    ));
        $this->columns[ 'title' ] = new RuntimeColumn('title',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 200,
          'label' => '標題',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'size' => 50,
            ),
          'hint' => '可選輸入。若輸入可幫助搜尋引擎索引結果。',
        ),
      'name' => 'title',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 200,
      'label' => '標題',
      'renderAs' => 'TextInput',
      'widgetAttributes' => array( 
          'size' => 50,
        ),
      'hint' => '可選輸入。若輸入可幫助搜尋引擎索引結果。',
    ));
        $this->columns[ 'subtitle' ] = new RuntimeColumn('subtitle',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 512,
          'label' => '副標題',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'size' => 60,
            ),
          'hint' => '可選輸入。若輸入可幫助搜尋引擎索引結果。',
        ),
      'name' => 'subtitle',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 512,
      'label' => '副標題',
      'renderAs' => 'TextInput',
      'widgetAttributes' => array( 
          'size' => 60,
        ),
      'hint' => '可選輸入。若輸入可幫助搜尋引擎索引結果。',
    ));
        $this->columns[ 'link' ] = new RuntimeColumn('link',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 512,
          'label' => '網址連結',
          'renderAs' => 'TextInput',
          'widgetAttributes' => array( 
              'size' => 70,
              'placeholder' => 'http://....',
            ),
          'hint' => '點擊圖片時，打開的新網址',
        ),
      'name' => 'link',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 512,
      'label' => '網址連結',
      'renderAs' => 'TextInput',
      'widgetAttributes' => array( 
          'size' => 70,
          'placeholder' => 'http://....',
        ),
      'hint' => '點擊圖片時，打開的新網址',
    ));
        $this->columns[ 'comment' ] = new RuntimeColumn('comment',array( 
      'locales' => NULL,
      'attributes' => array( 
          'label' => '註解',
          'renderAs' => 'TextareaInput',
          'widgetAttributes' => array( 
              'rows' => 3,
              'cols' => 50,
            ),
        ),
      'name' => 'comment',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'text',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'label' => '註解',
      'renderAs' => 'TextareaInput',
      'widgetAttributes' => array( 
          'rows' => 3,
          'cols' => 50,
        ),
    ));
        $this->columns[ 'category_id' ] = new RuntimeColumn('category_id',array( 
      'locales' => NULL,
      'attributes' => array( 
          'refer' => 'BannerBundle\\Model\\CategorySchema',
          'renderAs' => 'SelectInput',
          'widgetAttributes' => array( 
              'allow_empty' => true,
            ),
          'label' => '橫幅類別',
        ),
      'name' => 'category_id',
      'primary' => NULL,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'refer' => 'BannerBundle\\Model\\CategorySchema',
      'renderAs' => 'SelectInput',
      'widgetAttributes' => array( 
          'allow_empty' => true,
        ),
      'label' => '橫幅類別',
    ));
        $this->columns[ 'ordering' ] = new RuntimeColumn('ordering',array( 
      'locales' => NULL,
      'attributes' => array( 
          'default' => 0,
          'renderAs' => 'HiddenInput',
          'widgetAttributes' => array( 
            ),
          'label' => '排序編號',
        ),
      'name' => 'ordering',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'default' => 0,
      'renderAs' => 'HiddenInput',
      'widgetAttributes' => array( 
        ),
      'label' => '排序編號',
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
