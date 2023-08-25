<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class DevopsTestRedis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'devops-test:redis';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Redis on CI/CD';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Cache::put('random-number_123 456', config('app.timezone').': '.date('Y-m-d H:i:s'));

        $this->line(Cache::get('random-number_123 456'));
    }
}
