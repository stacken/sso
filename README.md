Please read the contents in roles/authserver/files/saml20-sp-remote.php:
```php
<?php
// add metadata of service providers in this file, please use the federation 
// tab of the service provider admin page for simplesamlphp and copy the 
// metadata in a secure manner
```

and roles/serviceprovider/files/saml20-idp-remote.php:
```php
<?php
// please fetch the metadata from federation page on the saml server and paste 
// it here
//
// make sure that the key is the same as in (config/)authservices.php (i.e. 
// http://auth.stacken.kth.se/saml2/idp/metadata.php
```

Some files are encrypted with ansible-vault. Please use
```
ansible-playbook --ask-vault-pass -i hosts main.yml 
```
or use a password file.
