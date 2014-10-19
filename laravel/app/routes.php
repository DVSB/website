<?php

/**
 * Static page routes, explicit routing FTW!
 */
Route::group(['before' => 'minify.html'], function() {
    Route::get('/', [
        'as' => 'home',
        'uses' => 'PageController@showHomepage'
    ]);

    Route::get('about', [
        'as' => 'about',
        'uses' => 'PageController@showAbout'
    ]);

    Route::get('about/the-team', [
        'as' => 'the-team',
        'uses' => 'PageController@showTeam'
    ]);

    Route::get('donate', [
        'as' => 'donate',
        'uses' => 'PageController@showDonate'
    ]);

    Route::get('download', [
        'as' => 'download',
        'uses' => 'PageController@showDownload'
    ]);

    Route::get('support', [
        'as' => 'support.premium',
        'uses' => 'PageController@showSupport'
    ]);

    Route::get('support/faqs', [
        'as' => 'support.faqs',
        'uses' => 'PageController@showFaqs'
    ]);
});

/**
 * Sitemap generation
 */
Route::get('sitemap.xml', [
    'as' => 'sitemap',
    'uses' => 'SitemapController@generateXml'
]);

/**
 * We'll add a handler here (for now atleast) to serve a user freindly 404 error page
 */
App::missing(function($exception) {
    return Response::view('pages.404', array(), 404);
});
