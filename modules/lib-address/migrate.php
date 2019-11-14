<?php

return [
    'LibAddress\\Model\\AddrCity' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'state' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false 
                ],
                'index' => 2000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => false
                ],
                'index' => 3000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 9000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ]
        ],
        'indexes' => [
            'by_state_name' => [
                'fields' => [
                    'state' => [],
                    'name' => []
                ]
            ]
        ]
    ],
    'LibAddress\\Model\\AddrCountry' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => false
                ],
                'index' => 3000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 9000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ]
        ],
        'indexes' => [
            'by_name' => [
                'fields' => [
                    'name' => []
                ]
            ]
        ],
        'data' => [
            'name' => [
                'Indonesia' => [ 'id' => 1 ]
            ]
        ]
    ],
    'LibAddress\\Model\\AddrDistrict' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'city' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false 
                ],
                'index' => 2000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => false
                ],
                'index' => 3000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 9000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ]
        ],
        'indexes' => [
            'by_city_name' => [
                'fields' => [
                    'city' => [],
                    'name' => []
                ]
            ]
        ]
    ],
    'LibAddress\\Model\\AddrState' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'country' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false 
                ],
                'index' => 2000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => false
                ],
                'index' => 3000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 9000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ]
        ],
        'indexes' => [
            'by_country_name' => [
                'fields' => [
                    'country' => [],
                    'name' => []
                ]
            ]
        ],
        'data' => [
            'name' => [
                'Aceh'                      => ['country' => 1, 'id' => 1],
                'Banten'                    => ['country' => 1, 'id' => 2],
                'Bengkulu'                  => ['country' => 1, 'id' => 3],
                'Gorontalo'                 => ['country' => 1, 'id' => 4],
                'Jakarta'                   => ['country' => 1, 'id' => 5],
                'Jambi'                     => ['country' => 1, 'id' => 6],
                'Jawa Barat'                => ['country' => 1, 'id' => 7],
                'Jawa Tengah'               => ['country' => 1, 'id' => 8],
                'Jawa Timur'                => ['country' => 1, 'id' => 9],
                'Kalimantan Barat'          => ['country' => 1, 'id' => 10],
                'Kalimantan Selatan'        => ['country' => 1, 'id' => 11],
                'Kalimantan Tengah'         => ['country' => 1, 'id' => 12],
                'Kalimantan Timur'          => ['country' => 1, 'id' => 13],
                'Kalimantan Utara'          => ['country' => 1, 'id' => 14],
                'Kepulauan Bangka Belitung' => ['country' => 1, 'id' => 15],
                'Kepulauan Riau'            => ['country' => 1, 'id' => 16],
                'Lampung'                   => ['country' => 1, 'id' => 17],
                'Maluku'                    => ['country' => 1, 'id' => 18],
                'Maluku Utara'              => ['country' => 1, 'id' => 19],
                'Bali'                      => ['country' => 1, 'id' => 20],
                'Nusa Tenggara Barat'       => ['country' => 1, 'id' => 21],
                'Nusa Tenggara Timur'       => ['country' => 1, 'id' => 22],
                'Papua'                     => ['country' => 1, 'id' => 23],
                'Papua Barat'               => ['country' => 1, 'id' => 24],
                'Riau'                      => ['country' => 1, 'id' => 25],
                'Sulawesi Barat'            => ['country' => 1, 'id' => 26],
                'Sulawesi Selatan'          => ['country' => 1, 'id' => 27],
                'Sulawesi Tengah'           => ['country' => 1, 'id' => 28],
                'Sulawesi Tenggara'         => ['country' => 1, 'id' => 29],
                'Sulawesi Utara'            => ['country' => 1, 'id' => 30],
                'Sumatra Barat'             => ['country' => 1, 'id' => 31],
                'Sumatra Selatan'           => ['country' => 1, 'id' => 32],
                'Sumatra Utara'             => ['country' => 1, 'id' => 33],
                'Yogyakarta'                => ['country' => 1, 'id' => 34]
            ]
        ]
    ],
    'LibAddress\\Model\\AddrVillage' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'district' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false 
                ],
                'index' => 2000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => false
                ],
                'index' => 3000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 9000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ]
        ],
        'indexes' => [
            'by_district_name' => [
                'fields' => [
                    'district' => [],
                    'name' => []
                ]
            ]
        ]
    ],
    'LibAddress\\Model\\AddrZipcode' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'village' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false 
                ],
                'index' => 2000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 10,
                'attrs' => [
                    'null' => false
                ],
                'index' => 3000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 9000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ]
        ],
        'indexes' => [
            'by_village_name' => [
                'fields' => [
                    'village' => [],
                    'name' => []
                ]
            ]
        ]
    ]
];