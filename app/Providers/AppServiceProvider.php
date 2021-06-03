<?php

namespace App\Providers;

use App\Repositories\ActorRepository;
use App\Repositories\CityRepository;
use App\Repositories\HomepageRepository;
use App\Repositories\IActorRepository;
use App\Repositories\ICityRepository;
use App\Repositories\IHomepageRepository;
use App\Repositories\IMovieBookRepository;
use App\Repositories\IMovieRepository;
use App\Repositories\IScreeningRepository;
use App\Repositories\ISeatRepository;
use App\Repositories\ITheaterRepository;
use App\Repositories\MovieBookRepository;
use App\Repositories\MovieRepository;
use App\Repositories\ScreeningRepository;
use App\Repositories\SeatRepository;
use App\Repositories\TheaterRepository;
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
//        $this->app->bind(IActorRepository::class, ActorRepository::class);
        $this->app->bind(IActorRepository::class,ActorRepository::class);
        $this->app->bind(IMovieRepository::class,MovieRepository::class);
        $this->app->bind(IHomepageRepository::class,HomepageRepository::class);
        $this->app->bind(ITheaterRepository::class,TheaterRepository::class);
        $this->app->bind(ICityRepository::class,CityRepository::class);
        // $this->app->bind(ISeatRepository::class,SeatRepository::class);
        // $this->app->bind(IMovieBookRepository::class,MovieBookRepository::class);
        // $this->app->bind(IScreeningRepository::class,ScreeningRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
