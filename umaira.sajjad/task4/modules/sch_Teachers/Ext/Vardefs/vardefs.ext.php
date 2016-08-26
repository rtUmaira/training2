<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/sch_Teachers/Ext/Vardefs/sch_StudentsRelate.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary['sch_Teachers']['fields']['teachers_students'] = array(
        'name'          => 'teachers_students',
        'type'          => 'link',
        'relationship'  => 'teachers_students_',
        'module'        => 'sch_Students',
        'bean_name'     => 'sch_Students',
        'source'        => 'non-db',
        'vname'         => 'LBL_STUDENTS',
    );
//Merged from custom/Extension/modules/sch_Teachers/Ext/Vardefs/sugarfield_sch_teacher_role__c.php

 // created: 2016-08-15 05:25:33
$dictionary['sch_Teachers']['fields']['sch_teacher_role__c']['labelValue']='sch teacher role';
$dictionary['sch_Teachers']['fields']['sch_teacher_role__c']['dependency']='';
$dictionary['sch_Teachers']['fields']['sch_teacher_role__c']['visibility_grid']='';

 
//Merged from custom/Extension/modules/sch_Teachers/Ext/Vardefs/sch_SchoolsRelate.php


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

//Merged from custom/Extension/modules/sch_Teachers/Ext/Vardefs/sugarfield_sch_teacher_subject__c.php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown'] = array(
        'name'          => 'teacher_subjects_dropdown',
        'type'          => 'enum',
        'help'          => 'Enum Field Help Text',
        'comment'       => 'Enum Field Comment Text',
        'options'          => 'teacher_subject',
        'vname'         => 'LBL_SUBJECTS',
    
    );
//Merged from custom/Extension/modules/sch_Teachers/Ext/Vardefs/sugarfield_teacher_subjects_dropdown.php
 
// created: 2016-08-16 06:42:37
//    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['default']='Math';
    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['audited']=false;
    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['massupdate']=true;
//    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['options']='teacher_subject';
//    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['comments']='Enum Field Comment Text';
    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['duplicate_merge']='enabled';
    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['duplicate_merge_dom_value']='1';
    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['merge_filter']='disabled';
    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['unified_search']=false;
    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['calculated']=false;
    $dictionary['sch_Teachers']['fields']['teacher_subjects_dropdown']['visibility_grid']=array (
        'trigger' => 'sch_teacher_role__c',
        'values' => array (
          'Class Teacher' => 
          array (
          ),
          'Lecture Teacher' => 
          array (
            0 => 'Math',
            1 => 'Islamiat',
            2 => 'English',
            3 => 'Urdu',
          ),
        ),
      );

 