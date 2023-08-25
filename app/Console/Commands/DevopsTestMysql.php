<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DevopsTestMysql extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'devops-test:mysql';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test MySQL on CI/CD';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::factory()->create();

        $this->line($user);
    }
}
