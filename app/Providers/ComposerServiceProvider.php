<?php

namespace App\Providers;

use App\Models\Equipment;
use App\Models\Outage;
use App\Models\Protection;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        view()->composer('outages.form', function ($view) {

            $types = [
                'Emergency' => 'Emergency',
                'Planned'   => 'Planned',
            ];

            $view->with('types', $types);
        });

        view()->composer('outages.form', function ($view) {

            $arr = [
                'equipment'   => Equipment::pluck('name', 'id'),
                'protections' => Protection::pluck('name', 'id'),
                'relayed_by'  => User::pluck('name', 'id'),
            ];

            $view->with('arr', $arr);
        });

        view()->composer('home', function ($view) {

            $arr = [
                'outages'  => Outage::count(),
                'pending'  => Outage::where('status', 'Pending')->count(),
                'approved' => Outage::where('status', 'Approved')->count(),
            ];

            $view->with('arr', $arr);
        });
    }
}
