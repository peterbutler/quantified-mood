<?php
$private_settings = [];
$public_settings = [];

include_once( __DIR__ . '/private-settings.php' );

$public_settings = [
    'settings' => [
        'displayErrorDetails' => true,

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],
    ],
];
$merged =  array_merge_recursive( $public_settings, $private_settings );
return $merged;