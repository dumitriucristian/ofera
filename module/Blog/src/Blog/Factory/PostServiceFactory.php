<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 12.06.2017
 * Time: 19:00
 */

namespace Blog\Factory;

use Blog\Service\PostService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;



class PostServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new PostService( $serviceLocator->get('Blog\Mapper\PostMapperInterface'));

    }
}