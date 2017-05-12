<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Pages needed pre-go-live

# View Profile
# Edit Profile
# Compose Email
# Inbox
# View Email
# Calendar
# Member Management (data tables)
# FAQs
# Support Form
# Better Fancy-checkbox

// Component Pages

Route::get('/',
    [
        'uses' => 'StandardPagesController@dashboard',
        'as' => 'admin.dashboard'
    ]);

Route::get('widgets',
    [
        'uses' => 'StandardPagesController@widgets',
        'as' => 'admin.widgets'
    ]);

// > App Pages


Route::get('/log-in',
    [
        'uses' => 'AuthScreensController@login',
        'as' => 'admin.logIn'
    ]);

Route::get('/forgot-password',
    [
        'uses' => 'AuthScreensController@forgotPassword',
        'as' => 'admin.forgotPassword'
    ]);

Route::get('/forgot-password-success',
    [
        'uses' => 'AuthScreensController@forgotPasswordSuccess',
        'as' => 'admin.forgotPasswordSuccess'
    ]);

Route::get('/sign-up',
    [
        'uses' => 'AuthScreensController@signUp',
        'as' => 'admin.signUp'
    ]);

Route::get('/sign-up-success',
    [
        'uses' => 'AuthScreensController@signUpSuccess',
        'as' => 'admin.signUpSuccess'
    ]);

Route::group(['prefix' => 'app-pages'], function()
{
    Route::get('/faqs',
        [
            'uses' => 'AppPagesController@faqs',
            'as' => 'admin.appPages.faqs'
        ]);


    Route::get('/inbox',
        [
            'uses' => 'AppPagesController@inbox',
            'as' => 'admin.appPages.inbox'
        ]);

    Route::get('/inbox/view',
        [
            'uses' => 'AppPagesController@inboxView',
            'as' => 'admin.appPages.inbox.view'
        ]);

    Route::get('/inbox/compose',
        [
            'uses' => 'AppPagesController@inboxCompose',
            'as' => 'admin.appPages.inbox.compose'
        ]);

    Route::get('/profile',
        [
            'uses' => 'AppPagesController@profile',
            'as' => 'admin.appPages.profile'
        ]);

    Route::get('/profile/update',
        [
            'uses' => 'AppPagesController@profileUpdate',
            'as' => 'admin.appPages.profile.update'
        ]);

    Route::get('/orders',
        [
            'uses' => 'AppPagesController@orders',
            'as' => 'admin.appPages.orders'
        ]);

    Route::get('/calendar',
        [
            'uses' => 'AppPagesController@calendar',
            'as' => 'admin.appPages.calendar'
        ]);

    Route::get('/enquiry',
        [
            'uses' => 'AppPagesController@enquiry',
            'as' => 'admin.appPages.enquiry'
        ]);

    Route::get('/page-not-found',
        [
            'uses' => 'AppPagesController@pageNotFound',
            'as' => 'admin.appPages.pageNotFound'
        ]);
});

// Fundamentals
Route::get('tables',
    [
        'uses' => 'StandardPagesController@tables',
        'as' => 'admin.tables'
    ]);

Route::get('forms',
    [
        'uses' => 'StandardPagesController@forms',
        'as' => 'admin.forms'
    ]);

Route::get('chart-js',
    [
        'uses' => 'StandardPagesController@chartJs',
        'as' => 'admin.chartJs'
    ]);

// > UI Components
Route::group(['prefix' => 'ui-components'], function()
{
    Route::get('buttons',
        [
            'uses' => 'UIComponentsController@buttons',
            'uses' => function () {
                return view('admin.uiComponents.buttons')->with('activePage', 'uiComponents.buttons');
            },
            'as' => 'admin.uiComponents.buttons'
        ]);

    Route::get('badges-and-labels',
        [
            'uses' => 'UIComponentsController@badgesAndLabels',
            'uses' => function () {
                return view('admin.uiComponents.badgesAndLabels')->with('activePage', 'uiComponents.badgesAndLabels');
            },
            'as' => 'admin.uiComponents.badgesAndLabels'
        ]);

    Route::get('typography',
        [
            'uses' => 'UIComponentsController@typography',
            'uses' => function () {
                return view('admin.uiComponents.typography')->with('activePage', 'uiComponents.typography');
            },
            'as' => 'admin.uiComponents.typography'
        ]);

    Route::get('grid-system',
        [
            'uses' => 'UIComponentsController@gridSystem',
            'uses' => function () {
                return view('admin.uiComponents.gridSystem')->with('activePage', 'uiComponents.gridSystem');
            },
            'as' => 'admin.uiComponents.gridSystem'
        ]);

    Route::get('panels',
        [
            'uses' => 'UIComponentsController@panels',
            'uses' => function () {
                return view('admin.uiComponents.panels')->with('activePage', 'uiComponents.panels');
            },
            'as' => 'admin.uiComponents.panels'
        ]);

    Route::get('pagination',
        [
            'uses' => 'UIComponentsController@pagination',
            'uses' => function () {
                return view('admin.uiComponents.pagination')->with('activePage', 'uiComponents.pagination');
            },
            'as' => 'admin.uiComponents.pagination'
        ]);

    Route::get('progress-bars',
        [
            'uses' => 'UIComponentsController@progressBars',
            'uses' => function () {
                return view('admin.uiComponents.progressBars')->with('activePage', 'uiComponents.progressBars');
            },
            'as' => 'admin.uiComponents.progressBars'
        ]);

    Route::get('alerts',
        [
            'uses' => 'UIComponentsController@alerts',
            'uses' => function () {
                return view('admin.uiComponents.alerts')->with('activePage', 'uiComponents.alerts');
            },
            'as' => 'admin.uiComponents.alerts'
        ]);
});

Route::get('/toggle-skin-colour/{identifier}', function($identifier)
{
    if ($identifier === 'default') {
        Session::forget('skin.colour');
    } else {
        Session::put('skin.colour', $identifier);
    }
});
Auth::routes();

Route::get('/home', 'HomeController@index');

////////////////////////////////  ~~ Main ~~ ///////////////////////////////////
Auth::routes();
Route::get('/notAuthorized', 'HomeController@notAllowed');
Route::get('users/manage/roles', 'Auth\UsersController@setRoles')->name('users/manage/roles');
Route::post('users/store', 'Auth\UsersController@store')->name('users/store');
Route::resource('/users', 'Auth\UsersController', ['middleware' => ['role:super-admin']]);

////////////////////////////////  ~~ Complaints ~~ ///////////////////////////////////
Route::group(['prefix' => 'complaint'], function () {
    Route::get('active','complaints\ComplaintController@active')->name('active');
    Route::get('new','complaints\ComplaintController@add')->name('new');
    Route::post('add','complaints\ComplaintController@store')->name('add');
    Route::get('edit/{id}','complaints\ComplaintController@edit')->name('edit');
    Route::post('update','complaints\ComplaintController@up')->name('update');
    Route::any('delete/{id}','complaints\ComplaintController@destroy')->name('delete');
});

////////////////////////////////  ~~ NODE ~~ ///////////////////////////////////
Route::group(['prefix' => 'node'], function () {
    Route::get('all','Node\NodeController@view')->name('all');
    Route::post('save','Node\NodeController@store')->name('save');
    Route::any('edit/{id}','Node\NodeController@edit')->name('edit');
    Route::any('update','Node\NodeController@update')->name('update');
    Route::any('delete/{id}','Node\NodeController@destroy')->name('delete');
});

////////////////////////////////  ~~ SALES PERSON ~~ ///////////////////////////////////
Route::group(['prefix' => 'sales/person'], function () {
    Route::get('all','Sales\SalesPersonController@view')->name('all');
    Route::post('save','Sales\SalesPersonController@store')->name('save');
    Route::any('edit/{id}','Sales\SalesPersonController@edit')->name('edit');
    Route::any('update','Sales\SalesPersonController@update')->name('update');
    Route::any('delete/{id}','Sales\SalesPersonController@destroy')->name('delete');
});

////////////////////////////////  ~~ SALES PERSON ~~ ///////////////////////////////////
Route::group(['prefix' => 'job'], function () {
    Route::get('new','jobs\JobController@add')->name('new');
    Route::post('save','jobs\JobController@store')->name('save');

    // ~~~~~~~~~~~~~~~ JSON ~~~~~~~~~~~~~~~~ //
    Route::any('json/item/price/{id}', 'jobs\JobController@itemPrice')->name('json/item/price');

});
