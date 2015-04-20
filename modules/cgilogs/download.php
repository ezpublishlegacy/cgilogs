<?php
/**
 * File containing the module view
 *
 * @version 1.0.1-LS
 * @package CGILogs
 * @copyright Copyright (C) 2012-2015 CGI Digital Factory. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

$Module = $Params['Module'];
$http = eZHTTPTool::instance();
$file = rawurldecode( $http->getVariable( 'file' ) );

// Security
$file = substr( $file, 8 );
if ( strpos( $file, '..' ) !== false )
{
    eZExecution::cleanExit();
}
$file = 'var/log/' . $file;
if ( !file_exists( $file ) )
{
    eZExecution::cleanExit();
}

eZFile::download( $file, true, basename( $file ) );

eZExecution::cleanExit();

?>