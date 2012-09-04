<?php
/**
 * File containing the module definition
 *
 * @version //autogentag//
 * @package LogicaLogs
 * @copyright Copyright (C) 2012 Logica WebFactory. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

$Module     = array( "Logica logs" => "Logica logs viewver" );
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