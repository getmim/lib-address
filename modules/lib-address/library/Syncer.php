<?php
/**
 * Syncer
 * @package lib-address
 * @version 0.2.0
 */

namespace LibAddress\Library;

class Syncer
{
	static function sync(array $body): void{
		$config = [
			'country' => ['AddrCountry',  null       ],
			'state'   => ['AddrState',    'country', ],
			'city'    => ['AddrCity',     'state',   ],
			'district'=> ['AddrDistrict', 'city',    ],
			'village' => ['AddrVillage',  'district',],
			'zipcode' => ['AddrZipcode',  'village', ],
		];

		foreach($body as $fld => $opt){
			if(!isset($config[$fld]))
				continue;

			$conf   = $config[$fld];

			$parent = null;

			$obj_model = 'LibAddress\\Model\\' . $conf[0];
			$par_field = $conf[1];
			$par_conf  = $config[$par_field] ?? null;
			$par_model = $par_conf ? 'LibAddress\\Model\\' . $par_conf[0] : null;

			if($par_model){
				$obj_parent = $body[$par_field] ?? null;
				if(!$obj_parent)
					continue;

				$cond = [];
				$cond[$obj_parent[1]] = $obj_parent[0];
				$parent = $par_model::getOne($cond);
				if(!$parent)
					continue;
			}

			$cond = [];
			$cond[ $opt[1] ] = $opt[0];
			if($parent)
				$cond[$par_field] = $parent->id;

			$object = $obj_model::getOne($cond);
			if($object)
				continue;

			$obj_model::create($cond);
		}
	}
}