<?php

namespace App\Providers;

use App\Services\ReportBuilder;
use App\Services\ReportBuilderFactory;
use Illuminate\Support\ServiceProvider;

class ReportBuilderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ReportBuilder', function()
        {
            $reportBuilderFactory = new ReportBuilderFactory();
            return new ReportBuilder($reportBuilderFactory);
        });
    }



    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
