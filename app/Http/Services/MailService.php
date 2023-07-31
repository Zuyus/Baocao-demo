<?php

namespace App\Http\Services;


use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;

class MailService
{
    protected $defaultEmail;
    protected $defaultName;

    public function __construct()
    {
        $mail_driver = env('MAIL_DRIVER');
        $mail_host = env('MAIL_HOST');
        $mail_port = env('MAIL_PORT');
        $mail_username = env('MAIL_USERNAME');
        $mail_password = env('MAIL_PASSWORD');
        $mail_encryption = env('MAIL_ENCRYPTION');
        $mail_from_address = env('MAIL_FROM_ADDRESS');

        config(['mail.driver' => $mail_driver]);
        config(['mail.host' => $mail_host]);
        config(['mail.port' => $mail_port]);
        config(['mail.username' => $mail_username]);
        config(['mail.password' => $mail_password]);
        config(['mail.encryption' => $mail_encryption]);
        config(['mail.address' => $mail_from_address]);
        $this->defaultEmail = $mail_from_address;
        $this->defaultName = allsetting()['app_title'];
    }


    public function send($template = '', $data = [], $to = '', $name = '', $subject = '')
    {
        try {
            Mail::send($template, $data, function ($message) use ($name, $to, $subject) {
                $message->to($to, $name)->subject($subject)->replyTo(
                    $this->defaultEmail, $this->defaultName
                );
                $message->from($this->defaultEmail, $this->defaultName);
            });
        }catch (\Exception $e){
            Log::info($e->getMessage());
        }
    }

}
