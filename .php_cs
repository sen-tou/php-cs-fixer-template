<?php

$config = new PhpCsFixer\Config();
return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'class_definition' => false,
        'concat_space' => ['spacing' => 'one'],
        'function_declaration' => ['closure_function_spacing' => 'none'],
        'native_constant_invocation' => true,
        'native_function_casing' => true,
        'native_function_invocation' => true,
        'no_superfluous_phpdoc_tags' => ['allow_mixed' => true, 'remove_inheritdoc' => true],
        'ordered_imports' => true,
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_types_order' => false,
        'single_line_throw' => false,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude(['var', 'node_modules', '.git'])
            ->notPath('*.cache')
            ->in(__DIR__)
    );
