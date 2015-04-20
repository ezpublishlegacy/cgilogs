<?php
/**
 * File containing the module definition
 *
 * @version 1.0.1-LS
 * @package CGILogs
 * @copyright Copyright (C) 2012-2015 CGI Digital Factory. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

$Module     = array( "CGI logs" => "CGI logs viewver" );
$ViewList = array();
$FunctionList = array();

$ViewList['list'] = array(
    'script' => 'list.php',
    'functions' => array( 'list' ),
);

$ViewList['download'] = array(
        'script' => 'download.php',
        'functions' => array( 'download' ),
);


$FunctionList['list'] = array();
$FunctionList['download'] = array();

?>