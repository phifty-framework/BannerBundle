<?php

namespace BannerBundle\Model;


use Maghead\Runtime\Model;
use Maghead\Schema\SchemaLoader;
use Maghead\Runtime\Result;
use Maghead\Runtime\Inflator;
use Magsql\Bind;
use Magsql\ArgumentArray;
use DateTime;

class ImageBase
    extends Model
{

    const SCHEMA_PROXY_CLASS = 'BannerBundle\\Model\\ImageSchemaProxy';

    const READ_SOURCE_ID = 'master';

    const WRITE_SOURCE_ID = 'master';

    const TABLE_ALIAS = 'm';

    const SCHEMA_CLASS = 'BannerBundle\\Model\\ImageSchema';

    const LABEL = 'Image';

    const MODEL_NAME = 'Image';

    const MODEL_NAMESPACE = 'BannerBundle\\Model';

    const MODEL_CLASS = 'BannerBundle\\Model\\Image';

    const REPO_CLASS = 'BannerBundle\\Model\\ImageRepoBase';

    const COLLECTION_CLASS = 'BannerBundle\\Model\\ImageCollection';

    const TABLE = 'banner_images';

    const PRIMARY_KEY = 'id';

    const GLOBAL_PRIMARY_KEY = NULL;

    const LOCAL_PRIMARY_KEY = 'id';

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

    public static $mixin_classes = array (
      0 => 'CommonBundle\\Model\\Mixin\\MetaSchema',
      1 => 'CommonBundle\\Model\\Mixin\\OrderingSchema',
    );

    protected $table = 'banner_images';

    public $id;

    public $image;

    public $thumb;

    public $title;

    public $subtitle;

    public $link;

    public $comment;

    public $category_id;

    public $ordering;

    public $created_on;

    public $updated_on;

    public $created_by;

    public $updated_by;

    public static function getSchema()
    {
        static $schema;
        if ($schema) {
           return $schema;
        }
        return $schema = new \BannerBundle\Model\ImageSchemaProxy;
    }

    public static function createRepo($write, $read)
    {
        return new \BannerBundle\Model\ImageRepoBase($write, $read);
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

    public function getImage()
    {
        return $this->image;
    }

    public function getThumb()
    {
        return $this->thumb;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getSubtitle()
    {
        return $this->subtitle;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getCategoryId()
    {
        return intval($this->category_id);
    }

    public function getOrdering()
    {
        return intval($this->ordering);
    }

    public function getCreatedOn()
    {
        return Inflator::inflate($this->created_on, 'DateTime');
    }

    public function getUpdatedOn()
    {
        return Inflator::inflate($this->updated_on, 'DateTime');
    }

    public function getCreatedBy()
    {
        return intval($this->created_by);
    }

    public function getUpdatedBy()
    {
        return intval($this->updated_by);
    }

    public function getAlterableData()
    {
        return ["id" => $this->id, "image" => $this->image, "thumb" => $this->thumb, "title" => $this->title, "subtitle" => $this->subtitle, "link" => $this->link, "comment" => $this->comment, "category_id" => $this->category_id, "ordering" => $this->ordering, "created_on" => $this->created_on, "updated_on" => $this->updated_on, "created_by" => $this->created_by, "updated_by" => $this->updated_by];
    }

    public function getData()
    {
        return ["id" => $this->id, "image" => $this->image, "thumb" => $this->thumb, "title" => $this->title, "subtitle" => $this->subtitle, "link" => $this->link, "comment" => $this->comment, "category_id" => $this->category_id, "ordering" => $this->ordering, "created_on" => $this->created_on, "updated_on" => $this->updated_on, "created_by" => $this->created_by, "updated_by" => $this->updated_by];
    }

    public function setData(array $data)
    {
        if (array_key_exists("id", $data)) { $this->id = $data["id"]; }
        if (array_key_exists("image", $data)) { $this->image = $data["image"]; }
        if (array_key_exists("thumb", $data)) { $this->thumb = $data["thumb"]; }
        if (array_key_exists("title", $data)) { $this->title = $data["title"]; }
        if (array_key_exists("subtitle", $data)) { $this->subtitle = $data["subtitle"]; }
        if (array_key_exists("link", $data)) { $this->link = $data["link"]; }
        if (array_key_exists("comment", $data)) { $this->comment = $data["comment"]; }
        if (array_key_exists("category_id", $data)) { $this->category_id = $data["category_id"]; }
        if (array_key_exists("ordering", $data)) { $this->ordering = $data["ordering"]; }
        if (array_key_exists("created_on", $data)) { $this->created_on = $data["created_on"]; }
        if (array_key_exists("updated_on", $data)) { $this->updated_on = $data["updated_on"]; }
        if (array_key_exists("created_by", $data)) { $this->created_by = $data["created_by"]; }
        if (array_key_exists("updated_by", $data)) { $this->updated_by = $data["updated_by"]; }
    }

    public function clear()
    {
        $this->id = NULL;
        $this->image = NULL;
        $this->thumb = NULL;
        $this->title = NULL;
        $this->subtitle = NULL;
        $this->link = NULL;
        $this->comment = NULL;
        $this->category_id = NULL;
        $this->ordering = NULL;
        $this->created_on = NULL;
        $this->updated_on = NULL;
        $this->created_by = NULL;
        $this->updated_by = NULL;
    }

    public function fetchCreatedBy()
    {
        return static::masterRepo()->fetchCreatedByOf($this);
    }

    public function fetchUpdatedBy()
    {
        return static::masterRepo()->fetchUpdatedByOf($this);
    }

    public function fetchCategory()
    {
        return static::masterRepo()->fetchCategoryOf($this);
    }
}
