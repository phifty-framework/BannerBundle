<?php

namespace BannerBundle\Model;


use Maghead\Runtime\Model;
use Maghead\Schema\SchemaLoader;
use Maghead\Runtime\Result;
use Maghead\Runtime\Inflator;
use Magsql\Bind;
use Magsql\ArgumentArray;
use DateTime;
use Maghead\Runtime\ActionCreatorTrait;

class CategoryBase
    extends Model
{

    use ActionCreatorTrait;

    const SCHEMA_PROXY_CLASS = 'BannerBundle\\Model\\CategorySchemaProxy';

    const READ_SOURCE_ID = 'master';

    const WRITE_SOURCE_ID = 'master';

    const TABLE_ALIAS = 'm';

    const SCHEMA_CLASS = 'BannerBundle\\Model\\CategorySchema';

    const LABEL = 'Category';

    const MODEL_NAME = 'Category';

    const MODEL_NAMESPACE = 'BannerBundle\\Model';

    const MODEL_CLASS = 'BannerBundle\\Model\\Category';

    const REPO_CLASS = 'BannerBundle\\Model\\CategoryRepoBase';

    const COLLECTION_CLASS = 'BannerBundle\\Model\\CategoryCollection';

    const TABLE = 'banner_categories';

    const PRIMARY_KEY = 'id';

    const GLOBAL_PRIMARY_KEY = NULL;

    const LOCAL_PRIMARY_KEY = 'id';

    public static $column_names = array (
      0 => 'id',
      1 => 'name',
      2 => 'handle',
      3 => 'description',
      4 => 'width',
      5 => 'height',
      6 => 'remark',
      7 => 'lang',
      8 => 'updated_on',
      9 => 'created_on',
      10 => 'updated_by',
      11 => 'created_by',
    );

    public static $mixin_classes = array (
      0 => 'CommonBundle\\Model\\Mixin\\MetaSchema',
      1 => 'I18N\\Model\\Mixin\\I18NSchema',
    );

    protected $table = 'banner_categories';

    public $id;

    public $name;

    public $handle;

    public $description;

    public $width;

    public $height;

    public $remark;

    public $lang;

    public $updated_on;

    public $created_on;

    public $updated_by;

    public $created_by;

    public static function getSchema()
    {
        static $schema;
        if ($schema) {
           return $schema;
        }
        return $schema = new \BannerBundle\Model\CategorySchemaProxy;
    }

    public static function createRepo($write, $read)
    {
        return new \BannerBundle\Model\CategoryRepoBase($write, $read);
    }

    public function getKeyName()
    {
        return 'id';
    }

    public function getKey()
    {
        return $this->id;
    }

    public function hasKey()
    {
        return isset($this->id);
    }

    public function setKey($key)
    {
        return $this->id = $key;
    }

    public function removeLocalPrimaryKey()
    {
        $this->id = null;
    }

    public function getId()
    {
        return intval($this->id);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHandle()
    {
        return $this->handle;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getWidth()
    {
        return intval($this->width);
    }

    public function getHeight()
    {
        return intval($this->height);
    }

    public function getRemark()
    {
        return $this->remark;
    }

    public function getLang()
    {
        return $this->lang;
    }

    public function getUpdatedOn()
    {
        return Inflator::inflate($this->updated_on, 'DateTime');
    }

    public function getCreatedOn()
    {
        return Inflator::inflate($this->created_on, 'DateTime');
    }

    public function getUpdatedBy()
    {
        return intval($this->updated_by);
    }

    public function getCreatedBy()
    {
        return intval($this->created_by);
    }

    public function getAlterableData()
    {
        return ["id" => $this->id, "name" => $this->name, "handle" => $this->handle, "description" => $this->description, "width" => $this->width, "height" => $this->height, "remark" => $this->remark, "lang" => $this->lang, "updated_on" => $this->updated_on, "created_on" => $this->created_on, "updated_by" => $this->updated_by, "created_by" => $this->created_by];
    }

    public function getData()
    {
        return ["id" => $this->id, "name" => $this->name, "handle" => $this->handle, "description" => $this->description, "width" => $this->width, "height" => $this->height, "remark" => $this->remark, "lang" => $this->lang, "updated_on" => $this->updated_on, "created_on" => $this->created_on, "updated_by" => $this->updated_by, "created_by" => $this->created_by];
    }

    public function setData(array $data)
    {
        if (array_key_exists("id", $data)) { $this->id = $data["id"]; }
        if (array_key_exists("name", $data)) { $this->name = $data["name"]; }
        if (array_key_exists("handle", $data)) { $this->handle = $data["handle"]; }
        if (array_key_exists("description", $data)) { $this->description = $data["description"]; }
        if (array_key_exists("width", $data)) { $this->width = $data["width"]; }
        if (array_key_exists("height", $data)) { $this->height = $data["height"]; }
        if (array_key_exists("remark", $data)) { $this->remark = $data["remark"]; }
        if (array_key_exists("lang", $data)) { $this->lang = $data["lang"]; }
        if (array_key_exists("updated_on", $data)) { $this->updated_on = $data["updated_on"]; }
        if (array_key_exists("created_on", $data)) { $this->created_on = $data["created_on"]; }
        if (array_key_exists("updated_by", $data)) { $this->updated_by = $data["updated_by"]; }
        if (array_key_exists("created_by", $data)) { $this->created_by = $data["created_by"]; }
    }

    public function clear()
    {
        $this->id = NULL;
        $this->name = NULL;
        $this->handle = NULL;
        $this->description = NULL;
        $this->width = NULL;
        $this->height = NULL;
        $this->remark = NULL;
        $this->lang = NULL;
        $this->updated_on = NULL;
        $this->created_on = NULL;
        $this->updated_by = NULL;
        $this->created_by = NULL;
    }

    public function fetchCreatedBy()
    {
        return static::masterRepo()->fetchCreatedByOf($this);
    }

    public function fetchUpdatedBy()
    {
        return static::masterRepo()->fetchUpdatedByOf($this);
    }

    public function fetchImages()
    {
        return static::masterRepo()->fetchImagesOf($this);
    }

    public function getImages()
    {
        $collection = new \BannerBundle\Model\ImageCollection;
        $collection->where()->equal("category_id", $this->id);
        $collection->setPresetVars([ "category_id" => $this->id ]);
        return $collection;
    }
}
