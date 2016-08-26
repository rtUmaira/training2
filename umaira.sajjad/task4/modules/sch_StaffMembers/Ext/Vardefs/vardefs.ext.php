<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/sch_StaffMembers/Ext/Vardefs/staff_schools.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['sch_StaffMembers']['fields']['sch_Schools_name'] = array(
    'required'  => true,
    'source'    => 'non-db',
    'name'      => 'sch_Schools_name',
    'vname'     => 'LBL_SCHOOL_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'sch_schools_id',
    'join_name' => 'sch_schools_join',
    'link'      => 'staff_schools',
    'table'     => 'sch_schools',
    'isnull'    => 'true',
    'module'    => 'sch_Schools',
);

$dictionary['sch_StaffMembers']['fields']['sch_schools_id'] = array(
    'name'              => 'sch_schools_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SCHOOL_ID',
    'type'              => 'id',
    'table'             => 'sch_schools',
    'isnull'            => 'true',
    'module'            => 'sch_Schools',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);


$dictionary['sch_StaffMembers']['fields']['staff_schools'] = array(
    'name'          => 'staff_schools',
    'type'          => 'link',
    'relationship'  => 'staff_school_relationship',
    'module'        => 'sch_Schools',
    'bean_name'     => 'sch_Schools',
    'source'        => 'non-db',
    'vname'         => 'LBL_SCHOOLS',
);

$dictionary['sch_StaffMembers']['relationships']['staff_school_relationship'] = array(
    'lhs_module'        => 'sch_Schools',
    'lhs_table'         => 'sch_schools',
    'lhs_key'           => 'id',
    'rhs_module'        => 'sch_StaffMembers',
    'rhs_table'         => 'sch_staffmembers',
    'rhs_key'           => 'sch_schools_id',
    'relationship_type' => 'one-to-many',
);