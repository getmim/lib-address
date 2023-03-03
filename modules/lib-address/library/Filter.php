<?php
/**
 * Filter
 * @package lib-address
 * @version 0.0.1
 */

namespace LibAddress\Library;

class Filter
{

    private static $last_error;

    static function filter(array $cond): ?array {
        $type = $cond['type'];
        $models = [
            'addr-country'  => ['AddrCountry',   NULL,          NULL       ],
            'addr-state'    => ['AddrState',    'AddrCountry',  'country'  ],
            'addr-city'     => ['AddrCity',     'AddrState',    'state'    ],
            'addr-district' => ['AddrDistrict', 'AddrCity',     'city'     ],
            'addr-village'  => ['AddrVillage',  'AddrDistrict', 'district' ],
            'addr-zip'      => ['AddrZipcode',  'AddrVillage',  'village'  ]
        ];

        if(!isset($models[$type]))
            return [];

        $models = $models[$type];

        $obj_model  = 'LibAddress\\Model\\' . $models[0];
        $par_model  = $models[1] ? 'LibAddress\\Model\\' . $models[1] : NULL;
        $par_field  = $models[2];

        $obj_cond   = [];

        if($par_model && isset($cond['parent']) && $cond['parent']){
            $par_cond       = [];
            $par_sel_field  = isset($cond['pfn']) ? 'name' : 'id';
            $par_cond[$par_sel_field] = $cond['parent'];

            $parent = $par_model::getOne($par_cond);
            if(!$parent)
                return [];

            $obj_cond[ $par_field ] = $parent->id;
        }

        if(isset($cond['q']))
            $obj_cond['name'] = ['__like', $cond['q']];

        $rpp = 15;
        if (isset($cond['rpp'])) {
            $rpp = (int)$cond['rpp'];
        }

        $objects = $obj_model::get($obj_cond, $rpp, 1, ['name'=>true]);
        if(!$objects)
            return [];
        
        $parents = [];

        if($par_model){
            $parents_id = [];
            foreach($objects as $object){
                if(!in_array($object->{$par_field}, $parents_id))
                    $parents_id[] = $object->{$par_field};
            }
            if($parents_id){
                $obj_parents = $par_model::get(['id'=>$parents_id]);
                if($obj_parents){
                    foreach($obj_parents as $par)
                        $parents[ $par->id ] = $par->name;
                }
            }
        }

        $result = [];
        foreach($objects as $object){
            $result[] = [
                'id'    => (int)$object->id,
                'label' => $object->name,
                'info'  => $par_field ? ($parents[$object->{$par_field}]) : ''
            ];
        }

        return $result;
    }

    static function lastError(): ?string {
        return self::$last_error;
    }
}
