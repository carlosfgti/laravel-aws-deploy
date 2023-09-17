<?php

use App\Tenant\Database\DatabaseManager;
use Illuminate\Support\Facades\Route;

Route::get('/test', function (DatabaseManager $databaseManager) {
    $databaseManager->createDatabase('test_db');
    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
