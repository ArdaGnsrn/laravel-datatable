<?php

namespace ArdaGnsrn\DataTable\Commands;

use Illuminate\Console\Command;

class DataTableCommand extends Command
{
    public $signature = 'laravel-datatable';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
