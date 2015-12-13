<?php

namespace TeachMe\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use TeachMe\Entities\Ticket;
use TeachMe\Policies\TicketPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = array(
        //'App\Model' => 'App\Policies\ModelPolicy',
        Ticket::class => TicketPolicy::class
    );

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $gate->before(function ($user) {
            if ($user->role === 'admin') {
                return true;
            }
        });

        $this->registerPolicies($gate);

        //
    }
}