<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);


        $this->app->bind(
            'App\Contracts\Data\User',
            'App\Data\User'
        );

        $this->app->bind(
            'App\Contracts\Data\Usuario',
            'App\Data\Usuario'
        );

        $this->app->bind(
            'App\Contracts\Data\UsuarioWeb',
            'App\Data\UsuarioWeb'
        );

        $this->app->bind(
            'App\Contracts\Data\Pessoa',
            'App\Data\Pessoa'
        );

        $this->app->bind(
            'App\Contracts\Data\Social',
            'App\Data\Social'
        );

        $this->app->bind(
            'App\Contracts\Data\Processo',
            'App\Data\Processo'
        );

        $this->app->bind(
            'App\Contracts\Data\Tramitacao',
            'App\Data\Tramitacao'
        );


	}

}
