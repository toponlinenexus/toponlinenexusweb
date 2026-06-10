<?php

namespace App\Services;

use App\Services\Concerns\CreatesSmtpMailer;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\Exception as MailException;

class ContactMailService
{
    use CreatesSmtpMailer;

    /**
     * @throws MailException
     */
    public function send(array $data, ?UploadedFile $attachment = null): void
    {
        $mail = $this->createSmtpMailer();

        $mail->addAddress($this->recipientEmail());
        $mail->addReplyTo($data['email'], $data['name']);

        $name = e($data['name']);
        $email = e($data['email']);
        $subject = e($data['subject']);
        $message = nl2br(e($data['message']));
        $attachmentNote = $attachment
            ? '<p><strong>Attachment:</strong> ' . e($this->sanitizeFilename($attachment->getClientOriginalName())) . '</p>'
            : '';

        if ($attachment !== null) {
            $mail->addAttachment(
                $attachment->getRealPath(),
                $this->sanitizeFilename($attachment->getClientOriginalName())
            );

            Log::info('Contact form attachment added to email.', [
                'filename' => $attachment->getClientOriginalName(),
                'size' => $attachment->getSize(),
                'mime' => $attachment->getMimeType(),
            ]);
        }

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Message - ' . $data['subject'];
        $mail->Body = <<<HTML
            <h2>New Contact Message</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong></p>
            <p>{$message}</p>
            {$attachmentNote}
        HTML;

        $altBody = [
            'New Contact Message',
            'Name: ' . $data['name'],
            'Email: ' . $data['email'],
            'Subject: ' . $data['subject'],
            'Message:',
            $data['message'],
        ];

        if ($attachment !== null) {
            $altBody[] = 'Attachment: ' . $this->sanitizeFilename($attachment->getClientOriginalName());
        }

        $mail->AltBody = implode("\n", $altBody);

        $mail->send();
    }

    private function sanitizeFilename(string $filename): string
    {
        $filename = basename(str_replace('\\', '/', $filename));

        return preg_replace('/[^a-zA-Z0-9._-]/', '_', $filename) ?: 'attachment';
    }
}
