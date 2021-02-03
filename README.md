## Logic Test
test 2.0，just a test ！！！

### Requirements
- php >= 7.3
- laravel 8.0

### Getting started
1、install
````
$ composer require know-that/test
````

2、config/app.php
````php
/*
 * Application Service Providers...
 */
App\Providers\AppServiceProvider::class,
App\Providers\AuthServiceProvider::class,
// App\Providers\BroadcastServiceProvider::class,
App\Providers\EventServiceProvider::class,
App\Providers\RouteServiceProvider::class,

// know-that/test Provider
KnowThat\Test\Providers\FacadeServiceProvider::class
````

### Code Examples
````php
<?php
namespace App\Http\Controllers;

use KnowThat\Test\Facades\Test;

class IndexController extends Controller
{
    public function index()
    {
        return Test::index();
    }
}
````
