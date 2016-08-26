<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dependencies['sch_Students']['city_country'] = array(
    'hooks' => array("edit"),
    'triggerFields' => array('country'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'SetOptions',
            'params' => array(
              'target' => 'city',
              'keys' => 'getCities($country)',
              'labels' => 'getCities($country)'
           ),
        ),
        array(
            'name' => 'SetVisibility',
            'params' => array(
                'target' => 'city',
                'value' => 'not(equal($country,""))',
            ),
        ),       
    ),
);
