<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['sch_Schools']['fields']['country'] = array(
    'name'              => 'country',
    'type'              => 'enum',
    'help'              => 'Enum Field Help Text',
    'comment'           => 'Enum Field Comment Text',
    'options'           => 'sch_schools_country_dom',
    'default'           => 'Pakistan',
    'vname'             => 'LBL_COUNTRY'
);


$dictionary['sch_Schools']['fields']['city'] = array(
    'name'          => 'city',
    'type'          => 'enum',
    'help'          => 'Enum Field Help Text',
    'comment'       => 'Enum Field Comment Text',
    'default'           => 'None',
    'options'       => 'sch_schools_city_dom',
    'vname'         => 'LBL_CITY',   
    'visibility_grid'   =>  array (
        'trigger' => 'country',
        'values' => array (
          'Pakistan' => 
            array (
                0 => 'Lahore',
                1 => 'Karachi',
                2 => 'Quetta',
                3 => 'Peshawar',
            ),
          'USA' => 
            array (
              0 => 'Minesota',
              1 => 'Utah',
              2 => 'New York',
              3 => 'San Francisco',
            ),
        )
    )  
);