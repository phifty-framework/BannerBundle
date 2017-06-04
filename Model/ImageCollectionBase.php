<?php
namespace BannerBundle\Model;
use Maghead\Runtime\Collection;
class ImageCollectionBase
    extends Collection
{
    const SCHEMA_PROXY_CLASS = 'BannerBundle\\Model\\ImageSchemaProxy';
    const MODEL_CLASS = 'BannerBundle\\Model\\Image';
    const TABLE = 'banner_images';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
}
