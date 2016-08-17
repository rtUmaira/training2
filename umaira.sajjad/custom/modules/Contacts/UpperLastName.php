<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 8/4/16
 * Time: 4:07 PM
 */

class UpperLastName {

    function ChangeLastName($bean, $args, $events)
    {
        $last = $bean -> last_name;
        $last = strtoupper($last);

        $bean -> last_name = $last;
    }
}