<?php
Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('subscriber/approved', 'SubscriberController@approved');
    Route::get('subscriber/cancelled', 'SubscriberController@cancelled');
    Route::get('subscriber/change_to_approved/{id}', 'SubscriberController@change_to_approved');
    Route::get('subscriber/change_to_cancelled/{id}', 'SubscriberController@change_to_cancelled');
    Route::resource('subscriber', 'SubscriberController')->only(['index', 'show']);
    Route::get('subscription/rejected', 'SubscriberController@rejected');
    Route::get('subscription/mark_as_approve/{id}', 'SubscriberController@subscription_change_to_approved');
    Route::get('subscription/mark_as_reject/{id}', 'SubscriberController@subscription_change_to_rejected');
    Route::get('subscription/{status}', 'SubscriberController@subscription')->name('subscription');


    Route::get('claim/rejected', 'ClaimController@rejected_claims')->name('claim');
    Route::get('claim/{status}', 'ClaimController@index')->name('claim');
    Route::get('claim/change_status/{status}/{id}', 'ClaimController@change_status');
    Route::get('claim/cancel/{id}', 'ClaimController@cancel');
    Route::get('vendor/rejected', 'VendorController@rejected');
    Route::get('vendor/change_to_reject/{id}', 'VendorController@change_to_reject');
    Route::resource('vendor', 'VendorController')->except(['show']);
    Route::resource('supply', 'SupplyController')->except(['show']);
    Route::match(['get', 'post'], 'setting', 'AdminController@setting')->name('setting');
    Route::resource('faq', 'FaqController')->except(['show']);
    Route::get('center/reject', 'CenterController@reject');
    Route::get('center/change_to_reject/{id}', 'CenterController@change_to_reject');
    Route::resource('center', 'CenterController')->except(['show']);
    Route::resource('center', 'CenterController')->except(['show']);
    Route::resource('question', 'QuestionController')->only(['index', 'destroy']);
    Route::resource('review', 'ReviewController')->except(['show']);
    Route::get('review/change_review_status/{status}/{id}', 'ReviewController@change_status');

    Route::namespace('Report')->group(function () {
        Route::group(['prefix' => 'report'], function () {
            Route::get('/', 'ReportController@index')->name('report');
            Route::group(['prefix' => 'claim'], function () {
                Route::get('/', 'ClaimReportController@index');
                Route::post('action', 'ClaimReportController@index');
                Route::post('view/{type}/{from}/{to}', 'ClaimReportController@action');
            });

            Route::group(['prefix' => 'vendor'], function () {
                Route::get('/', 'VendorReportController@index');
            });

            Route::group(['prefix' => 'subscription'], function () {
                Route::get('/', 'SubscriptionReportController@index');
            });

            Route::group(['prefix' => 'subscriber'], function () {
                Route::get('/', 'SubscriberReportController@index');
            });

            Route::group(['prefix' => 'center'], function () {
                Route::get('/', 'SubscriptionReportController@index');
            });
        });
    });


    //Route::resource('page', 'PageController')->except(['store', 'show', 'destroy']);
    Route::resource('package', 'PackageController')->except(['store', 'show', 'destroy']);
    //Route::resource('invoice', 'InvoiceController')->except(['destroy']);

    //Route::resource('blog_category', 'BlogcategoryController');
    //Route::resource('blog', 'BlogPostController');
    //Route::resource('poster_category', 'PosterCategoryController');
});