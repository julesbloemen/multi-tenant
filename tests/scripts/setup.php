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

if (getenv('TRAVIS_BUILD_DIR')) {
    putenv('CI_PROJECT_DIR=' . getenv('TRAVIS_BUILD_DIR'));
}

chdir(getenv('CI_PROJECT_DIR'));

$base_path = __DIR__ . '/../../';

if (getenv('TRAVIS_PHP_VERSION')) {
    putenv('BUILD_PHP_VERSION=' . getenv('TRAVIS_PHP_VERSION'));
}
foreach ([
             "$base_path/vendor/laravel/laravel/config/tenancy.php",
             "$base_path/vendor/laravel/laravel/config/webserver.php",
         ] as $config) {
    if (file_exists($config)) {
        @unlink($config);
    }
}
