<?php
 
/*!--Route::get('/','Adminauth\Authcontroller@showLoginForm');
Route::post('login','Adminauth\Authcontroller@login');
Route::group(['middleware'=>['admin']],function(){
	Route::get('/dashboard','Admin\Admincontroller@dashboard');
	Route::get('/logout','Adminauth\Admincontroller@logout');
});
	Route::get('/create',function()
	{
		App\User::create([
			'name'=>'Sujata',
			'username'=>'Sujata',
			'email'=>'sujatagiri131@gmail.com',
			'password'=>bcrypt('giri.sujata'),

		]);

});--*/

Route::get('/',function()
{
	return view('welcome');

}
);
Route::get('/dashboard',function()
{
	return view('admin.layout');
}
);

Route::get('poll',function()
{
	return view('pages.poll');
}
);