<?php
protected $middlewareGroups = [
    'web' => [
        // other middlewares...
        \App\Http\Middleware\SetLocale::class,
    ],
];
