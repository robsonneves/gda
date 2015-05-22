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
    private $registro;

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
        $this->registro =$event->getRegister();

        $send = \Mail::queue('emails.welcome', ['key' => $this->registro], function($message)
        {
            $message->to($this->registro->email,$this->registro->name)->subject('Novo Registro GD@');
        });

        if ($send)
        {
            $this->registro->status =  'E';
            $this->registro->save();
        }
    }

}
