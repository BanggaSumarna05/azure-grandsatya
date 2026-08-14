<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuotationMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $detail;

    public function __construct(array $detail)
    {
        $this->detail = $detail;
    }

    public function build(): static
    {
        $senderName = $this->detail['name'] ?? 'Unknown';

        return $this
            ->subject("Request Quotation Rental dari {$senderName} — Grand Satya")
            ->view('formatMail');
    }
}
