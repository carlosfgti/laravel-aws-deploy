<?php

namespace App\Tenant\Database;

use Illuminate\Support\Facades\DB;

class DatabaseManager
{
    public function createDatabase(string $dbName)
    {
        return DB::statement("
            CREATE DATABASE {$dbName} CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
        ");
    }
}
