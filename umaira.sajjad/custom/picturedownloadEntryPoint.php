<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $current_user;
$user = BeanFactory::getBean('Users', $current_user->id);

$fieldData = $user-> picture;

// $GLOBALS['log']->fatal( getcwd() );

$img_dir = 'index.php?entryPoint=download&amp;id='.$user-> picture.'&amp;type=SugarFieldImage&amp;isTempFile=1';
// $GLOBALS['log']->fatal( $img_dir  );

 echo '<a download="image.gif" href="'.$img_dir.'" title="Image">
    <img alt="ImageName" src="'.$img_dir.'">
</a>';

//define('DIRECTORY', '/home');
//
//$content = file_get_contents('home/var/www/html/SugarPro-Full-7.6.0.0/upload/'.$user-> picture.'.gif');
//file_put_contents(DIRECTORY . '/image.jpg', $content);

//header('Content-Type: text/csv; charset=utf-8');
//header('Content-Disposition: attachment; filename=image.gif');
// 
//echo '<form action="download.php">
//        <input type="submit" value="Submit" /> </form>';



