<?php

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