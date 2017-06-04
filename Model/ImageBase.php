<?php
namespace BannerBundle\Model;
use Maghead\Schema\DeclareSchema\SchemaLoader;
use Maghead\Result;
use SQLBuilder\Bind;
use SQLBuilder\ArgumentArray;
use PDO;
use SQLBuilder\Universal\Query\InsertQuery;
use Maghead\Runtime\Model;
class ImageBase
    extends Model
{
    const SCHEMA_CLASS = 'BannerBundle\\Model\\ImageSchema';
    const SCHEMA_PROXY_CLASS = 'BannerBundle\\Model\\ImageSchemaProxy';
    const COLLECTION_CLASS = 'BannerBundle\\Model\\ImageCollection';
    const MODEL_CLASS = 'BannerBundle\\Model\\Image';
    const TABLE = 'banner_images';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
    const FIND_BY_PRIMARY_KEY_SQL = 'SELECT * FROM banner_images WHERE id = :id LIMIT 1';
    public static $column_names = array (
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
    protected $table = 'banner_images';
    public $readSourceId = 'default';
    public $writeSourceId = 'default';
    public function getSchema()
    {
        if ($this->_schema) {
           return $this->_schema;
        }
        return $this->_schema = SchemaLoader::load('BannerBundle\\Model\\ImageSchemaProxy');
    }
    public function getId()
    {
            return $this->get('id');
    }
    public function getImage()
    {
            return $this->get('image');
    }
    public function getThumb()
    {
            return $this->get('thumb');
    }
    public function getTitle()
    {
            return $this->get('title');
    }
    public function getSubtitle()
    {
            return $this->get('subtitle');
    }
    public function getLink()
    {
            return $this->get('link');
    }
    public function getComment()
    {
            return $this->get('comment');
    }
    public function getCategoryId()
    {
            return $this->get('category_id');
    }
    public function getOrdering()
    {
            return $this->get('ordering');
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
