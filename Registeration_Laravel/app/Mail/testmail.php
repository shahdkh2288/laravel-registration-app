<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class testmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;


    public function __construct($name)
    {
        $this->name=$name;

    }


    public function build()
    {

        return $this->view('Email.adminMail')->with([
            'name' => $this->name,
        ]);
    }
}

