<?php

use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Notification;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-notification',function(){
    $user = User::find(2);
    // $user->notify(new EmailNotification());
    Notification::send($user, new EmailNotification());
    return redirect()->back();
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
