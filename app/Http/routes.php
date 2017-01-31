<?php

// use App\Notifications\LessonPublished;
use App\Notifications\InvoicePaid;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {

  return view('welcome');
});


// Route::get('index', function () {
//   $people = ['Taylor', 'Matt', 'Jeffrey'];
//     return view('welcome', compact('people'));
// });
//
Route::get('about', function () {
    return view('about');
});
//
Route::get('fileupload', function () {
    return view('fileupload');
});

Route::get('notifyme', function () {
  $user = App\User::first();
  $lesson = App\Lesson::first();
  $user->notify(new App\Notifications\LessonPublished($lesson));
  // $user->notify(new InvoicePaid($invoice));
    return view('notifyme');
});

Route::post('avatars', function () {
  request()->file('avatar')->store('avatars');

  return view('fileupload');
});
