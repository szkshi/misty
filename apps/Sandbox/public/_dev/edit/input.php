<?php
/**
 * Return validated path info
 *
 * @return array [$fullPath, $line, $relativePath]
 */

// input
$line = isset($_GET['line']) ? $_GET['line'] : 0;
$path = isset($_REQUEST['file']) ?  $_REQUEST['file'] : false;
$rootDir = isset($_ENV['SUNDAY_ROOT']) ? $_ENV['SUNDAY_ROOT'] : dirname(dirname(dirname(dirname(dirname(__DIR__)))));

if (! isset($_ENV['SUNDAY_DISABLE_FULL_PATH_FILE_EDIT']) && is_readable($path)) {
    return [$path, $line, $path];
}
// disallow full path
$fullPath = $rootDir . '/' . $path;
$relativePath = $path;

// readable ?
if (!is_readable($fullPath)) {
    throw new \InvalidArgumentException("Not found. {$path} : {$fullPath} is not readable.");
}
// allow only under project
if (strpos($fullPath, $rootDir) !== 0) {
    throw new \OutOfRangeException($fullPath);
}

return [$fullPath, $line, $relativePath];
