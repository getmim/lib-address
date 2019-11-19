<?php

return [
    '__name' => 'lib-address',
    '__version' => '0.3.0',
    '__git' => 'git@github.com:getmim/lib-address.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-address' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibAddress\\Model' => [
                'type' => 'file',
                'base' => 'modules/lib-address/model'
            ],
            'LibAddress\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-address/library'
            ]
        ],
        'files' => []
    ],
    'admin' => [
        'objectFilter' => [
            'handlers' => [
                'addr-country' => 'LibAddress\\Library\\Filter',
                'addr-state' => 'LibAddress\\Library\\Filter',
                'addr-city' => 'LibAddress\\Library\\Filter',
                'addr-district' => 'LibAddress\\Library\\Filter',
                'addr-village' => 'LibAddress\\Library\\Filter',
                'addr-zip' => 'LibAddress\\Library\\Filter'
            ]
        ]
    ]
];
