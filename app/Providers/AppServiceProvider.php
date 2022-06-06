<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $lastComments = Comment::orderByDesc('created_at')->limit(3)->get();
        // Изменяем коллекцию.
        $lastComments->transform(function ($comment) use ($lastComments) {
            $comment = collect($comment);
            $n = User::find($comment->get('user_id'));
            $comment->put('username', $n->name);
            return $comment;
        });
        $lastComments = collect($lastComments);
        View::share('lastComments', $lastComments);
    }
}
