<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\{Content};

class NewForm extends Mailable
{
    use Queueable, SerializesModels;

    public $newForm;

    /**
     * Create a new message instance.
     *
     * @param array $formData
     */
    public function __construct(array $newForm)
    {
        $this->newForm = $newForm;
    }



    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return $this->subject('One Net: New Form Submitted - ')
                    ->view('emails.new_form_notification');
    }
}
