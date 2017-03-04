<?php

namespace CodingPhase\ReferenceGenerator;

use Illuminate\Support\ServiceProvider;

class ReferenceGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->handleConfig();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Handle configuration
     */
    private function handleConfig()
    {
        $configPath = __DIR__ . '/../config/reference-generator.php';
        $this->publishes([$configPath => config_path('reference-generator.php')]);
        $this->mergeConfigFrom($configPath, 'reference-generator');
    }
}
