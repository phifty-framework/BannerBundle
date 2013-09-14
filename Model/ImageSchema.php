<?php
namespace BannerSlider\Model;
use LazyRecord\Schema\SchemaDeclare;

class ImageSchema extends SchemaDeclare
{
    public $table = 'banner_images';

    function schema()
    {
        $this->column('image')
            ->varchar(256)
            ->label( _('Image') );

        $this->column('thumb')
            ->varchar(256)
            ->label( _('Thumb Image') );

        $this->column('title')
            ->varchar(200)
            ->label( _('Title') )
            ->renderAs('TextInput',array( 'size' => 50 ))
            ;

        $this->column('subtitle')
            ->varchar(512)
            ->label( _('Subtitle') )
            ->renderAs('TextInput',array( 'size' => 60 ))
            ;

        $this->column('link')
            ->varchar(512)
            ->label( _('Link') )
            ->renderAs('TextInput',array( 'size' => 70 ))
            ;

        $this->column('category_id')
            ->integer()
            ->refer('BannerSlider\Model\Category')
            ->renderAs('SelectInput')
            ->label( _('Banner Category') );

        $this->column('ordering')
            ->integer()
            ->default(0)
            ->renderAs('HiddenInput')
            ;

        $this->mixin('Phifty\\Model\\Mixin\\MetadataSchema');

        /** self accessor , ( foreign schema, column ) , self column ) **/
        $this->belongsTo('category', 'BannerSlider\\Model\\CategorySchema' , 'id' , 'category_id' );
    }
}

