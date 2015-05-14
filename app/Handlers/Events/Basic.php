<?php namespace App\Handlers\Events;

use App\Events\SendMails;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class Basic {

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
	 * @param  SendMails  $event
	 * @return void
	 */
	public function handle(SendMails $event)
	{


	}

}
