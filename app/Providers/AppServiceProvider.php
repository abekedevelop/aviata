<?php

namespace App\Providers;

use App\Domain\Contracts\CommandFactoryContract;
use App\Domain\Contracts\ProcessFactoryContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->bindCommandFactory();
        $this->bindProcessFactory();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    public function bindCommandFactory(): void
    {
        $class = config('domain.command_factory');

        app()->bind(CommandFactoryContract::class, $class);
    }

    public function bindProcessFactory(): void
    {
        $class = config('domain.process_factory');

        app()->bind(ProcessFactoryContract::class, $class);
    }
}
