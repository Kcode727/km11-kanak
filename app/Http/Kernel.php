protected $middlewareGroups = [
    'web' => [
        // Other middleware...
        \App\Http\Middleware\SetLocale::class, // Add this line
    ],

    'api' => [
        'throttle:api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
];
