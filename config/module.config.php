<?php

/**
 * Author: Tom
 * Date: 5/21/14
 * Time: 3:18 PM
 */

return array(
    'controllers' => array(
        'invokables' => array(
            'Zf2Scaffolding\Controller\Index' => 'Zf2Scaffolding\Controller\IndexController'
        ),
    ),


    'service_manager' => array(

        'factories' => array(

        ),

        'initializers' => array(

        ),
    ),


    'view_manager' => array(
        'template_map' => array(
            'Zf2Scaffolding/index' => __DIR__ . '/../view/zf2Scaffolding/index.phtml',
        ),
    ),


    'router' => array(

        'routes' => array(

            'zf2Scaffolding' => array(

                'type' => 'Literal',
                'priority' => 1000,
                'options' => array(
                    'route' => '/scaffolding',
                    'defaults' => array(
                        'controller' => 'Zf2Scaffolding\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,

            ),
        ),
    ),
);