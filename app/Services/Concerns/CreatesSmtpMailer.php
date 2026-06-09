<?php

namespace App\Services\Concerns;

use PHPMailer\PHPMailer\PHPMailer;

trait CreatesSmtpMailer
{
    protected function createSmtpMailer(): PHPMailer
    {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = config('mail.mailers.smtp.host');
        $mail->SMTPAuth = true;
        $mail->Username = config('mail.mailers.smtp.username');
        $mail->Password = config('mail.mailers.smtp.password');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = (int) config('mail.mailers.smtp.port', 465);
        $mail->CharSet = PHPMailer::CHARSET_UTF8;

        $mail->setFrom(config('mail.from.address'), config('mail.from.name'));

        return $mail;
    }

    protected function recipientEmail(): string
    {
        return env('QUOTE_RECIPIENT_EMAIL', 'sales@toponlinenexus.com');
    }
}
