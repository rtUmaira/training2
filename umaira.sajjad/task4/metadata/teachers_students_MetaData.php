<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dictionary["teachers_students_"] = array (
    'true_relationship_type' => 'many-to-many',

    'from_studio' => false,

    'relationships' =>

    array (

      'teachers_students_' =>

      array (

        'lhs_module' => 'sch_Teachers',

        'lhs_table' => 'sch_teachers',

        'lhs_key' => 'id',

        'rhs_module' => 'sch_Students',

        'rhs_table' => 'sch_students',

        'rhs_key' => 'id',

        'relationship_type' => 'many-to-many',

        'join_table' => 'teachers_students_c',

        'join_key_lhs' => 'teachers_students_teachers_ida',

        'join_key_rhs' => 'teachers_students_students_idb',

      ),

    ),

    'table' => 'teachers_students_c',

    'fields' =>

    array (

      0 =>

      array (

        'name' => 'id',

        'type' => 'varchar',

        'len' => 36,

      ),

      1 =>

      array (

        'name' => 'date_modified',

        'type' => 'datetime',

      ),

      2 =>

      array (

        'name' => 'deleted',

        'type' => 'bool',

        'len' => '1',

        'default' => '0',

        'required' => true,

      ),

      3 =>

      array (

        'name' => 'teachers_students_teachers_ida',

        'type' => 'varchar',

        'len' => 36,

      ),

      4 =>

      array (

        'name' => 'teachers_students_students_idb',

        'type' => 'varchar',

        'len' => 36,

      ),

    ),

    'indices' =>

    array (

      0 =>

      array (

        'name' => 'teachers_students_spk',

        'type' => 'primary',

        'fields' =>

        array (

          0 => 'id',

        ),

      ),

      1 =>

      array (

        'name' => 'teachers_students_ida1',

        'type' => 'index',

        'fields' =>

        array (

          0 => 'teachers_students_teachers_ida',

        ),

      ),

      2 =>

      array (

        'name' => 'teachers_students_alt',

        'type' => 'alternate_key',

        'fields' =>

        array (

          0 => 'teachers_students_students_idb',

        ),

      ),

    ),
);