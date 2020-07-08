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