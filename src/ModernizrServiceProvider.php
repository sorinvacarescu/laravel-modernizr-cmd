<?php

namespace Hofmannsven\Modernizr;

use Illuminate\Support\ServiceProvider;

class ModernizrServiceProvider extends ServiceProvider
{
    /**
     * Available console commands.
     *
     * @var array
     */
    protected $commands = [
        ModernizrCommand::class,
    ];

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Package and Modernizr config files.
         * Publish config files: php artisan vendor:publish --provider="Hofmannsven\Modernizr\ModernizrServiceProvider"
         */
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('modernizr.php'),
                __DIR__.'/../config/modernizr.json' => base_path('modernizr.json'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration.
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-modernizr-command');

        // Register the console commands.
        $this->commands($this->commands);
    }
}
