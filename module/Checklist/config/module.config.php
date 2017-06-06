<?php

namespace Checklist;

return array(
    'router' => array(
        'routes' => array(
            'checklist' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/task',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Checklist\Controller',
                        'controller'    => 'Task',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                        ),
                    ),
                ),
            ),
        ),
    ),
);

/*'controller'    => 'Checklist\Controller\TaskController',*/