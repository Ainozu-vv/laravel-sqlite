<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
});


Route::get('/posts', function () {
    //$posts=DB::table('posts')->get();
    //$posts=DB::table('posts')->selectRaw('*')->get();
    //$posts=Post::all();

    //$posts=Post::all()->pluck('title');

    //$posts = DB::table('posts')->select('title', 'body')->find(4);
    $posts = DB::table('posts')->find(4, ['title', 'body']);

    dd($posts);
});

Route::get('/posts-count', function () {
    $postsCount = DB::table('posts')->count();
    dd($postsCount);
});
Route::get('/filtered-posts', function () {
    DB::enableQueryLog();
    /*$posts = DB::table('posts')
        //->where('published_at', '>', '2023-04-09')
        //->where('published_at', '<', '2023-04-11')
         ->whereBetween('published_at', ['2023-04-09', '2023-04-11'])
        ->whereNotNull('updated_at')
        ->get();*/

    $posts = DB::table('posts')
        ->whereBetween('published_at', ['2023-04-09', '2023-04-11'])
        ->orWhere('title', 'LIKE', '%th%')
        ->get();

    dd($posts, DB::getQueryLog());
});

Route::get('/posts-by-day', function () {
    DB::enableQueryLog();
    $posts = DB::table('posts')
        //->select(DB::raw('DATE(published_at) as day, COUNT(*) AS posts_by_day'))
        ->selectRaw('DATE(published_at) as day, COUNT(*) AS posts_by_day')
        ->groupBy('day')
        ->having('day', '<>', '2023-04-10')
        ->get();
    dd($posts, DB::getQueryLog());
});
Route::get('/latest-posts', function () {
    $posts = DB::table('posts')
        ->orderBy('published_at', 'desc')
        ->first();
    dd($posts);
});

Route::get('/random-post', function () {
    DB::enableQueryLog();
    $post = DB::table('posts')
        ->inRandomOrder()
        ->first();

    //$post=Post::inRandomOrder()->first();
    dd($post, DB::getQueryLog());
});
Route::get('/latest-posts-sql', function () {
    $posts = DB::table('posts')
        ->orderBy('published_at', 'desc')
        ->toSql();
    dd($posts);
});
Route::get('/insert-post', function () {
    DB::table('posts')->insert([
        'title' => fake()->sentence(1),
        'slug' => fake()->slug(2),
        'body' => fake()->paragraph(3),
        'published_at' => fake()->dateTime(),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
});
Route::get('/insert-posts', function () {
    $postsCount = fake()->randomDigitNotNull();
    $posts = [];
    for ($i=0; $i < $postsCount; $i++)
    {
        DB::table('posts')->insert([
            'title' => fake()->sentence(1),
            'slug' => fake()->slug(2),
            'body' => fake()->paragraph(3),
            'published_at' => fake()->dateTime(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    dd($postsCount . ' posts inserted');
});

Route::get('/update-posts', function () {
    DB::table('posts')
        ->where('created_at', '>', now()->subDays(1)->endOfDay())
        ->update(['published_at' => now()]);
});
Route::get('/delete-latest-post', function () {
    DB::table('posts')
        ->orderBy('id', 'desc')
        ->limit(1)
        ->delete();
});
Route::get('/delete-posts', function () {
 DB::table('posts')->delete();
 DB::table('posts')->truncate();
});

Route::get('/posts/{post}/rating', function ($post) { //$post = id
 $result = DB::table('ratings')
 ->join('posts', 'ratings.id', '=', 'posts.rating_id') //inner join
 ->select('title', 'body', 'score')
 ->where('post_id', $post)
 ->first();
 dd($result);
});
