<?php

Route::get('/', 'User\UsersController@landing_page');
Route::get('/faq', 'User\HomeController@faq');
Route::get('/contact-us', 'User\HomeController@contact_us');
Route::get('/about-us', 'User\HomeController@about_us');
Route::get('/how-it-works', 'User\HomeController@how_it_works');
Route::get('/affiliate', 'User\HomeController@affiliate');
Route::get('/subscription', 'User\HomeController@subscription');
Route::get('/store', 'User\HomeController@store');
Route::get('/contact-us', 'User\HomeController@contact');
Route::get('/coupons2', 'User\HomeController@coupons2');
Route::get('/booking', 'User\HomeController@booking');
Route::get('/makecoupon', 'User\HomeController@makecoupon');
Route::get('/addcoupon', 'User\HomeController@addcoupon');

Route::get('/my-coupon', 'User\HomeController@my_coupon');
Route::get('/alert', 'User\HomeController@alert');
Route::get('/menukaart', 'User\HomeController@menukaart');
Route::get('/coupons', 'User\HomeController@coupons');
Route::get('/info', 'User\HomeController@info');
Route::get('/edit_profile_2', 'User\HomeController@edit_profile2');
Route::get('/alerts', 'User\HomeController@alerts');

Auth::routes(['login' => true]);
Auth::routes(['register' => true]);


	Route::get('/redirect', 'SocialAuthFacebookController@redirect');
    Route::get('/callback', 'SocialAuthFacebookController@callback');
	
	
	
Route::group(['prefix' => '','as' => 'user.' ,'namespace' => 'User','middleware' => ['auth']], function () {
    //FACEBOOK LOGIN 
	
	//GOOGLE LOGIN 
	Route::get('/redirectg/{role}', 'SocialAuthGoogleController@redirect');
	Route::get('/callbackg', 'SocialAuthGoogleController@callback');
	
	//TWITTER  LOGIN 
	Route::get('/twitter/redirect/{role}', 'SocialAuthTwitterController@redirect');
	Route::get('twitter/callback', 'SocialAuthTwitterController@callback');
	
	
	Route::get('/profile', 'HomeController@profile');
	Route::get('/store-profile', 'HomeController@store_profile');

	Route::get('user-profile', 'UsersController@editProfile'); 
	Route::get('edit-profile', 'UsersController@editProfile'); 
	Route::get('logout', 'UsersController@logout');
	
	Route::post('update-profile', 'UsersController@UpdateEditProfile')->name('update-profile'); 
	 Route::post('changepassword', 'UsersController@passwordUpdate'); 
	Route::post('upload_profile_photo', 'UsersController@uploadProfilePhoto'); 
	Route::post('upload_banner_photo', 'UsersController@uploadBannerPhoto');
});



  
  
Route::post('user/cityDropdown', 'User\UsersController@cityDropdown');
Route::post('user/calculateAge', 'User\UsersController@calculateAge');
Route::post('user/verifiedAadhar', 'User\UsersController@verifiedAadhar');
	
	
	Route::get('verify/account/{token}', 'Auth\RegisterController@verifyAccount'); //VERIFY ACCOUNT


Route::get('confirmation', 'Auth\RegisterController@Registeration_confirmation'); //REGISTER CONFIRMATION

// Password Reset Routes...
Route::post('send_reset_link', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::post('password/reset_new_user_password', 'Auth\ResetPasswordController@reset_new_user_password');


/* Route::get('verify/account/{token}', 'User\UsersController@verifyAccount'); //VERIFY ACCOUNT


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::post('password/reset_new_user_password', 'Auth\ResetPasswordController@reset_new_user_password'); */

Route::group(['prefix' => '','as' => 'user.' ,'namespace' => 'User'], function () {
	
	
});
