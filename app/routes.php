<?php


Route::get('/', array( 'uses'=>'HomeController@getIndex'));
Route::get('/hakkinda', array('as'=>'about' ,'uses'=>'HomeController@getAbout'));
Route::get('/iletisim', array('as'=>'contact' ,'uses'=>'HomeController@getContact'));
Route::get('/faq', array('as'=>'faq' ,'uses'=>'HomeController@getFaq'));

/*Notlar Display and download*/
Route::get('/notlar', array('as'=>'notlar' ,'uses'=>'NotController@getIndex'));
Route::get('/notlar/indirme', array('as'=>'not-indirme' ,'uses'=>'NotController@getIndirme'));

/*Sinavlar Display and download*/
Route::get('/sinavlar', array('as'=>'sinavlar' ,'uses'=>'SinavController@getIndex'));
Route::get('/sinavlar/indirme', array('as'=>'sinav-indirme' ,'uses'=>'SinavController@getIndirme'));

// Route::get('/notsinav/ekleme', array('as'=>'not-sinav-ekle' ,'uses'=>'HomeController@getNotSinavEkleme'));
// Route::get('/notsinav/indirme', array('as'=>'not-sinav-indir' ,'uses'=>'HomeController@getNotSinavIndirme'));


Route::get('/notlar/test', array( 'uses'=>'AccountController@getTest'));


/* 
  Authenticated Group
*/
Route::group(array('before' =>'auth'),function(){

        /*No one can add files if not registered*/
        Route::get('/notlar/ekleme', array('as'=>'not-ekleme' ,'uses'=>'NotController@getEkleme'));
        Route::post('/notlar/drop', array('as'=>'drop' ,'uses'=>'UploadController@postDropNotlar'));
        Route::post('/notlar/process', array('as'=>'process' ,'uses'=>'UploadController@postNotProcess'));

        /*No one can add exams if not registered*/
        Route::get('/sinavlar/ekleme', array('as'=>'sinav-ekleme' ,'uses'=>'SinavController@getEkleme'));
        Route::post('/sinavlar/drop', array('as'=>'drop' ,'uses'=>'UploadController@postDropSinavlar'));
        Route::post('/sinavlar/process', array('as'=>'process' ,'uses'=>'UploadController@postSinavProcess'));


        Route::group(array('before' =>'csrf'),function(){
            Route::post('/account/change-password',array('as'=>'account-change-password-post','uses' =>'AccountController@postChangePassword'));                
        });
        Route::get('/account/reset-password',array('as'=>'account-reset-password','uses' =>'AccountController@getResetPassword'));          
        Route::get('/account/change-password',array('as'=>'account-change-password','uses' =>'AccountController@getChangePassword'));   
        Route::get('/account/signout',array('as'=>'account-signout','uses' =>'AccountController@getSignOut'));  

});


/* 
  UnAuthenticated Group
*/
Route::group(array('before' =>'guest'),function(){ 
    Route::group(array('before' =>'csrf'),function(){
        Route::post('/account/signin',array('as'=>'account-signin-post','uses' =>'AccountController@postSignIn'));   
        Route::post('/account/create',array('as'=>'account-create-post','uses' =>'AccountController@postCreate')); 
        Route::post('/account/forgot-password',array('as'=>'account-forgot-password-post','uses' =>'AccountController@postForgotPassword'));            

    });

    Route::get('/account/create',array('as'=>'account-create','uses' =>'AccountController@getCreate'));
    Route::get('/account/activate/{code}',array('as'=>'account-activate','uses' =>'AccountController@getActivate'));    
    Route::get('/account/signin',array('as'=>'account-signin','uses' =>'AccountController@getSignIn'));     
    Route::get('/account/forgot-password',array('as'=>'account-forgot-password','uses' =>'AccountController@getForgotPassword'));   
    Route::get('/account/signin-forward',array('as'=>'account-signin-forward','uses' =>'AccountController@getSignInForward'));  
    Route::get('/account/recover-password/{code}',array('as'=>'account-recover-password','uses' =>'AccountController@getRecoverPassword')); 


    //Login-with-facebook using oauth-4-laravel
    Route::get('login/facebook',array('as'=>'login-with-facebook' , 'uses'=>'AuthController@loginWithFacebook') );
    Route::post('login/facebook', 'AuthController@loginWithFacebook');


    //Login-with-google using oauth-4-laravel
    Route::get('login/google',array('as'=>'login-with-google' , 'uses'=>'AuthController@loginWithGoogle') );
    Route::post('login/google', 'AuthController@loginWithGoogle');

    //Login-with-twitter using oauth-4-laravel
    Route::get('login/twitter',array('as'=>'login-with-twitter' , 'uses'=>'AuthController@loginWithTwitter') );
    Route::post('login/twitter', 'AuthController@loginWithTwitter');


    //Login-with-linkedin using oauth-4-laravel
    Route::get('login/linkedin',array('as'=>'login-with-linkedin' , 'uses'=>'AuthController@loginWithLinkedin') );
    Route::post('login/linkedin', 'AuthController@loginWithLinkedin');


});

