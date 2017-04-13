<?php
$config = array(
    'example-userpass' => array(
        'exampleauth:UserPass',
        'student:studentpass' => array(
            'uid' => array('student'),
            'eduPersonAffiliation' => array('member', 'student'),
        ),
        'employee:employeepass' => array(
            'uid' => array('employee'),
            'eduPersonAffiliation' => array('member', 'employee'),
        ),
    ),

    // This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.
        'core:AdminPassword',
    ),
);
?>
