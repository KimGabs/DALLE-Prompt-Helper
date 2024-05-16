<?php

return [
    'items' => [
        [
            'label' => 'helper',
            'route' => 'helper',
            'roles' => ['guest', 'user', 'admin'],
        ],
        [
            'label' => 'Resources',
            'route' => 'resources',
            'roles' => ['guest', 'user', 'admin'],
        ],
        [
            'label' => 'Contact',
            'route' => 'contact',
            'roles' => ['guest', 'user', 'admin'],
        ],
        [
            'label' => 'Dashboard',
            'route' => 'dashboard',
            'roles' => ['user', 'admin'],
        ],
    ],
];
