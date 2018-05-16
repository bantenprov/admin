<?php namespace Bantenprov\Admin\Console\Commands;

use Illuminate\Console\Command;

/**
 * The AdminCommand class.
 *
 * @package Bantenprov\Admin
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class AdminCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\Admin package';

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
        $this->info('Welcome to command for Bantenprov\Admin package');
    }
}
