<?php

namespace App\Console\Commands;

use App\SOLID\Repositories\FirebaseStoreRepository;
use Illuminate\Console\Command;

class FirebaseCommand extends Command
{
    protected $signature = 'firebase:app';

    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $fetchData = new FirebaseStoreRepository();
        $fetchData->store_movies();
        $fetchData->store_tv();
        return $this->info('List Add');
    }
}
