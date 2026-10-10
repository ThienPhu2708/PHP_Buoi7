<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

Route::get('/', function () {
    return view('welcome');
});

//Route có tham số động
Route::get('/articles/page/{page}',function($page){
    return "Trang số:" .(int)$page;
})->whereNumber('page')->name('articles.page');

//Tham số tùy chọn + regex slug
Route::get('/articles/slug/{slug?}',function($slug='Khong co Slug'){
    return "Slug:".$slug;
})->where('slug','[a-z0-9]+');

Route::prefix('admin')->group(function(){
    Route::get('/articles', fn()=>'Quản trị bài viết')
    ->name('admin.articles.index');
});


//Route Model Binding (implicit): {article} -> Article $article
Route::get('/articles/show/{article}', function (Article $article) {
    return "Bài viết #{$article->id}: {$article->title} - {$article->body}";
})->name('articles.show.bound');

//Controller Articles
Route::resource('articles', ArticleController::class);










