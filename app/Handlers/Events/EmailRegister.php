<?php namespace App\Handlers\Events;

use App\Events\NewRegister;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class EmailRegister {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */

	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  NewRegister  $event
	 * @return void
	 */
	public function handle(NewRegister $event)
	{
        $registro =$event->getRegister();

        $send = \Mail::queue('emails.welcome', ['key' => $registro], function($message) use ($registro)
        {
            $message->to($registro->email,$registro->name)->subject('Novo Registro GD@');
        });

        if ($send)
        {
            $this->registro->status =  'E';
            $this->registro->save();
        }
    }

}
