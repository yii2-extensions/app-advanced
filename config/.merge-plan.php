<?php

declare(strict_types=1);

// Do not edit. Content will be replaced.
return [
    '/' => [
        'frontend' => [
            '/' => [
                'frontend/*.php',
            ],
        ],
        'params' => [
            '/' => [
                'params.php',
            ],
        ],
        'params-frontend' => [
            '/' => [
                '$params',
                'params-frontend.php',
            ],
        ],
    ],
];
