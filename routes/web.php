<?php


Route::get('demo',function(){
    
    return view('welcome');
});


Route::get('/sub','SubscribersController@subscribers');


Route::get('/dgr', 'MailSedingController@DesignConsultation');



Route::get('/search','PublicPagesController@getSearch');

Route::get('/','PublicPagesController@getIndex');

Route::get('/about','PublicPagesController@getAbout');

Route::get('/product','PublicPagesController@getProduct');

Route::get('/category/product/{id}','PublicPagesController@getCtgProduct');

Route::get('/single-product/{id}','PublicPagesController@getSingleProduct');

Route::get('/projects/{id}','PublicPagesController@getProjectsid');

Route::get('/projects','PublicPagesController@getProjects');

Route::get('/single-project/{id}','PublicPagesController@getSingleProject');

Route::get('/blog','PublicPagesController@getBlog');

Route::get('/single-blog/{id}','PublicPagesController@getSingleBlog');

Route::get('/request','PublicPagesController@getRequest');

Route::get('/quote','PublicPagesController@getQuote');

Route::get('/ask-question','PublicPagesController@getAskQuestion');

Route::post('/ask-question','PublicPagesController@postAskQuestion');


Route::post('/newsletter','NewsletterController@postNewslatter');


// mail 



// admin

Route::group(['prefix'=>'auth'], function(){
    
    Route::get('add-new-user','AccessController@addnewUser');
    Route::post('add-new-user','AccessController@postaddnewUser');
    
    Route::get('signup', ['as'=>'signup', 'uses'=>  'AccessController@signup']);
    Route::post('signup',                           'AccessController@postSignup');
    
    Route::get('login', ['as'=>'login','uses'=> 'AccessController@login']);
    Route::post('login',                        'AccessController@postLogin');
    
    Route::get('/logout', ['as'=>'logout','uses'=> 'AccessController@logout']);
    
    Route::get('forgot-password',               'AccessController@forgotPassword');
    Route::post('forgot-password',              'AccessController@postForgotPassword');
    
    Route::get('change-password','AccessController@Changepassword');
    Route::post('change-password','AccessController@PostChangepassword');
    
});


Route::group(['middleware' => ['auth'], 'prefix'=>'admin'], function(){
    Route::get('/dashboard', ['as'=>'dashboard', 'uses'=> 'DashboardController@getDashboard']);
    Route::resource('user','UserController');
    Route::resource('slider','SliderController');
    Route::resource('categories','CategoriesController');
    Route::resource('aboutus','AboutUsController');
    Route::resource('products','ProductsController');
    Route::resource('location','LocationsController');
    Route::resource('blogs','BlogsController');
    Route::resource('partners','PartnersController');
    Route::resource('partners-images','PartnerimagesController');
    Route::resource('projects','ProjectControll');
    Route::get('newsletter','SubscribersController@getNewslatter');
    Route::resource('newsletters','SubscribersController');
});


