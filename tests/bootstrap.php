<?php
// Enable Composer autoloader
/** @var \Composer\Autoload\ClassLoader $autoloader */
$autoloader = require dirname(__DIR__) . '/vendor/autoload.php';
// Register test classes
$autoloader->addPsr4('graychen\tests\\', __DIR__);