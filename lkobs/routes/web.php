<?php

use App\Http\Controllers\UstAlan;

Route::get('/', function () {
    return view('welcome');
});

 Route::get("/ust",[UstAlan::class,'goster']);
