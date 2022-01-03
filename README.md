# Cpanel-Whm-PHP-SDK

Abstraction for cpanel/whm and WHMCS apis

Currently in development

# WHMCS

### Usage:

```php 
include 'vendor/autoload.php';

use Leonardomanrich\Cpanelwhm\Api\WHMCS;
use Leonardomanrich\Cpanelwhm\Http\HttpClient;
use Leonardomanrich\Cpanelwhm\Modules\WHMCS\Users;

$environment = new WHMCS(
    'https://domain.com.br',
    'identifier',
    'secret'
);

$cpanelClient = new HttpClient($environment);

$Users = new Users();

$result = $cpanelClient->execute($Users->getUsers())->result;
```

you can find out how to create API credentials
at [WHMCS API_Authentication_Credentials](https://docs.whmcs.com/API_Authentication_Credentials#Creating_Admin_API_Authentication_Credentials)

all whmcs classes are stored in namespace `Leonardomanrich\Cpanelwhm\Modules\WHMCS\` and all functions follow
documentation standard [WHMCS api documentation](https://developers.whmcs.com/api/api-index/).

Examples:

See on [WHMCS api GetOrders](https://developers.whmcs.com/api-reference/getorders/)
```php
use Leonardomanrich\Cpanelwhm\Modules\WHMCS\Orders;

$Orders = new Orders();

$result = $cpanelClient->execute(
    $Orders->getOrders(
        $limitstart, 
        $limitnum, 
        $id, 
        $userid, 
        $requestor_id, 
        $status
    )
)->result;
```

See on [WHMCS api AddUser](https://developers.whmcs.com/api-reference/adduser/)
```php
    
use Leonardomanrich\Cpanelwhm\Modules\WHMCS\Users;

$Users = new Users();

$result = $cpanelClient->execute(
    $Users->addUser(
        'Jon',
        'Doe',
        'JonDoe@email.com',
        'JonDoe123',
        'portuguese'
    )
)->result;
```


