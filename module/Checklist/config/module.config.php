<?php

namespace Checklist;


return array(
    'router' => array(
        'routes' => array(
          'default' => array(
              'type' => 'Zend\Mvc\Router\Http\Literal',
              'options'=> array(
                  'route' => '/task',
                  'defaults' => array(
                      '__NAMESPACE__' => 'Checklist\Controller',
                      'controller'    => 'Index',
                      'action'        => 'index',
                  ),
                  'constraints' => [
                      'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                      'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                  ]
              )
          ),
        ),

    ),
    'controllers' => array(
        'invokables' => array(
            'Checklist\Controller\Index' => Controller\IndexController::class
        ),
    ),
);

/*'controller'    => 'Checklist\Controller\TaskController',*/