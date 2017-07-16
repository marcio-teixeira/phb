<?php
//-----------------------------------------------------------------------------
// Agencia RS
// http://agenciars.com.br
// Charset UTF-8
//-----------------------------------------------------------------------------

//-----------------------------------------------------------------------------
// CONSTANTS
//-----------------------------------------------------------------------------
$PROTOCOL 	= (($_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://');


// lOCAL

$HOST_NAME 	= 'localhost/phb';
//$HOST_NAME 	= 'http://www.phb.com.br/';
$FILE_NAME 		= basename($_SERVER['PHP_SELF']);
$DEV 		= '/';
$CONTATOR = 5;
function url_path(){return ($GLOBALS['PROTOCOL'] . $GLOBALS['HOST_NAME'] . $GLOBALS['DEV']);}
?>