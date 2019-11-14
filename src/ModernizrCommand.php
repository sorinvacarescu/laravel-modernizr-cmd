<?php

declare(strict_types=1);

namespace Hofmannsven\Modernizr;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class ModernizrCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'modernizr:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the custom Modernizr build.';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Prepare command.
        $cmd = new Collection([
            config('modernizr.modernizr_path', base_path('node_modules/.bin/modernizr')),
            '-c', // Config
            config('modernizr.config_path', base_path('modernizr.json')),
            '-d', // Destination
            config('modernizr.resource_path', resource_path('js/modernizr.min.js')),
        ]);

        // Minification.
        if (config('modernizr.minify')) {
            $cmd->push('-u');
        }

        // Run the command.
        $process = new Process($cmd->toArray());
        $process->run();

        // Executes after the command finishes.
        if (! $process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        // Print the result to the console.
        $this->info($process->getOutput());
    }
}
