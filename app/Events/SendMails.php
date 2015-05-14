<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class SendMails extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
    private $data = [];
    private $from;

	public function __construct($data,$from)
	{
		$this->data = $data;
        $this->from = $from;
	}

    public function getData()
    {
        return $this->data;
    }

    public function getFrom()
    {
        return $this->From;
    }

}
