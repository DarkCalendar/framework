<?php

namespace Illuminate\Console\Events;

use \Illuminate\Console\Application;

class ArtisanStarting
{
    /**
     * The Artisan application instance.
     *
     * @var \Illuminate\Console\Application
     */
    public $artisan;

    /**
     * Create a new event instance.
     */
    public function __construct(public Application $artisan): void
    {
        // do soomting
    }
}
