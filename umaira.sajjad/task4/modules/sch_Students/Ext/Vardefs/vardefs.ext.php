<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/sch_Students/Ext/Vardefs/sch_TeachersRelate.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dictionary['sch_Students']['fields']['teacher_student'] = array(
        'name'          => 'teacher_student',
        'type'          => 'link',
        'relationship'  => 'teachers_students_',
        'module'        => 'sch_Teachers',
        'bean_name'     => 'sch_Teachers',
        'source'        => 'non-db',
        'vname'         => 'LBL_TEACHER',
    );

//Merged from custom/Extension/modules/sch_Students/Ext/Vardefs/sch_SchoolsRelate.php

/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 8/10/16
 * Time: 4:23 PM
 */
    $dictionary['sch_Students']['fields']['school_name'] = array(
        'required'  => false,
        'source'    => 'non-db',
        'name'      => 'school_name',
        'vname'     => 'LBL_SCHOOL_NAME',
        'type'      => 'relate',
        'rname'     => 'name',
        'id_name'   => 'sch_Schools_id',
        'join_name' => 'sch_Schools',
        'link'      => 'School_link',
        'table'     => 'sch_schools',
        'isnull'    => 'true',
        'module'    => 'sch_Schools',
    );

    $dictionary['sch_Students']['fields']['sch_Schools_id'] = array(
        'name'              => 'sch_Schools_id',
        'rname'             => 'id',
        'vname'             => 'LBL_School_ID',
        'type'              => 'id',
        'table'             => 'sch_schools',
        'isnull'            => 'true',
        'module'            => 'sch_Schools',
        'dbType'            => 'id',
        'reportable'        => false,
        'massupdate'        => false,
        'duplicate_merge'   => 'disabled',
    );

    $dictionary['sch_Students']['fields']['School_link'] = array(
        'name'          => 'School_link',
        'type'          => 'link',
        'relationship'  => 'sch_schools_sch_students',
        'module'        => 'sch_Schools',
        'bean_name'     => 'sch_Schools',
        'source'        => 'non-db',
        'vname'         => 'LBL_SCHOOL',
    );

    $dictionary['sch_Students']['relationships']['sch_schools_sch_students'] = array(
        'lhs_module'		=> 'sch_Schools',
        'lhs_table'			=> 'sch_schools',
        'lhs_key'			=> 'id',
        'rhs_module'		=> 'sch_Students',
        'rhs_table'			=> 'sch_students',
        'rhs_key'			=> 'sch_Schools_id',
        'relationship_type'	=> 'one-to-many',
    );
//Merged from custom/Extension/modules/sch_Students/Ext/Vardefs/sugarfield_country_city.php


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