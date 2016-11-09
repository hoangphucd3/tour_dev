<?php

namespace Application\Sonata\MediaBundle\Provider;

use Sonata\MediaBundle\Provider\FileProvider as BaseFileProvider;
use Sonata\MediaBundle\Model\MediaInterface;

class FileProvider extends BaseFileProvider
{
    /**
     * {@inheritdoc}
     *
     * @param MediaInterface $media
     */
    protected function generateReferenceName(MediaInterface $media)
    {
        return $media->getName();
    }
}