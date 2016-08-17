<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $dictionary['sch_Teachers']['fields']['sch_Schools_name'] = array(
        'required'  => false,
        'source'    => 'non-db',
        'name'      => 'sch_Schools_name',
        'vname'     => 'LBL_SCHOOL_NAME',
        'type'      => 'relate',
        'rname'     => 'name',
        'id_name'   => 'sch_Schools_id',
        'join_name' => 'sch_Schools',
        'link'      => 'sch_schools',
        'table'     => 'sch_schools',
        'isnull'    => 'true',
        'module'    => 'sch_Schools',
    );

    $dictionary['sch_Teachers']['fields']['sch_Schools_id'] = array(
        'name'              => 'sch_Schools_id',
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

    $dictionary['sch_Teachers']['fields']['sch_schools'] = array(
        'name'          => 'sch_schools',
        'type'          => 'link',
        'relationship'  => 'sch_schools_sch_teachers',
        'module'        => 'sch_Schools',
        'bean_name'     => 'sch_Schools',
        'source'        => 'non-db',
        'vname'         => 'LBL_SCHOOL',
    );

    $dictionary['sch_Teachers']['relationships']['sch_schools_sch_teachers'] = array(
        'lhs_module'		=> 'sch_Schools',
        'lhs_table'			=> 'sch_schools',
        'lhs_key'			=> 'id',
        'rhs_module'		=> 'sch_Teachers',
        'rhs_table'			=> 'sch_teachers',
        'rhs_key'			=> 'sch_Schools_id',
        'relationship_type'	=> 'one-to-many',
    );
