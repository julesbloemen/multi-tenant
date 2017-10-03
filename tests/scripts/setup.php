<?php

/*
 * This file is part of the hyn/multi-tenant package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://laravel-tenancy.com
 * @see https://github.com/hyn/multi-tenant
 */

chdir(getenv('TRAVIS_BUILD_DIR'));

$base_path = __DIR__ . '/../../';

foreach ([
             "$base_path/vendor/laravel/laravel/config/tenancy.php",
             "$base_path/vendor/laravel/laravel/config/webserver.php",
         ] as $config) {
    if (file_exists($config)) {
        @unlink($config);
    }
}
