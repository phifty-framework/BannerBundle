<?php

namespace BannerBundle\Model;


use Maghead\Runtime\Collection;

class ImageCollectionBase
    extends Collection
{

    const SCHEMA_PROXY_CLASS = 'BannerBundle\\Model\\ImageSchemaProxy';

    const MODEL_CLASS = 'BannerBundle\\Model\\Image';

    const TABLE = 'banner_images';

    const READ_SOURCE_ID = 'master';

    const WRITE_SOURCE_ID = 'master';

    const PRIMARY_KEY = 'id';

    public static function createRepo($write, $read)
    {
        return new \BannerBundle\Model\ImageRepoBase($write, $read);
    }

    public static function getSchema()
    {
        static $schema;
        if ($schema) {
           return $schema;
        }
        return $schema = new \BannerBundle\Model\ImageSchemaProxy;
    }
}
