<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|   Table of Contents
|   =================
|   * 1. View Web Page
|        -- View Landing Page
|           * View Remarks
|
|
*/

Route::get('/', function() {return redirect()->to("/landing");});
Route::get('/landing', 'PageRequestController@viewLanding');
Route::get('/landing/hotel', 'PageRequestController@viewHotelPage');
Route::get('/remark/secgen2020', 'PageRequestController@viewRemarkSecgen2020');
Route::get('/remark/secgenGMUNC', 'PageRequestController@viewRemarkSecgenGmunc');
Route::get('/about', 'PageRequestController@viewAbout');
Route::get('/councils', 'PageRequestController@viewCouncils');
Route::get('/councils/WHA', 'PageRequestController@viewCouncilsWHA');
Route::get('/councils/UNEP', 'PageRequestController@viewCouncilsUNEP');
Route::get('/councils/DISEC', 'PageRequestController@viewCouncilsDISEC');
Route::get('/councils/UNESCO', 'PageRequestController@viewCouncilsUNESCO');
Route::get('/councils/CRISIS', 'PageRequestController@viewCouncilsCRISIS');
Route::get('/councils/UNSC', 'PageRequestController@viewCouncilsUNSC');
Route::get('/councils/UNCA', 'PageRequestController@viewCouncilsUNCA');
Route::get('/registration', 'PageRequestController@viewRegistrationLanding');
Route::get('/registration/information', 'PageRequestController@viewRegistrationInformation');
Route::get('/registration/policy', 'PageRequestController@viewRegistrationPolicy');

// Route::get('/test', 'PageRequestController@viewTest');
// Route::get('/blog', 'PageRequestController@viewBlogTest');
// Route::get('/validator', 'PageRequestController@viewValidator');
// Route::get('/adt', 'PageRequestController@viewADT');
// Route::get('/mail', 'PageRequestController@viewADT');
// Route::get('/admin', 'AdminController@viewAdminLanding');


// Nanti ganti ke route::post('/admin')
// Route::get('/admin-dashboard', 'AdminController@viewAdminDashboard');

// Route::get('/admin-delegate', 'IndividualDelegatesController@index');
// Route::get('/admin-delegate/{$delegate->id}', 'IndividualDelegatesController@show');

// Route::get('/admin-delegation', 'DelegationsController@index');
// Route::get('/admin-delegation/{$delegate->id}', 'DelegationsController@show');

// Route::get('/admin-announcement', 'AdminController@viewAnnouncementDashboard');
// Route::get('/admin-press', 'AdminController@viewPressDashboard');

Route::post('/registration/individual-delegate', 'IndividualDelegatesController@sendDataIndividualDelegate');
Route::post('/registration/delegations', 'DelegationsController@sendDataDelegations');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/create', 'PressController@create');
Route::post('/home/create', 'PressController@store');
Route::get('/home/update', 'PressController@updateIndex');
Route::get('/home/update/{id}', 'PressController@edit');
Route::post('/home/update/{id}', 'PressController@update');

Route::get('/home/delete', 'PressController@deleteIndex');
Route::get('/home/delete/{id}', 'PressController@delete');

Route::get('/press', 'PageRequestController@viewPressIndex');
Route::get('/press/{id}', 'PageRequestController@viewPress');

Route::get('/home/help', 'PressController@viewHelp');
Route::get('/gossip', 'GossipController@viewGossipIndex');
Route::get('/gossip/create', 'GossipController@create');
Route::post('/gossip/create', 'GossipController@store');


Route::get('/question','QuestionController@questionView');
Route::post('/question/send','QuestionController@send');
