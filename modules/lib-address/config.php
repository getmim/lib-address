<?php

return [
    '__name' => 'lib-address',
    '__version' => '0.3.2',
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
            ],
            [
                'lib-formatter' => NULL
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
    ],
    'libFormatter' => [
        'formats' => [
            'addr-country' => [
                'id' => [
                    'type' => 'number'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'addr-state' => [
                'id' => [
                    'type' => 'number'
                ],
                'country' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrCountry',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-country'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'addr-city' => [
                'id' => [
                    'type' => 'number'
                ],
                'state' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrState',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-state'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'addr-district' => [
                'id' => [
                    'type' => 'number'
                ],
                'city' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrCity',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-city'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'addr-village' => [
                'id' => [
                    'type' => 'number'
                ],
                'district' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrDistrict',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-district'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'addr-zipcode' => [
                'id' => [
                    'type' => 'number'
                ],
                'village' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrVillage',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-village'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
