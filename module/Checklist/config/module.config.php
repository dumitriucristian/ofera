<?php

namespace Checklist;

return array(
    'router' => array(
        'routes' => array(
            'task' => array(
                'type'    => 'Segment',
                    'options' => array(
                        'route'    => '/task[/:action[/:id]]',
                        'defaults' => array(
                        '__NAMESPACE__' => 'Checklist\Controller',
                        'controller'    => 'TaskController',
                        'action'        => 'index',
                    ),
                    /*
                    'constraints' => array(
                        'action' => '(add|edit|delete)',
                        'id'     => '[0-9]+',
                    ),
                    */
                ),
            ),
        ),
    )
);

/*'controller'    => 'Checklist\Controller\TaskController',*/