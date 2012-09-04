<?php
/**
 * File containing the module view
 *
 * @version //autogentag//
 * @package LogicaLogs
 * @copyright Copyright (C) 2012 Logica WebFactory. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

$Module = $Params['Module'];
$tpl = eZTemplate::factory();

// get sitemaps list
$logs = array();
$logs_count = 0;
$logs_tmp = ezcBaseFile::findRecursive(
        'var/log',
        array('@.*.[log|log\.<digit>\d+|mail]$@')
);


foreach ( $logs_tmp as $log_tmp)
{
    $dirname = dirname( $log_tmp );
    $logs_count++;
    $logs[$dirname][] = array(
        'name' => $log_tmp,
        'size' => filesize( $log_tmp ),
        'name' => basename( $log_tmp ),
        'modified' => filemtime( $log_tmp )
    );
}
$logs_tmp = null;

// Set variables
$tpl->setVariable( 'logs_count', $logs_count );
$tpl->setVariable( 'logs', $logs );

$Result = array();
$Result['content'] = $tpl->fetch( 'design:logicalogs/list.tpl' );
$Result['path'] = array( array( 'text' => ezpI18n::tr( 'logicalogs/list', 'Logs list' ),
        'url' => false ) );

$contentInfoArray['persistent_variable'] = false;
if ( $tpl->variable( 'persistent_variable' ) !== false )
{
    $contentInfoArray['persistent_variable'] = $tpl->variable( 'persistent_variable' );
}

$Result['left_menu'] = 'design:parts/setup/menu.tpl';
$Result['content_info'] = $contentInfoArray;

?>