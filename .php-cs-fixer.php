<?php

declare(strict_types=1);

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'declare_strict_types' => true,
        'php_unit_method_casing' => ['case' => 'camel_case'],
    ])
;

return $config;
