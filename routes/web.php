<?php

/**
 * Set the default documentation version...
 */
if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', '5.7');
}

Route::get('/', function () {
    return view('marketing');
});

Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show');

Route::get('partners', function () {
    return view('partners');
});

Route::get('/partner/tighten', function () {
    return view('community-partner-tighten');
});

Route::get('/partner/vehikl', function () {
    return view('community-partner-vehikl');
});

Route::get('/partner/kirschbaum-development-group', function () {
    return view('community-partner-kirschbaum');
});

Route::get('/partner/byte5', function () {
    return view('community-partner-byte5');
});

Route::get('/partner/64robots', function () {
    return view('community-partner-64robots');
});

Route::get('/partner/cubet', function () {
    return view('community-partner-cubet');
});

Route::get('/partner/dev-squad', function () {
    return view('community-partner-dev-squad');
});

// Route::get('/partner/insider', function () {
//     return view('community-partner-insider');
// });
