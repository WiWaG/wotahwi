<?php

return [

    // List of all permissions
    'permissions' => [
        'room-create',
        'room-edit',
        'room-delete',
        'reservation-list',
        'reservation-show',
        'reservation-create',
        'reservation-edit',
        'reservation-delete',
        'user-list',
        'user-show',
        'user-edit',
        'user-delete',
    ],

    //List of all roles with according permissions. "super-admin" has all permissions assigned implicitly.
    'roles' => [
        'super-admin' => [],
        'admin' => [
            'room-create',
            'room-edit',
            'room-delete',
            'reservation-list',
            'reservation-show',
            'reservation-create',
            'reservation-edit',
            'reservation-delete',
            'user-list',
            'user-show',
        ],
        'user' => [
            'reservation-show',
            'reservation-create',
            'user-show',
            'user-edit',
            'user-delete',
        ]
    ]
];
