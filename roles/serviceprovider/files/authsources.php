<?php
$config = array(

	/* This is the name of this authentication source, and will be used to access it later. */
	'default-sp' => array(
		'saml:SP',
		'idp' => 'http://auth.stacken.kth.se/saml2/idp/metadata.php',
	),

	'admin' => array(
		// The default is to use core:AdminPassword, but it can be replaced with
		// any authentication source.
		'core:AdminPassword',
	),

);


