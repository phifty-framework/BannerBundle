<?php
namespace BannerBundle\Model;
use LazyRecord\Schema\SchemaLoader;
use LazyRecord\Result;
use SQLBuilder\Bind;
use SQLBuilder\ArgumentArray;
use PDO;
use SQLBuilder\Universal\Query\InsertQuery;
use LazyRecord\BaseModel;
class CategoryBase
    extends BaseModel
{
    const SCHEMA_CLASS = 'BannerBundle\\Model\\CategorySchema';
    const SCHEMA_PROXY_CLASS = 'BannerBundle\\Model\\CategorySchemaProxy';
    const COLLECTION_CLASS = 'BannerBundle\\Model\\CategoryCollection';
    const MODEL_CLASS = 'BannerBundle\\Model\\Category';
    const TABLE = 'banner_categories';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
    const FIND_BY_PRIMARY_KEY_SQL = 'SELECT * FROM banner_categories WHERE id = :id LIMIT 1';
    public static $column_names = array (
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
    protected $table = 'banner_categories';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public function getSchema()
    {
        if ($this->_schema) {
           return $this->_schema;
        }
        return $this->_schema = SchemaLoader::load('BannerBundle\\Model\\CategorySchemaProxy');
    }
    public function getId()
    {
            return $this->get('id');
    }
    public function getName()
    {
            return $this->get('name');
    }
    public function getHandle()
    {
            return $this->get('handle');
    }
    public function getDescription()
    {
            return $this->get('description');
    }
    public function getWidth()
    {
            return $this->get('width');
    }
    public function getHeight()
    {
            return $this->get('height');
    }
    public function getRemark()
    {
            return $this->get('remark');
    }
    public function getLang()
    {
            return $this->get('lang');
    }
    public function getCreatedOn()
    {
            return $this->get('created_on');
    }
    public function getUpdatedOn()
    {
            return $this->get('updated_on');
    }
    public function getCreatedBy()
    {
            return $this->get('created_by');
    }
    public function getUpdatedBy()
    {
            return $this->get('updated_by');
    }
}
