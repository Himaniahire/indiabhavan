<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailContactData;

    public function __construct($emailContactData)
    {
        $this->emailContactData = $emailContactData;
    }

    public function build()
    {
        return $this->view('sendcontactmail')
                    ->with(['emailContactData' => $this->emailContactData]);
    }
}
