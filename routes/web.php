<?php

use App\Events\ReceiveMessage;
use App\Events\SendMessage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/receive", function () {
    return view("receive");
});

Route::get("/send", function (Request $request) {


    return view("send");
});

Route::post("/send-message", function () {

    event(new SendMessage("Sad im sas"));
    return redirect()->back();
})->name("submit");
