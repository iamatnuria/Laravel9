<?php

use App\Enums\PostState;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/{post}', function (Post $post) {
   return $post;
})->name('posts.show');

/* STATE BY WILDCARD BINDING
 * Route::get('/posts/{state}', function (PostState $state) {
   dd($state);
});
 *
 */

/* CHECK IF STATE IS DRAFT
 * Route::get('/', function () {
    $post = Post::inRandomOrder()->first();

    if ($post->state === PostState::Draft){
        return 'It is a draft';
    }

    return 'Done';
});
 *
 */


// ENUM ATTRIBUTE CASTING
/*Route::get('/', function () {
    $post = new Post;

    $post->user_id = 1;
    $post->title = 'My title';
    $post->body = 'My body';
    $post->state = PostState::Published;

    $post->save();

    return ' Done';
});*/

// LARAVEL SCOUT DATABASE ENGINE
/*
Route::get('/', function () {
    return Post::search(' molestiae')->get();
});*/

// FORCED SCOPE BINDINGS
/*
Route::get('/users/{user}/posts/{post}', function (User $user, Post $post) {
    return $post;
})->scopeBindings();
*/

// BLADE STRING RENDERING
/*
 * Route::get('/', function () {
    return Blade::render('{{ $greeting }}, World', ['greeting' => 'Hello']);
    return view('welcome')->name('home');
});
 * */

// ROUTE CONTROL GROUPING
/*Route::controller(PostController::class)->group(function (){
    Route::post('/posts', 'index');
    Route::post('/posts/{$post}', 'show');
    Route::post('/posts', 'store');
});*/

// NEW HELPER FUNCTIONS

//Route::get('/endpoint', function () {
//    // THIS IS IDENTICAL TO REDIRECT->ROUTE
//    return to_route('home')
//
//
//    //return redirect()->route('home');
//});





