<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageDelivered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $contact = Contact::orderBy('created_at', 'DESC')->first();
        return $this
            ->from('geofreynjavike@gmail.com')
            ->to('geofreynjavike2017@gmail.com')
            ->to('haroobkanavaro@gmail.com')
            ->subject($contact->subject)
            ->view('emails.emails');
    }
}
