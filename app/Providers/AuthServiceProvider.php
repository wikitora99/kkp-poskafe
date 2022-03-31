<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
  /**
   * The policy mappings for the application.
   *
   * @var array<class-string, class-string>
   */
  protected $policies = [
    // 'App\Models\Model' => 'App\Policies\ModelPolicy',
  ];

  /**
   * Register any authentication / authorization services.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerPolicies();

    Gate::define('owner', fn($user) => $user->role_id === 1 );
    Gate::define('admin', fn($user) => $user->role_id === 2 );
    Gate::define('cashier', fn($user) => $user->role_id === 3 );
    // Gate::define('kitchen', fn($user) => $user->role_id === 4 );
  }
}
