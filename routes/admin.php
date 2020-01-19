<?php
Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('subscriber', 'SubscriberController')->only(['index']);
    Route::get('subscription/{status}', 'SubscriberController@subscription')->name('subscription');
    Route::get('claim/{status}', 'ClaimController@index')->name('claim');
    Route::get('claim/change_status/{status}/{id}', 'ClaimController@change_status');
    Route::resource('vendor', 'VendorController')->except(['show']);
    Route::resource('supply', 'SupplyController')->except(['show']);
    Route::match(['get', 'post'], 'setting', 'AdminController@setting')->name('setting');
    Route::resource('faq', 'FaqController')->except(['show']);
    Route::resource('center', 'CenterController')->except(['show']);
    //Route::resource('page', 'PageController')->except(['store', 'show', 'destroy']);
    Route::resource('package', 'PackageController')->except(['store', 'show', 'destroy']);
    //Route::resource('invoice', 'InvoiceController')->except(['destroy']);

    //Route::resource('blog_category', 'BlogcategoryController');
    //Route::resource('blog', 'BlogPostController');
    //Route::resource('poster_category', 'PosterCategoryController');
});