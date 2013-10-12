<?php

$securitySalt = 'christian_test';

return array(

'timezone' => 'Europe/Berlin',

'securitySalt' => $securitySalt,

'adminUsers' => array(
	'admin' => sha1('password' . $securitySalt)
),

'filePermissions' => 0666,
'dirPermissions' => 0777,

);
