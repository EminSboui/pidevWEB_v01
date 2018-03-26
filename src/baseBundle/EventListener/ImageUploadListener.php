<?php
/**
 * Created by PhpStorm.
 * User: Abdelkader
 * Date: 16/02/2018
 * Time: 10:54
 */

namespace baseBundle\EventListener;

use baseBundle\ImageUploadUser;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use baseBundle\Entity\User;


class ImageUploadListener
{
    private $uploader;

    public function __construct(ImageUploadUser $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    private function uploadFile($entity)
    {
        // upload only works for Product entities
        if (!$entity instanceof User) {
            return;
        }

        $file = $entity->getPicture();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setPicture($fileName);
    }
}