<?php 
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

 ?>