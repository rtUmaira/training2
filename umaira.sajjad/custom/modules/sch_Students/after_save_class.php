<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class after_save_class
    {
        function after_save_method($bean, $event, $arguments)
        {
//            $GLOBALS['log']->fatal( $bean -> id );

            if (empty ($bean -> fetched_row)) {
                // make a new $ teacher 

                $teacher =  BeanFactory::newBean('sch_Teachers');
                $teacher-> first_name = 'Nuzhat';
                $teacher -> last_name = 'Saleem';
                
                $teacher -> sch_teacher_role__c = 'Class Teacher';
                
                $teacher-> save();
//            $GLOBALS['log']->fatal( $teacher -> id);
//            
//            $GLOBALS['log']->fatal( $bean -> id);
            
            
                $teacher -> load_relationship('teachers_students');
                $teacher -> teachers_students -> add ($bean -> id);
            
//            
//            $student = BeanFactory::getBean('sch_Students', $bean -> id);
//           $GLOBALS['log']->fatal( 'XXXXXXXXXXX');
//
//            $student -> load_relationship('teachers_students');
//            $student -> teachers_students -> add ($teacher -> id);

            }
           
            
        }
    }