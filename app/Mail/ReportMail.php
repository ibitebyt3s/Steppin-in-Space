<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReportMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $newUsers;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newUsers)
    {
        $this->newUsers = $newUsers;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.report')
            ->with([
                'newUsers' => $this->newUsers
            ]);
    }
}
