<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\User'=>'App\Policies\UserPolicy',
        // 'App\HealthPost'=>'App\Policies\HealthPostPolicy',
        'App\BirthApplicationForm'=>'App\Policies\BirthApplicationFormPolicy',
        'App\CertificateOfBirth'=>'App\Policies\BirthCertificatePolicy'

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
