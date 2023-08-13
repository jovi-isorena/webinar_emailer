<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Certificate;
use Illuminate\Mail\Mailables\Attachment;

class CertificateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $certificate;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Certificate $certificate)
    {
        $this->certificate = $certificate;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Data Security: Your Privacy Matters Webinar Certificate',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'certificate.mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [
            Attachment::fromPath('ecert/'. $this->certificate->name . '.pdf'),
        ];
    }
}
