<?php

namespace App\Services;

use App\Services\Concerns\CreatesSmtpMailer;
use PHPMailer\PHPMailer\Exception as MailException;

class QuoteMailService
{
    use CreatesSmtpMailer;

    private const SERVICE_LABELS = [
        'web-development' => 'Web Development',
        'digital-marketing' => 'Digital Marketing',
        'seo' => 'SEO Optimization',
        'mobile-apps' => 'Mobile App Development',
        'ai-integration' => 'AI Integration',
        'data-analytics' => 'Data Analytics',
        'other' => 'Other',
    ];

    /**
     * @throws MailException
     */
    public function send(array $data): void
    {
        $mail = $this->createSmtpMailer();

        $mail->addAddress($this->recipientEmail());
        $mail->addReplyTo($data['email'], $data['name']);

        $serviceLabel = self::SERVICE_LABELS[$data['service']] ?? $data['service'];
        $name = e($data['name']);
        $email = e($data['email']);
        $message = nl2br(e($data['message']));

        $mail->isHTML(true);
        $mail->Subject = 'New Quote Request - ' . $serviceLabel;
        $mail->Body = <<<HTML
            <h2>New Quote Request</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Service:</strong> {$serviceLabel}</p>
            <p><strong>Message:</strong></p>
            <p>{$message}</p>
        HTML;

        $mail->AltBody = implode("\n", [
            'New Quote Request',
            'Name: ' . $data['name'],
            'Email: ' . $data['email'],
            'Service: ' . $serviceLabel,
            'Message:',
            $data['message'],
        ]);

        $mail->send();
    }
}
