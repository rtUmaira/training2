<?php

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