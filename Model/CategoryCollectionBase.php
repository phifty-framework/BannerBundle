<?php
namespace BannerBundle\Model;
use Maghead\Runtime\Collection;
class CategoryCollectionBase
    extends Collection
{
    const SCHEMA_PROXY_CLASS = 'BannerBundle\\Model\\CategorySchemaProxy';
    const MODEL_CLASS = 'BannerBundle\\Model\\Category';
    const TABLE = 'banner_categories';
    const READ_SOURCE_ID = 'default';
    const WRITE_SOURCE_ID = 'default';
    const PRIMARY_KEY = 'id';
}
