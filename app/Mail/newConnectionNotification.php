<?php

namespace App\Mail;

use App\Models\BuyPackage;
use App\Models\TC;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewConnectionNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $buy;
    public $tc;

    public function __construct(BuyPackage $buy)
    {
        $this->buy = $buy;
        $this->tc = TC::latest('id')->first();
    }

    public function build()
    {
        return $this->subject('One Net: Your Package Registration Details')
                    ->view('emails.new_connection_notification');
    }
}
