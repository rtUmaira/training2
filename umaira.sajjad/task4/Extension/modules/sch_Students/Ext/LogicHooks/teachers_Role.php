<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $hook_array['after_save'][] = Array(
        //Processing index. For sorting the array.
        1,
       
        //Label. A string value to identify the hook.
        'after_save example',
       
        //The PHP file where your class is located.
        'custom/modules/sch_Students/after_save_class.php',
       
        //The class the method is in.
        'after_save_class',
       
        //The method to call.
        'after_save_method'
    );