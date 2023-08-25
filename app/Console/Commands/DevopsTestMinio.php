<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DevopsTestMinio extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'devops-test:minio';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Minio on CI/CD';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Storage::put('random-number_123 456', config('app.timezone').': '.date('Y-m-d H:i:s'));

        $url = Storage::temporaryUrl(
            'random-number_123 456', now()->addMinutes(5)
        );

        $this->line($url);
    }
}
