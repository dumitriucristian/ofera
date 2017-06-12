<?php

//routes
return array(
    //register databases
    'db' => array(
        'driver'         => 'Pdo',
        'username'       => 'admin',  //edit this
        'password'       => 'admin',  //edit this
        'dsn'            => 'mysql:dbname=blog;host=localhost',
        'driver_options' => array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
    //register services
    'service_manager' => array(

        'factories' =>array(
            'Blog\Mapper\PostMapperInterface'   => 'Blog\Factory\ZendDbSqlMapperFactory',
            'Blog\Service\PostServiceInterface' => 'Blog\Factory\PostServiceFactory',
            'Zend\Db\Adapter\Adapter'           => 'Zend\Db\Adapter\AdapterServiceFactory'

        ),

        'invokables' => array(
        //    'Blog\Service\PostServiceInterface' => 'Blog\Service\PostService'
        ),
    ),
    //This inform the module where controller is
    'controllers' => array(
        //invokable is a class that can be constructed without any arguments.
       // 'invokables' => array(
       //     'Blog\Controller\List'/*alias*/ => 'Blog\Controller\ListController'/*controller*/
       // )
        //A factory is a class that creates instances of another class.
        'factories' => array(
            'Blog\Controller\List' => 'Blog\Factory\ListControllerFactory',

        ),
    ),

    //Inform Module where the view files are
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

    // This lines opens the configuration for the RouteManager
    'router' => array(
        // Open configuration for all possible routes
        'routes' => array(
            // Define a new route called "post"
            'post' => array(
                // Define the routes type to be "Zend\Mvc\Router\Http\Literal", which is basically just a string
                'type' => 'literal',
                // Configure the route itself
                'options' => array(
                    // Listen to "/blog" as uri
                    'route'    => '/blog',
                    // Define default controller and action to be called when this route is matched
                    'defaults' => array(
                        'controller' => 'Blog\Controller\List',
                        'action'     => 'index',
                    )
                )
            )
        )
    )
);