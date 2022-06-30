<?php

namespace App\Jobs;

use App\Mail\SubsMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SubsMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $details, $sub;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details, $sub)
    {
        $this->details = $details;
        $this->sub = $sub;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new SubsMail($this->details);
        Mail::to($this->sub->subscriber_email)->send($email);
    }
}
