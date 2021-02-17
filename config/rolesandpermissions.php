<?php

return [
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
