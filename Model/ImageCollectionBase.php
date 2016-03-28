<?php
namespace BannerBundle\Model;
use LazyRecord\BaseCollection;
class ImageCollectionBase
    extends BaseCollection
{
    const SCHEMA_PROXY_CLASS = 'BannerBundle\\Model\\ImageSchemaProxy';
    const MODEL_CLASS = 'BannerBundle\\Model\\Image';
    const TABLE = 'banner_images';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
}
