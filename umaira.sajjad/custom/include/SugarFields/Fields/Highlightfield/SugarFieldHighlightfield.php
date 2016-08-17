<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 8/8/16
 * Time: 12:20 PM
 */

//require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');
require_once('../../../data/SugarBean.php');

class SugarFieldHighlightfield extends SugarFieldBase
{

    //this function is called to format the field before saving.  For example we could put code in here
    // to check spelling or to change the case of all the letters
    public function save(&$bean, $params, $field, $properties, $prefix = '')
    {
        $GLOBALS['log']->debug("SugarFieldHighlightfield::save() function called.");
        parent::save($bean, $params, $field, $properties, $prefix);
    }
}

