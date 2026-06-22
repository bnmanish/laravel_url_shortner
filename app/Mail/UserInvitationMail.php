<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class UserInvitationMail extends Mailable
{
    public $user;
    public $company;
    public $password;

    public function __construct($user, $company, $password)
    {
        $this->user = $user;
        $this->company = $company;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Account Invitation')->view('emails.invitation');
    }
}