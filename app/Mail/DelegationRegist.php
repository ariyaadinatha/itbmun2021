<?php

namespace App\Mail;

use App\Delegations;
use App\DelegationsDelegates;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DelegationRegist extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(DelegationsDelegates $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('ITBMUN 2020 Registration Confirmation')
            ->markdown('emails.delegationRegist');
    }
}
