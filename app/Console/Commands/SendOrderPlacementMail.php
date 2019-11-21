<?php

namespace App\Console\Commands;

use App\Mail\OrderPlacement;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendOrderPlacementMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:placement-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Order placement email send command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Mail::to('karim@gmail.com')->send(new OrderPlacement(32));
    }
}
