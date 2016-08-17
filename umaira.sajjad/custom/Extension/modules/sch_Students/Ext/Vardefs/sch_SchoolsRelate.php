<?php
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