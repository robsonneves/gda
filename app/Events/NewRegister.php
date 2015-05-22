<?php namespace App\Events;

use App\Contracts\Data\Register;
use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class NewRegister extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
    private $register;

	public function __construct(Register $register)
	{
		$this->register = $register;
	}

    public  function getRegister()
    {
        return $this->register;
    }

}
