--TEST--
https://github.com/sebastianbergmann/phpunit/issues/5192
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--configuration';
$_SERVER['argv'][] = __DIR__ . '/5192/phpunit.xml';

require_once __DIR__ . '/../../bootstrap.php';
(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);
--XFAIL--
https://github.com/sebastianbergmann/phpunit/issues/5192
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

No tests executed!
