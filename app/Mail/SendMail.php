<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama,$nomor,$email1,$saran)
    {
        $this->nama = $nama;
        $this->nomor = $nomor;
        $this->email1 = $email1;
        $this->saran = $saran;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hhahahah@gmail.com')
            ->view('email')
            ->with(
            [
                'nama' => $this->nama,
                'nomor' => $this->nomor,
                'email1' => $this->email1,
                'saran' => $this->saran
            ]);
    }
}
