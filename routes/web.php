<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;




Route::get('ping', function () {
    $mailchimp = new \MailchimpMarketing\Configuration();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us14'
    ]);

    $response = $mailchimp->lists->addListMember('e6be6cd4d9', [
        'email_address' => 'hugo@suarezhomeinspeciton.com',
        'status' => 'subscribed'
    ]);
    ddd($response);
});

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/sessions', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

