<?php
namespace BannerBundle\Action;
use WebAction\MixinAction;

class ImageMixinAction extends MixinAction
{
    public function preinit()
    {
        $this->nested = true;
    }

    public function schema()
    {
        $this->useRecordSchema();

        $bundle = kernel()->bundle('BannerBundle');

        $thumbSize        = $bundle->config('BannerImage.thumb.size');
        $thumbDisplaySize = $bundle->config('BannerImage.thumb.display_size');
        $thumbSizeLimit   = $bundle->config('BannerImage.thumb.size_limit');
        $thumbResizeWidth = $bundle->config('BannerImage.thumb.resize_width') ?: 0;

        $imageSize        = $bundle->config('BannerImage.image.size');
        $imageDisplaySize = $bundle->config('BannerImage.image.display_size');
        $imageSizeLimit   = $bundle->config('BannerImage.image.size_limit');
        $imageResizeWidth = $bundle->config('BannerImage.image.resize_width') ?: 0;

        $uploadDir            = $bundle->config('upload_dir') ?: 'upload';
        $autoResize           = $bundle->config('auto_resize') ?: false;

        $this->replaceParam('image', 'Image')
            ->size($imageSize)
            ->displaySize($imageDisplaySize)
            ->sizeLimit($imageSizeLimit)
            ->autoResize($autoResize)
            ->resizeWidth($imageResizeWidth)
            ->hint($bundle->config('BannerImage.cover_thumb.hint'))
            ->hintFromSizeInfo()
            ->label('主圖')
            ;

        $this->replaceParam('thumb' , 'Image')
            ->size($thumbSize)
            ->displaySize($thumbDisplaySize)
            ->sizeLimit($thumbSizeLimit)
            ->autoResize($autoResize)
            ->resizeWidth($thumbResizeWidth)
            ->sourceField('image')
            ->hint($bundle->config('BannerImage.thumb.hint'))
            ->hintFromSizeInfo()
            ->label('縮圖')
            ;

    }
}
