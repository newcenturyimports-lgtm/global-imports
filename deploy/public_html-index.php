<?php

/*
 |--------------------------------------------------------------------------
 | public_html bootstrap — cPanel shared-hosting deploy
 |--------------------------------------------------------------------------
 |
 | This file goes into your public_html/ folder on cPanel and forwards
 | every request into the Laravel app sitting at ../global-imports/.
 |
 | If your cloned repo folder is NOT named "global-imports", change the
 | $appBase line below to point at the right folder name.
 |
 */

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Path to the Laravel app (one level up from public_html, then into the cloned repo)
$appBase = __DIR__ . '/../global-imports';

// Maintenance mode check
if (file_exists($maintenance = $appBase . '/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Composer autoloader (vendor/ is committed to the repo)
require $appBase . '/vendor/autoload.php';

// Bootstrap Laravel + handle request
(require_once $appBase . '/bootstrap/app.php')
    ->handleRequest(Request::capture());
