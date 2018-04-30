<?php
define('LARAVEL_START', microtime(true));
$compiledPath = __DIR__.'/cache/compiled.php';
if (file_exists($compiledPath)) {
    require $compiledPath;
}