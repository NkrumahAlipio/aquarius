<?php

namespace App\Providers;

use App\Models\Animal;
use App\Models\Show;
use App\Models\Treinador;
use App\Observers\AnimalObserver;
use App\Observers\ShowObserver;
use App\Observers\TreinadorObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Animal::observe(AnimalObserver::class);
        Treinador::observe(TreinadorObserver::class);
        Show::observe(ShowObserver::class);
    }
}
