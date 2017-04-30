<?php
// add metadata of service providers in this file, please use the federation 
// tab of the service provider admin page for simplesamlphp and copy the 
// metadata in a secure manner
$metadata['https://nextcloud.stacken.kth.se/index.php/apps/user_saml/saml/metadata'] = array (
  'entityid' => 'https://nextcloud.stacken.kth.se/index.php/apps/user_saml/saml/metadata',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-sp-remote',
  //'expire' => 1493744966,
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://nextcloud.stacken.kth.se/index.php/apps/user_saml/saml/acs',
      'index' => 1,
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
  'validate.authnrequest' => false,
  'saml20.sign.assertion' => false,
);
