<?php

namespace Checklist;


return array(
    'router' => array(
        'routes' => array(
            'task' => array(
                'type' => 'Segment',
                'options'=> array(
                  'route' => '/task[/:action[/:id]]',
                  'defaults' => array(
                      '__NAMESPACE__' => 'Checklist\Controller',
                      'controller'    => 'Task',
                      'action'        => 'index',
                  ),
                  'constraints' => array(
                    'action'     => '(add|edit|delete)',
                    'id'       => '[0-9]+',
                  ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Checklist\Controller\Task' => Controller\TaskController::class
        ),
    ),

    'view_manager' => array(
        //load general template
        'template_map' => array(
            'layout/layout'   => __DIR__ . '/../view/layout/layout.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

);

/*'controller'    => 'Checklist\Controller\TaskController',*/