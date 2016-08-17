<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN sch_StaffMembers
 */

require_once 'include/SugarObjects/templates/person/Person.php';

class sch_StaffMembers_sugar extends Person {
    public $new_schema = true;
    public $module_dir = 'sch_StaffMembers';
    public $object_name = 'sch_StaffMembers';
    public $table_name = 'sch_staffmembers';
    public $importable = true;
    public $team_id;
    public $team_set_id;
    public $team_count;
    public $team_name;
    public $team_link;
    public $team_count_link;
    public $teams;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $doc_owner;
    public $user_favorites;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $activities;
    public $following;
    public $following_link;
    public $my_favorite;
    public $favorite_link;
    public $salutation;
    public $first_name;
    public $last_name;
    public $full_name;
    public $title;
    public $facebook;
    public $twitter;
    public $googleplus;
    public $department;
    public $do_not_call;
    public $phone_home;
    public $phone_mobile;
    public $phone_work;
    public $phone_other;
    public $phone_fax;
    public $primary_address_street;
    public $primary_address_street_2;
    public $primary_address_street_3;
    public $primary_address_city;
    public $primary_address_state;
    public $primary_address_postalcode;
    public $primary_address_country;
    public $alt_address_street;
    public $alt_address_street_2;
    public $alt_address_street_3;
    public $alt_address_city;
    public $alt_address_state;
    public $alt_address_postalcode;
    public $alt_address_country;
    public $assistant;
    public $assistant_phone;
    public $picture;
    public $email;
    public $email1;
    public $email2;
    public $invalid_email;
    public $email_opt_out;
    public $email_addresses_primary;
    public $email_addresses;
    public $email_addresses_non_primary;
    
    /**
     * This is a deprecated method, please start using __construct() as this
     * method will be removed in a future version.
     *
     * @see __construct
     * @deprecated
     */
    public function sch_StaffMembers_sugar(){
        $GLOBALS['log']->deprecated('Calls to sch_StaffMembers::sch_StaffMembers are deprecated.');
        self::__construct();
    }

    public function __construct(){
        parent::__construct();
    }
    
    public function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
    
}