<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $inquiry;
    public $serviceName;
    public $cityName;
    public function __construct($inquiry)
    {
        $this->inquiry = $inquiry;
        $this->serviceName = $inquiry->service->name ?? '';
        $this->cityName = $inquiry->city->name ?? '';
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: ' Inquiry Mail for ' . ucwords($this->serviceName) . ' in ' . ucwords($this->cityName),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.inquiry-mail',
        );
    }

    public function build()
    {
        return $this->replyTo($this->inquiry->email)->with([
            'data' => $this->inquiry,
            'service_name' => $this->serviceName,
            'city_name' => $this->cityName,
        ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
