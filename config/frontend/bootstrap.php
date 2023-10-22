<?php

declare(strict_types=1);

use FrontEnd\Framework\EventHandler\ContactEventHandler;

return [
    'bootstrap' => [
        ContactEventHandler::class
    ],
];
