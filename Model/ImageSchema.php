<?php

namespace BannerBundle\Model;

use Maghead\Schema\DeclareSchema;

class ImageSchema extends DeclareSchema
{
    public $table = 'banner_images';

    public function schema()
    {
        $this->column('image')
            ->varchar(256)
            ->contentType('ImageFile')
            ->label( _('大圖') );

        $this->column('thumb')
            ->varchar(256)
            ->contentType('ImageFile')
            ->label( _('縮圖') );

        $this->column('title')
            ->varchar(200)
            ->label( _('Title') )
            ->renderAs('TextInput',array( 'size' => 50 ))
            ->hint( _('可選輸入。若輸入可幫助搜尋引擎索引結果。') )
            ;

        $this->column('subtitle')
            ->varchar(512)
            ->label( _('Subtitle') )
            ->renderAs('TextInput',array( 'size' => 60 ))
            ->hint( _('可選輸入。若輸入可幫助搜尋引擎索引結果。') )
            ;

        $this->column('link')
            ->varchar(512)
            ->label( _('網址連結') )
            ->renderAs('TextInput',array( 'size' => 70, 'placeholder' => 'http://....' ))
            ->hint( _('點擊圖片時，打開的新網址') )
            ;

        $this->column('comment')
            ->text()
            ->label( _('註解') )
            ->renderAs('TextareaInput',array( 'rows' => 3, 'cols' => 50 ))
            ;

        $this->column('category_id')
            ->integer()
            ->unsigned()
            ->refer('BannerBundle\\Model\\CategorySchema')
            ->renderAs('SelectInput', [ 'allow_empty' => true ])
            ->label(_('橫幅類別'));

        $this->mixin(\CommonBundle\Model\Mixin\OrderingSchema::class);
        $this->mixin(\CommonBundle\Model\Mixin\MetaSchema::class);
        $this->belongsTo('category', 'BannerBundle\\Model\\CategorySchema' , 'id' , 'category_id' );
    }
}

