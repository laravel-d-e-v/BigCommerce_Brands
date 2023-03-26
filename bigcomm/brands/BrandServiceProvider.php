<?php

namespace BigComm\Brands;

use Illuminate\Support\ServiceProvider;

class BrandServiceProvider extends ServiceProvider {
    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadMigrationsFrom(__DIR__ .'/database/migrations');
    }
}
