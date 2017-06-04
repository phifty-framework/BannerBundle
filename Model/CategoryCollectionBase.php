<?php

namespace BannerBundle\Model;


use Maghead\Runtime\Collection;

class CategoryCollectionBase
    extends Collection
{

    const SCHEMA_PROXY_CLASS = 'BannerBundle\\Model\\CategorySchemaProxy';

    const MODEL_CLASS = 'BannerBundle\\Model\\Category';

    const TABLE = 'banner_categories';

    const READ_SOURCE_ID = 'master';

    const WRITE_SOURCE_ID = 'master';

    const PRIMARY_KEY = 'id';

    public static function createRepo($write, $read)
    {
        return new \BannerBundle\Model\CategoryRepoBase($write, $read);
    }

    public static function getSchema()
    {
        static $schema;
        if ($schema) {
           return $schema;
        }
        return $schema = new \BannerBundle\Model\CategorySchemaProxy;
    }
}
