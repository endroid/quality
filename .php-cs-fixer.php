<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
;

$config = new PhpCsFixer\Config();
$config
    ->setFinder($finder)
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
