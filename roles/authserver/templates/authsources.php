<?php
$config = array(
    // This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.
        'core:AdminPassword',
    ),
    'example-ldap' => array(
	    'ldap:LDAP',
	    'hostname' => 'ldap.stacken.kth.se',
	    'dnpattern' => 'cn=%username%,ou=users,dc=stacken,dc=kth,dc=se',
	    // 'search.enable' => true,
	    //'search.username' => 'cn=auth,ou=system_accounts,dc=stacken,dc=kth,dc=se§',
	    //'search.password' => '{{ ldap_saml_password }}',
    ),
);
?>
