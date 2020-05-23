<?php

namespace Blog;

use Blog\Controller\BlogController;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/blog',
                    'defaults' => array(
                        'controller' => BlogController::class,
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            BlogController::class => BlogController::class
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'service_manager' => array(
        'services' => array(/*'categories' => array(
                'PHP',
                'Zend Framework',
                'Symfony',
                'Laravel'
            )*/
        ),
        'invokables' => [
            /*Categories::class => Categories::class*/
        ],
        'factories' => [
            Categories::class => CategoriesFactory::class
        ]
    )
);