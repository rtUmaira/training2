<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/sch_Schools/Ext/Vardefs/sch_TeachersRelate.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $dictionary['sch_Schools']['fields']['sch_Teachers'] = array(
        'name' => 'sch_Teachers',
        'type' => 'link',
        'relationship' => 'sch_schools_sch_teachers',
        'module' => 'sch_Teachers',
        'bean_name' => 'sch_Teachers',
        'source' => 'non-db',
        'vname' => 'LBL_TEACHERS',
    );
//Merged from custom/Extension/modules/sch_Schools/Ext/Vardefs/sch_StudentsRelate.php

/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 8/10/16
 * Time: 3:35 PM
 */

    $dictionary['sch_Schools']['fields']['sch_Students'] = array(
        'name' => 'sch_Students',
        'type' => 'link',
        'relationship' => 'sch_schools_sch_students',
        'module' => 'sch_Students',
        'bean_name' => 'sch_Students',
        'source' => 'non-db',
        'vname' => 'LBL_STUDENTS',
    );
//Merged from custom/Extension/modules/sch_Schools/Ext/Vardefs/sch_StaffMembersRelate.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['sch_Schools']['fields']['sch_staff'] = array(
    'name'         => 'sch_staff',
    'type'         => 'link',
    'relationship' => 'staff_school_relationship',
    'module'       => 'sch_StaffMembers',
    'bean_name'    => 'sch_staffmembers',
    'source'       => 'non-db',
    'vname'        => 'LBL_STAFF',
);
//Merged from custom/Extension/modules/sch_Schools/Ext/Vardefs/country_city_fields.php


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