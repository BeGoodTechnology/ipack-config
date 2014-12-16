<?php
$CONFIG = array (
/* Check 3rdparty apps for malicious code fragments */
"appcodechecker" => false,

/* Check if ownCloud is up to date */
"updatechecker" => false,

/* Are we connected to the internet or are we running in a closed network? */
"has_internet_connection" => false,

/* Check if the ownCloud WebDAV server is working correctly. Can be disabled if not needed in special situations*/
"check_for_working_webdav" => false,

/* Check if .htaccess protection of data is working correctly. Can be disabled if not needed in special situations*/
"check_for_working_htaccess" => false,

/* date format to be used while writing to the owncloud logfile */
'logdateformat' => 'Y-m-d H:i:s',

/* timezone used while writing to the owncloud logfile (default: UTC) */
'logtimezone' => 'Asia/Tokyo',
);
