<?php
namespace BannerSlider\Model;
use LazyRecord\Schema\SchemaDeclare;

class CategorySchema extends SchemaDeclare
{
    public function schema()
    {
        $this->table('banner_categories');

        $this->column('handle')
            ->varchar(64)
            ->required(true)
            ->label('程式標記');

        $this->column('name')
            ->varchar(128)
            ->label('類別名稱');

        $this->column('description')
            ->varchar(1024)
            ->label(_('Description'))
            ->renderAs('TextareaInput')
            ;

        $this->column('width')
            ->integer()
            ->label('寬度')
            ->renderAs('TextInput',array('size' => 4))
            ->hint('以 pixel (px) 為單位')
            ;

        $this->column('height')
            ->integer()
            ->label('高度')
            ->renderAs('TextInput',array('size' => 4))
            ->hint('以 pixel (px) 為單位')
            ;

        $this->mixin('I18N\\Model\\Mixin\\I18NSchema');
        $this->mixin('CommonBundle\\Model\\Mixin\\MetaSchema');

        $this->many('images','BannerSlider\\Model\\ImageSchema','category_id','id')
            ->order('ordering','asc');
    }

    public function dataLabel()
    {
        return sprintf( '%s (%s)', $this->name , $this->handle );
    }
}

