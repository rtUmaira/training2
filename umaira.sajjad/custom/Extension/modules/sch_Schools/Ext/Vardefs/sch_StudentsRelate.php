<?php
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