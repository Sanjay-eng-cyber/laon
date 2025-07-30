<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ProjectSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating project folders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('storage:link');
        $this->info('Storage has been linked.');
        $this->info('creating required directories.');
        Storage::disk('public')->makeDirectory('images');
        $this->line('...');
        Storage::disk('public')->makeDirectory('images/services');
        $this->line('...');
        Storage::disk('public')->makeDirectory('images/blog');
        $this->line('...');
        Storage::disk('public')->makeDirectory('images/news');
        $this->line('...');
        $this->info('required directories created.');
    }
}
