<?php

namespace ArdaGnsrn\DataTable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ArdaGnsrn\DataTable\DataTable
 */
class DataTable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ArdaGnsrn\DataTable\DataTable::class;
    }
}
