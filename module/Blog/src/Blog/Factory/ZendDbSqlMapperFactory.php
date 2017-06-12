<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 12.06.2017
 * Time: 19:19
 */

namespace Blog\Factory;

use Blog\Mapper\ZendDbSqlMapper;
use Blog\Model\Post;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;

class ZendDbSqlMapperFactory implements FactoryInterface
{
    /* Create service
    *
    * @param ServiceLocatorInterface $serviceLocator
    *
    * @return mixed
    */
        public function createService(ServiceLocatorInterface $serviceLocator)
        {
            return new ZendDbSqlMapper(
                $serviceLocator->get('Zend\Db\Adapter\Adapter'),
                new ClassMethods(false),
                new Post()
            );
        }
    }