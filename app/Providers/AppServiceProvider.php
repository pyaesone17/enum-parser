<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Enums\ExperienceLevel;
use App\Enums\EducationLevel;
use App\Enums\WorkingType;
use App\Enums\Status;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('view')->share('view_status', Status::getCollection());
        $this->app->make('view')->share('view_education_level', EducationLevel::getCollection());
        $this->app->make('view')->share('view_experience_level', ExperienceLevel::getCollection());
        $this->app->make('view')->share('view_working_type', WorkingType::getCollection());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
