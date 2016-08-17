<?php

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