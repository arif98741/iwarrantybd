<?php
Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('subscriber', 'SubscriberController')->only(['index']);
    Route::get('claim/{status}', 'ClaimController@index')->name('claim');
    // Route::resource('subscriber', 'SubscriberController');
    //Route::match(['get', 'post'], 'setting', 'AdminController@setting')->name('setting');
    //Route::resource('page', 'PageController')->except(['store', 'show', 'destroy']);
    //Route::resource('package', 'PackageController')->except(['store', 'show', 'destroy']);
    //Route::resource('invoice', 'InvoiceController')->except(['destroy']);

    //Route::resource('blog_category', 'BlogcategoryController');
    //Route::resource('blog', 'BlogPostController');
    //Route::resource('poster_category', 'PosterCategoryController');
});