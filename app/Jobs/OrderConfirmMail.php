<?php

namespace App\Jobs;

use App\Http\Services\MailService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class OrderConfirmMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('mail send start');

        try {
            $dt['data'] = $this->data['data'];
            $dt['order'] = $this->data['order'];
            app(MailService::class)->send($this->data['template'], $dt, $this->data['userEmail'], $this->data['userName'], $this->data['subject']);
        } catch (\Exception $e) {
            Log::info( $e->getMessage());
        }
        Log::info('mail send end');
    }
}
