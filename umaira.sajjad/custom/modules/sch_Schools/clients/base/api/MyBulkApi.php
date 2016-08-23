<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyBulkApi
 *
 * @author umaira.sajjad
 */

//require_once '../../../api/BulkRestService.php';

class MyBulkApi extends BulkApi {
    //put your code here
    
    public function registerApiRest()
    {
        return array(
            'bulkCall' => array(
                'reqType' => 'POST',
                'path' => array('bulk'),
                'pathVars' => array(''),
                'method' => 'bulkCall',
                'shortHelp' => 'Run several API call in a sequence',
                'longHelp' => 'include/api/help/bulk_post_help.html',
            ),
        );
    }

    /**
     * Bulk API call
     * @param ServiceBase $api
     * @param array $args
     * @throws SugarApiExceptionMissingParameter
     * @return array
     */
    public function bulkCall($api, $args)
    {
        $this->requireArgs($args,array('requests'));
        $restResp = new BulkRestResponse($_SERVER);
        // reset vars so they won't confuse the child service
        $_GET = array(); $_POST = array();
        foreach($args['requests'] as $name => $request) {
            if(empty($request['url'])) {
                $GLOBALS['log']->fatal("Bulk Api: URL missing for request $name");
                throw new SugarApiExceptionMissingParameter("Invalid request - URL is missing");
            }
        }
        // check all reqs first so that we don't execute any reqs if one of them is broken
        foreach($args['requests'] as $name => $request) {
            $restReq = new BulkRestRequest($request);
            $restResp->setRequest($name);
            /**
             * @var $rest RestService
             */
            $rest = new BulkRestService($api);
            $rest->setRequest($restReq);
            $rest->setResponse($restResp);
            $rest->execute();

        }
        
//        $GLOBALS['log']->fatal($restResp->getResponses());
        $my_response = $restResp->getResponses();
        
        // get contents of array 2 and append inside array 1's elements
        $teachers = array();
        $students = array();
        $is_teacher = false;
        $result = array();
        foreach($my_response as $index => $subpanel) 
        {
            
//            $GLOBALS['log']->fatal('----index----');
//            $GLOBALS['log']->fatal($index); // key is the index 
//            $GLOBALS['log']->fatal('----value----');
//            $GLOBALS['log']->fatal($subpanel); // value is the array
            $temp = $subpanel[contents][records];
            
            foreach ($temp as $key => $record)
            {
//                $GLOBALS['log']->fatal('----record----');
//                $GLOBALS['log']->fatal($record); // value is the array
                if ($record[_module] === 'sch_Students') 
                {
                    array_push($students, $record);
                } else if( $record[_module] === 'sch_Teachers') 
                {
                    $is_teacher = true;
                    array_push($teachers, $record);
                }
            }
            
            if ($is_teacher && $index === 2)
            {
                $result = array_merge($students, $teachers);   
            }
        }
        $my_response[2][contents][records] = $result;

//        $GLOBALS['log']->fatal('----YYYYYYYYYYYYYYYYYYYYYYYYYYYY----');
////        $GLOBALS['log']->fatal($my_response[2][contents][records]);      
//        $GLOBALS['log']->fatal($my_response);      

        return $my_response;
    }
}
