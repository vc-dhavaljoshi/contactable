<?php

namespace Viitortest\Contactable;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function register()
    {
       $this->publishResources();
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database');
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../config/contact-table.php' => config_path('contact-table.php')
        ],'contact-config');
        $this->publishes([
            __DIR__ . '/../database' => database_path('migrations/')], 'contact-migrations');
    }
}
