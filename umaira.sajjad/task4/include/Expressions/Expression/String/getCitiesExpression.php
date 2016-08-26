<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('include/Expressions/Expression/String/StringExpression.php');


class getCitiesExpression extends StringExpression    {

    function evaluate()
    {
        $params = $this->getParameters();
        $country = $params->evaluate();
        
        if ($country === 'Pakistan') 
        {
            return array("Lahore", "Karachi", "Quetta", "Peshawar");
        } else if ($country === 'USA')
        {
            return array("Minnesota", "Utah", "New York", "San Francisco");
        }
       return "";
     }

     static function getJSEvaluate()
     {
        return <<<EOQ
        var params = this.getParameters();
        var country = params.evaluate();
         
         if (country === 'Pakistan') 
         {
            return ["Lahore", "Karachi", "Quetta", "Peshawar"];
         } else if (country === 'USA')
         {
            return ["Minnesota", "Utah", "New York", "San Francisco"];
         }
        return "";
EOQ;
        }

        function getParameterCount()
        {
            return 1; // we only accept a single parameter
        }

        static function getOperationName()
        {
            return "getCities";
        }
    }