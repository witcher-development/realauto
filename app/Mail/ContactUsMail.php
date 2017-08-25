<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $tel;
    protected $email;


    public function __construct($tel, $email)
    {
        $this->tel = $tel;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contactUs')
            ->with([
                'tel' => $this->tel,
                'email' => $this->email
            ])
            ->subject('Realauto новый заказ');
    }
}