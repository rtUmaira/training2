<?php

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
