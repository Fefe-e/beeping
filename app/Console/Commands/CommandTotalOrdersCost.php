<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\CalculateTotalOrderCost;

class CommandTotalOrdersCost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:calculate-total-cost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculando del costo total de todas las ordenes';

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
     * @return int
     */
    public function handle()
    {
        CalculateTotalOrderCost::dispatch();
    }
}
