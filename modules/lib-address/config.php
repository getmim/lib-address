<?php

return [
    '__name' => 'lib-address',
    '__version' => '0.0.1',
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
            ]
        ],
        'files' => []
    ]
];