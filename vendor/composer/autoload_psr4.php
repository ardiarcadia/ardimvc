<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Psr\\Log\\' => array($vendorDir . '/psr/log/src'),
    'Leaf\\Http\\' => array($vendorDir . '/leafs/cors/src', $vendorDir . '/leafs/http/src'),
    'Leaf\\' => array($vendorDir . '/leafs/anchor/src', $vendorDir . '/leafs/db/src', $vendorDir . '/leafs/exception/src', $vendorDir . '/leafs/leaf/src', $vendorDir . '/leafs/router/src', $vendorDir . '/leafs/session/src'),
    'App\\' => array($baseDir . '/app'),
);
