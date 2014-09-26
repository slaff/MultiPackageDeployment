<?php
$packageName   = $argv[1];

$buildFolder   = dirname(__FILE__);
$baseFolder    = dirname($buildFolder);
$packageFolder = $buildFolder.'/packages/'.$packageName;
exec("cp -r '$packageFolder'/* ."); 