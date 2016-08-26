<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['sch_Students']['fields']['country'] = array(
    'name'              => 'country',
    'type'              => 'enum',
    'help'              => 'Enum Field Help Text',
    'comment'           => 'Enum Field Comment Text',
    'options'           => 'sch_schools_country_dom',
    'default'           => 'Pakistan',
    'vname'             => 'LBL_COUNTRY'
);


$dictionary['sch_Students']['fields']['city'] = array(
    'name'          => 'city',
    'type'          => 'enum',
    'help'          => 'Enum Field Help Text',
    'comment'       => 'Enum Field Comment Text',
    'default'           => 'None',
    'options'       => 'sch_schools_city_dom',
    'vname'         => 'LBL_CITY'
);