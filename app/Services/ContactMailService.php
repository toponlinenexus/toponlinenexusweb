<?php

namespace App\Services;

use App\Services\Concerns\CreatesSmtpMailer;
use PHPMailer\PHPMailer\Exception as MailException;

class ContactMailService
{
    use CreatesSmtpMailer;

    /**
     * @throws MailException
     */
    public function send(array $data): void
    {
        $mail = $this->createSmtpMailer();

        $mail->addAddress($this->recipientEmail());
        $mail->addReplyTo($data['email'], $data['name']);

        $name = e($data['name']);
        $email = e($data['email']);
        $subject = e($data['subject']);
        $message = nl2br(e($data['message']));

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Message - ' . $data['subject'];
        $mail->Body = <<<HTML
            <h2>New Contact Message</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong></p>
            <p>{$message}</p>
        HTML;

        $mail->AltBody = implode("\n", [
            'New Contact Message',
            'Name: ' . $data['name'],
            'Email: ' . $data['email'],
            'Subject: ' . $data['subject'],
            'Message:',
            $data['message'],
        ]);

        $mail->send();
    }
}
