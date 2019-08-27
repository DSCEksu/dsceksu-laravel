<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $role;
    public $app_name;
    public $mail_name;
    public $mail_address;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $role)
    {
      $this->user = $user;
      $this->role = $role;
      $this->app_name = env('APP_NAME');
      $this->mail_name = env('MAIL_FROM_NAME');
      $this->mail_address = env('MAIL_FROM_ADDRESS');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->subject('Welcome To ' . $this->app_name .' - '.$this->user->name)
				->from($this->mail_address, $this->mail_name)
				->view('modules.emails.welcomemail');
    }
}
